<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller{
    public function signUp(Request $request){
     
        $user = new User;
        $user->username = $request->username;
        $user->email= $request->email;
        $user->password= $request->password;
        $user->is_admin= 1;
        $user->save();

        return response()->json([
            "status" => "Success",
        ], 200);
    }
}