<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Buying;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function history(Request $request){
        $authId = Auth::id();
        $posts = Product::where('buying_id', '=',$authId)->get();
        /* dd($posts); */
        return view('product.history', ['posts' => $posts]);
    }
}
