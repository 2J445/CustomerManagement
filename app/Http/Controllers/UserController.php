<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::get(); // 社員一覧を取得
        return view('users.index', compact(['users'])); // users.index.bldae を呼出し、 usersを渡す
    }
}
