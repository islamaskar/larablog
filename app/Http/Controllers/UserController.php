<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function index(){
        $users = [ 
            0 => [
                'name' => 'islam'
            ],
            1 => [
                'name' => 'ali'
            ] 
        ];
        // dd($a);
        //extract($user);
        return view('user.index', ['users' => $users]);
    }
}