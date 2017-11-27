<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = ['Joao','Carol','Tiago','Ricardo'];
        return view('default.users.index',['users'=>json_encode($users)]);
    }
}
