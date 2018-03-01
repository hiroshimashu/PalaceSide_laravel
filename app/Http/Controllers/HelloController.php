<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request) {
        return view('actions/contact', ['msg' => '']);
    }

    public function post(Request $request) {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email'
        ];

        $this -> validate($request, $validate_rule);
        return view('actions/contact', ['msg' => '正しく入力されました']);
    }
}
