<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function validationEmail(Request $request)
    {
        //lấy dữ liệu từ URL
        $email = $request->email;

        $isEmail = true;
        
        //kiểm tra validate email theo hàm mặc định thư viện PHP
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isEmail = false;
        }
        return view('index', compact('isEmail'));
    }

    public function test($age){
        echo __METHOD__;

    }
}

