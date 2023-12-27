<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function create(){
      return view('users.create');
    }

    public function store(Request $request){
        return $this->createNativeAccount($request);
    }

    protected  function createNativeAccount(Request $request) {
        // 1) 입력 검증
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
        // 2) 입력을 데이터베이스에 등록
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        // 3) 입력한 정보로 로그인
        auth()->login($user);
        return redirect('home');
    }
}