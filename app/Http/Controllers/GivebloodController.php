<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Giveblood;
use App\Models\Locationuser;
use App\Models\User;


class GivebloodController extends Controller
{
    
    public function index()
    {
        $user = Giveblood::all();

        return response()->json($user);
    }

    public function store(Request $request)
    {
        $user = new Giveblood([
            "idHospital" => $request->input("idHospital"),
            "typeblood" => $request->input("typeblood"),
            "typerh" => $request->input("typerh"),
            "date" => $request->input("date"),
            "deficiencyBlood" => $request->input("deficiencyBlood"),
            "bloodsupply" => $request->input("deficiencyBlood")
        ]);
        $user->save();
        return response()->json('Product created!');
    }

    public function deleteGiveblood($id)
    {
        $user = Giveblood::find($id);
        $location = Locationuser::all();
        foreach($location as $i)
        {
            $usertypeblood = User::find($i->idUser);
            if($user->typeblood == $usertypeblood->typeblood && $user->typerh == $usertypeblood->typerh)
            {
                $i->status = 0;
                $i->save();
            }
        }
        $user->delete();

        return response()->json('Giveblood successfully deleted');
    }

  
}
