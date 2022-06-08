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

    public function getAllUsers(){
        return response()->json([
            "status" => "Success",
            "users" => User::all(),
        ], 200);
    }

    public function signIn (Request $request){
        $user=new User;
        $user=User::where('username','=',$request->username)->where('password','=',$request->password)->get();
        $userCount=$user->count();
        $userid=$user[0]->id;
        $username=$user[0]->username;
        $is_admin=$user[0]->is_admin;
    
        if ($userCount=1){
            return response()->json([
                "status" => "Success",
                "userid" => $userid,
                "username" => $username,
                "usertype" => $is_admin,
            ], 200);
            
        }
    }
}