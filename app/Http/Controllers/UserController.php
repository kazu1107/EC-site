<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
        $authUser = Auth::id();
        $user = DB::table('users')->find($authUser);
        $param = [
            'authUser'=>$authUser,
            'user'=>$user,
        ];
        return view('product.user',$param);
    }
}
