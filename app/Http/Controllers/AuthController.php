<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'password'  => 'required|min:6',
        ]);

        $response['status']     = 401;
        $admin                  = Admin::where('username', $request->username)->first();

        $response['message']    = 'Admin not found';
        if (!$admin)
        return response()->json($response, $response['status']);

        $response['message']    = 'Wrong password';
        if (!Hash::check($request->password, $admin->password))
        return response()->json($response, $response['status']);

        $response       = [
            'status'    => 200,
            'message'   => 'success',
        ];

        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
        return response()->json($response, $response['status']);
    }
}
