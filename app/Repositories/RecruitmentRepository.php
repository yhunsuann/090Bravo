<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Models\Recruitments;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RecruitmentRepository implements RecruitmentRepositoryInterface
{
    public function allRecruitments($data = [])
    {
        if ($data) {
            $status = $data['status'];
            $keyword = $data['keyword'];
            $dateFrom = $data['dateFrom'];
            $dateTo = $data['dateTo'];

            return Recruitments::withTrashed()
                            ->when($keyword, function ($q) use ($keyword) {
                                $q->where('title', 'like', '%' .$keyword. '%');
                            })->when($status, function($q) use ($status) {
                                $q->where('status', $status);
                            })->when($dateFrom, function($q) use ($dateFrom,$dateTo) {
                                $q->whereBetween('created_at', [$dateFrom, $dateTo]);
                            })->paginate(5);
        } else {
            return  Recruitments::paginate(5);
        }
    }

    public function addRecruitments($data)
    {
        return Recruitments::create($data);
    }

    public function updateCruitments($data, $id)
    {
        return Recruitments::Where('id', $id)->update($data);
    }

    public function deleteCruitments($id)
    {
        $recruitments = Recruitments::find($id);
        $recruitments->delete();
    }
   
    public function editCruitments($id)
    {
        return Recruitments::where('id', $id)->get();
    } 

    public function deleteMutipleBaseIds($ids)
    {
        return Recruitments::destroy($ids);  
    }

    public function recoverPass($data)
    {
        $email = $data['email'];
        $now = Carbon::now()->format('d-m-Y');
        $title_mail = "Forget Password". ' ' .$now;
        $customer = User::where('email', '=', $data['email'])->get();
        $customer_id = $customer[0]->getoriginal('id');

        if($customer){
            $count_customer = $customer->count();
            if ( $count_customer == 0) {
                return redirect()->back();
            } else {
                $token_random = bin2hex(Str::random(20));
                $data = array();
                $data['token'] = $token_random;
                User::Where('id', $customer_id)->update($data);

                $link_reset_pass = url('/reset-new-pass?token='.$token_random);
                $data = array(
                    "name" => $title_mail,
                    "body" => $link_reset_pass,
                    'email' => $email
                );

                Mail::send('admin.forget_pass_notify',['data' => $data],function($message) use($title_mail, $data){
                    $message->to($data['email'])->subject($title_mail);
                    $message->from('bphuoc.20it10@vku.udn.vn', $title_mail);
                }); 
            }     
        }
    }

    public function updatePass($data)
    {
        $new_pass = $data['new_pass'];
        $token = $data['token'];
        $data = array();
        $data['password'] = HASH::make($new_pass);

        User::Where('token', $token)->update($data);
    }   
}