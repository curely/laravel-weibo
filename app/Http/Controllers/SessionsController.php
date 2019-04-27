<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        $userdetail = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($userdetail)) {
            session()->flash('success', '欢迎回来');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', '很抱歉，你的邮箱或者密码不匹配');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {

    }
}
