<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    
    public function top()
    {
        return view("top");
    }

    public function login(LoginFormRequest $request)
    {
       $credentials = $request->only("name", "password");
       if(Auth::attempt($credentials)) {
           return redirect()->route("mypage");
       } else {
           return redirect()
                ->back()
                ->withErrors(["login" => "ログインに失敗しました。"]);
       }
       return view("mypage");
    }
}
