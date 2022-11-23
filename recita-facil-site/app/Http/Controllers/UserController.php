<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(){
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function Show($id){
        dd();
    }
}
