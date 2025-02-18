<?php

namespace App\Http\Controllers\API;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $merchants = User::where('role', 'merchant')->get();
        $users = User::where('role', 'user')->get();
        return response()->json([
            'message' => "success",
            'merchant' => $merchants,
            'user' => $users
            ]
        );
    }
}
