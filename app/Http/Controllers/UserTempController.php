<?php

namespace App\Http\Controllers;

use App\UserTemp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTempController extends Controller
{
    public function create(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|confirmed',
            ]
        )->validate();

        UserTemp::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return back()->with('success', 'You have successfully registered!');
    }

    public function login(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'email' => "required",
                'password' => 'required',
            ]
        )->validate();

        return back()->with('success', 'You have successfully logged in!');
    }
}
