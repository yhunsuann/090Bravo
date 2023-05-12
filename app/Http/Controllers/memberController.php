<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
class memberController extends Controller
{
    private $recruitmentRepository;

    public function __construct(RecruitmentRepositoryInterface $recruitmentRepository ,Request $request)
    {
        $this->recruitmentRepository = $recruitmentRepository;
    }

    public function index(){
        if (Auth::check()) {
            $data =  $this->recruitmentRepository->allRecruitments();
            return view('admin.home', ['result' =>$data])->with('i',(request()->input('page',1)-1)*5);
             
        } else {
            return view('welcome')->with('success','Vui Lòng Đăng nhập!');
        }
    }
    public function log_out(){
        Auth::logout();
        return view('welcome');
    }
    public function login(Request $request){
        if($request->has('email') && $request->has('password')){
            $data =[
                'email' => $request->email,
                'password' => $request->password,
            ];
             if(Auth::attempt($data)){
             return redirect()->route('index')->with('i',(request()->input('page',1)-1)*5);
             }else{
                return redirect()->back()->with('success','Sai tài khoản hoặc mật khẩu vui lòng đăng nhập lại !');
             }
            }
    }
    public function recover_pass(Request $request){
        $data = $request->all();
        $this->recruitmentRepository->recoverPass($data);
        return redirect()->back()->with('message','Gửi mail thành công vui lòng vào email để reset pass');
        
    }
    public function update_new_pass(Request $request){
        $data = $request->all();
        $this->recruitmentRepository->updatePass($data);
        return view('welcome');
    }
   
}