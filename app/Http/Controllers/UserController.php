<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $data = ['users' => $users];
        return view('users.indexUsers', $data);
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect('/');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('/');
    }
}
