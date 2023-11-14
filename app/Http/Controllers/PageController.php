<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $users = Users::orderBy('birth','DESC')->get();
        // dd($users);
        return view("home", ['users' => $users]);
    }
}
