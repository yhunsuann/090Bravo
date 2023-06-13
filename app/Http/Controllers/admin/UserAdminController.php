<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\RecruitmentRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Http\Controllers\Controller;
class UserAdminController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    public function logOut()
    { 
        Auth::logout();   

        return view('admin.welcome');
    }

    public function logIn(Request $request)
    {
        if ($request->has('email') && $request->has('password')) {
            $data = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($data)) {
                return redirect('/admin');
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

        return view('admin.welcome');
    } 
}
