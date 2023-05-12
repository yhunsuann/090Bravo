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
//xoá line trống với ở repository ko sử dụng trực tiếp model
    public function allRecruitments()
    {
        return Recruitments::where('deleted_at',null)->paginate(5); // sai tìm hiểu ORM
    }

    public function addRecruitments($data)
    {
        return Recruitments::create($data);
    }// cách xuông 
    public function updateCruitments($data, $id)
    {
        Recruitments::Where('id', $id)->update($data);
    }

    public function deleteCruitments($id)
    {
        $data = array();
        $data['deleted_at'] = now();//sai ko update kiểu này tìm hiểu softdelete
        Recruitments::Where('id', $id)->update($data);
    }
   
    public function editCruitments($id){
        return Recruitments::where('id',$id)->get();
    } // chưa cách dòng 
    public function searchCruitments($data)
    {  
        $status = $data['status'];
        $keyword = $data['keyword'];
        $dateFrom = $data['dateFrom'];
        $dateTo = $data['dateTo'];
       return Recruitments::when($keyword, function ($q) use ($keyword) {
            return $q->where('title', 'like', '%'.$keyword.'%');
        })->when($status, function($q) use ($status) { // sai thụt indent vô
            return $q->where('status', $status);
        })->when($dateFrom, function($q) use ($dateFrom,$dateTo) {
            return $q->whereBetween('created_at', [$dateFrom, $dateTo]);
        })->paginate();
    }// cách line 
    public function deleteSelect($ids){
        $data = array();
        $data['deleted_at'] = now();
        Recruitments::WhereIn('id',$ids)->update($data);;    
    } // cách line 
    public function recoverPass($data){
        $email = $data['email'];
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Lấy Lại Mật Khâu". ' '.$now;
        $customer = User::where('email','=',$data['email'])->get();
        $customer_id = $customer[0]->getoriginal('id'); //cách line 
        if($customer){
            $count_customer = $customer->count();
            if( $count_customer == 0){
                return redirect()->back();
            }else{ // cách ra 
                $token_random = bin2hex(Str::random(20));
                $data = array();
                $data['token'] = $token_random;
                User::Where('id', $customer_id)->update($data);

                $to_email =  $email;
                $link_reset_pass = url('/reset-new-pass?token='.$token_random);
                $data = array(
                    "name"=>$title_mail,
                    "body"=>$link_reset_pass,
                    'email'=>$email
                );//cáhc xuóng
                Mail::send('admin.forget_pass_notify',['data'=>$data],function($message) use($title_mail,$data){
                    $message -> to($data['email'])->subject($title_mail);
                    $message ->from('bphuoc.20it10@vku.udn.vn',$title_mail);
                });
               
            }     
        }
    }//cách xuống 
    public function updatePass($data){
        $new_pass = $data['new_pass'];
        $token = $data['token'];
        $data = array();
        $data['password'] = HASH::make($new_pass);
        User::Where('token',$token)->update($data);
    }
    //xoá line 
}