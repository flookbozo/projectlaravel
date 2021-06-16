<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return response()->json($user);
    }

    public function edit($id)
    {
        $user =User::find($id);
        return response()->json($user);
    }


    
    public function update($id, Request $request)
    {
        $user = User::find($id);
        
        $user->update($request->all());

        return response()->json('The user successfully updated');
    }

    public function updateProfile(Request $request)
    {
        $user = User::find($request->id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->prefix = $request->prefix;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->gender = $request->gender;
        $user->duringpregnancy = $request->duringpregnancy;
        $user->breastfeeding = $request-> breastfeeding;
        $user->givebirth_past_6 = $request->givebirth_past_6;
        $user->typeblood = $request->typeblood;
        $user->typerh = $request->typerh;
        $user->date = $request->date;
        $user->phonnumber = $request->phonnumber;
        $user->save();

        $response['message'] = "The user successfully updated";
        return json_encode($response);
    }
   
}
