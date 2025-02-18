<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function men()
    {
        $mens = Product::where('gender', 'men')->get();
        return view('men', compact('mens'));
    }
    public function women()
    {
        $womens = Product::where('gender', 'women')->get();
        return view('women', compact('womens'));
    }

    public function approve(Request $request, $id)
    {
        $approve = Product::findOrFail($id);
        $approve->status = true; // Fix the status update
        $approve->save(); // Save the changes
        if ($approve->gender == "men") {
            return redirect()->route('list.men');
        } else {
            return redirect()->route('list.women');

        } // Adjust the route as needed
    }

    public function reject(Request $request, $id)
    {
        $reject = Product::findOrFail($id);
        $reject->status = false;
        $reject->save();
        if ($reject->gender == "men") {
            return redirect()->route('list.men');
        } else {
            return redirect()->route('list.women');

        }
    }

    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        if ($user->role == 'merchant') {
            return redirect()->route('list.merchant'); // Adjust the route as needed
        } else {
            return redirect()->route('list.customer'); // Adjust the route as needed
        }
    }
}
