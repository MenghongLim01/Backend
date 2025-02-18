<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index()
    {
        $merchants = User::where('role', 'merchant')->get();
        return view('merchant', compact('merchants'));
        // return response()->json($merchants);
    }

    public function user(){
        $users = User::where('role','user')->get();
        return view('customer',compact('users'));
    }
}
