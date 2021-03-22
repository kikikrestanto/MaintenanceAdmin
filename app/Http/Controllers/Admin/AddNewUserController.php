<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddNewUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return view('pages.admin.user.addNewUser');
    }

    public function store(Request $request)
    {
        //dd($request ->all());die();
        $user = User::create(array_merge($request->all(), [

        ]));

        return redirect('/');
    }
}

