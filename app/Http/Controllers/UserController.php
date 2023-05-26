<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    private $recruitmentRepository;
    private $userRepository;

    public function __construct(RecruitmentRepositoryInterface $recruitmentRepository, UserRepositoryInterface $userRepository)
    {
        $this->recruitmentRepository = $recruitmentRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    { 
        if (Auth::check()) {
            $value = $this->recruitmentRepository->allRecruitments();
           
            return view('admin.home', ['result' => $value]);    
        } else {
            return view('welcome')->with('success', 'Please log in !');
        }
    }

    public function logOut()
    { 
        Auth::logout();   

        return view('welcome');
    }

    public function logIn(Request $request)
    {
        if ($request->has('email') && $request->has('password')) {
            $data = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($data)) {
                return redirect()->route('index');
            } else {
                return redirect()->back()->with('success', 'Wrong account or password, please login again !');
            }
        }
    }

    public function recoverPass(Request $request)
    {
        $data = $request->all();
        $this->userRepository->recoverPass($data);

        return redirect()->back()->with('message', 'Email sent successfully, please go to email to reset password');
    }

    public function updateNewPass(Request $request)
    {
        $data = $request->all();
        $this->userRepository->updatePass($data);

        return view('welcome');
    } 
}
