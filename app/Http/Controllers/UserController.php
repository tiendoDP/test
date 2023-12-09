<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register() {
        return View('admin/register');
    }

    public function insert(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'checkPass' => 'required',
        ], [
            'required' => ':attribute bắt buộc',
            'email' => ':attribute lỗi',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute phải lớn hơn 6 ký tự',
        ]);

        if($request->password != $request->checkPass) {
            return redirect()->back()->with("checkPass", "Mật khẩu không khớp");
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->router('login')->with('success', "User Successfully Created");;
    }

    public function login() {
        if(Auth::check()) {
            return redirect()->route('home');
        }
        return View('admin/login');
    }

    public function handleLogin(Request $request) {
        $account = ['email' => $request->email ,
                    'password' => $request->password,
                ];

        if(Auth::attempt($account, true)) {
            return redirect()->route('home');
        }
        else return redirect()->back()->with('error', 'Login Failed - Tài khoản hoặc mật khẩu không chính xác');
    }

    public function logout() {
            Auth::logout();
            return redirect()->route('home');
    }
}
