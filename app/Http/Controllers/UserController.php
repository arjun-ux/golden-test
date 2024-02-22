<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // index
    public function index()
    {
        $data = User::all();
        return view('user.index', compact('data'));
    }
    // show
    public function show($id){
        $data = User::where('id', $id)->first();
        return view('user.edit', compact( 'data' ));
    }
}
