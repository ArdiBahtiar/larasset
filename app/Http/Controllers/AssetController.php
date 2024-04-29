<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\User;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::all();
        $data = ['assets' => $assets];
        return view('assets.indexAssets', $data);
    }

    public function store(Request $request)
    {
        Asset::create($request->all());
        return redirect('/');
    }

    public function create()
    {
        $users = User::all();
        return view('assets.createAssets', ['users' => $users]);
    }

    public function edit(Asset $asset)
    {
        $users = User::all();
        return view('assets.editAssets', ['users' => $users], compact('asset'));
    }

    public function update(Request $request, Asset $asset)
    {
        $asset->update($request->all());
        return redirect('/');
    }

    public function delete(Asset $asset)
    {
        $asset->delete();
        return redirect('/');
    }
}
