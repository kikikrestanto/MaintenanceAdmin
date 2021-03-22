<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $data = Auth::user();
        $user = User::all(); 
        return view('pages.admin.user.index',compact('data','user'));
    }

    public function store(Request $request)
    {
        //dd($request ->all());die();
        $user = User::create(array_merge($request->all(), [
            'password' => bcrypt($request->password)
        ]));

      return redirect()->route('user.index');
    }

    public function create()
    {
        $userAcc = User::all();
        $user = Auth::user();
        return view('pages.admin.user.add',compact('userAcc','user'));
    }

    public function show($id)
    {
        $data = Auth::user();   
        $user = User::find($id);
        return view('pages.admin.user.detail', compact('user','data'));
    }

    public function edit($id)
    {
        $data = Auth::user();
        $user = User::find($id);
        return view('pages.admin.user.edit', compact('user', 'data'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nip' => 'required',
            'name' => 'required',
            'lastname' => 'required',
        ]);

        User::where('id', $user->id)
            ->update([
                'nip' => $request->nip,
                'name' => $request->name,
                'lastname' => $request->lastname,
                'password' => $request->password
            ]);
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index');
    }

}
