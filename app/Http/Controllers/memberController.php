<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
class memberController extends Controller
{
    private $recruitmentRepository;

    public function __construct(RecruitmentRepositoryInterface $recruitmentRepository ,Request $request) //sai request làm gì
    {
        $this->recruitmentRepository = $recruitmentRepository;
    }

    public function index(){ //sai convention
        if (Auth::check()) {
            $data =  $this->recruitmentRepository->allRecruitments();
            return view('admin.home', ['result' =>$data])->with('i',(request()->input('page',1)-1)*5);//cái gì đây mục đích và sai convention
             
        } else {
            return view('welcome')->with('success','Vui Lòng Đăng nhập!'); // cách ra với lại ko check kiểu này
        }
    }// cách xuốnng 
    public function log_out(){ //sai convention
        Auth::logout();
        return view('welcome');
    }//sai convention
    public function login(Request $request){
        if($request->has('email') && $request->has('password')){
            $data =[
                'email' => $request->email,
                'password' => $request->password,
            ];
             if(Auth::attempt($data)){//cái lùm chi chổ ni ?
             return redirect()->route('index')->with('i',(request()->input('page',1)-1)*5);
             }else{
                return redirect()->back()->with('success','Sai tài khoản hoặc mật khẩu vui lòng đăng nhập lại !');
             }
            }//sai convention
    }// cách xuống 
    public function recover_pass(Request $request){
        $data = $request->all();
        $this->recruitmentRepository->recoverPass($data);
        return redirect()->back()->with('message','Gửi mail thành công vui lòng vào email để reset pass');
        //gì đây ?
    }//cách xuống 
    public function update_new_pass(Request $request){
        $data = $request->all();
        $this->recruitmentRepository->updatePass($data);//cách xuống1 line rồi return
        return view('welcome');
    }
   // gì đây 
}
