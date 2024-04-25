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

    public function create()
    {
        return view('users.createUsers');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/users');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect('/users');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('/users');
    }

    public function profile(User $user, $id)
    {
        // $users = User::whereIn('id', array(1))->get();
        $users = User::find($id);
        $data = ['users' => $users];
        return view('users.UserProfile', $data);
    }
}