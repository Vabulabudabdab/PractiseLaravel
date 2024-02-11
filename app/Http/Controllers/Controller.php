<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function welcome() {
        return view('welcome');
    }

    function test() {
        return view('test');
    }

    function getid(Request $request) {
        $this->middleware('guest')->except(['logout']);
        $this->validate($request, [
           'title'=>'required',
           'password'=>'required'
        ]);

        dd($request->all());
    }

    function login() {
        echo "Вы ввели какие-то данные неправильно";
        return view('login');
    }


}
