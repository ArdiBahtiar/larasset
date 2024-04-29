<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Asset;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $assets = Asset::where('Checked_Out_to', '=', $id)->get();
        // $data = ['users' => $users];
        return view('users.indexUsers', ['users' => $users]);
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

    public function profile($id)
    {
        $users = User::find($id);
        $assets = Asset::where('Checked_Out_to', '=', $users->name)->get();
        return view('users.UserProfile', ['users' => $users, 'assets' => $assets]);
    }
}