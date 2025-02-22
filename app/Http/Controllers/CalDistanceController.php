<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locationuser;
use App\Models\Giveblood;
use App\Models\User;

class CalDistanceController extends Controller
{
    public function cal(Request $request)
    {
        $user = Locationuser::all();
        $giveblood = Giveblood::all();
        $hoslatitude = deg2rad($request->latitude);
        $hoslongitude = deg2rad($request->longitude);

        foreach($giveblood as $y)
        {
            foreach($user as $i)
            {
                $diff = $this->calculateMonthsDiff($i->donate_at, $y->updated_at);
                if($diff==true)
                {
                    if($i->reply == 0)
                    {
                        $usertypeblood = User::find($i->idUser);
                        if($y->typeblood == $usertypeblood->typeblood && $y->typerh == $usertypeblood->typerh)
                        {
                            $check = $this->checkGender($i->idUser);
                            if($check)
                            {
                                $userlatitude = deg2rad($i->latitude);
                                $userlongitude = deg2rad($i->longitude);
                                $radiusOfEarth = 6371;

                                $diffLatitude = $userlatitude - $hoslatitude;
                                $diffLongitude = $userlongitude - $hoslongitude;

                                $a = sin($diffLatitude / 2)**2 + cos($hoslatitude) *
                                cos($userlatitude) * sin($diffLongitude / 2)**2;

                                $c = 2 * asin(sqrt($a));
                                $distance = $radiusOfEarth * $c;
                                $location = Locationuser::where('idUser', $i->idUser)->first();
                                $location->idHospital = $request->id;
                                $location->idRequest = $y->id;
                                $location->distance = $distance;
                                if($distance <= 1.0){
                                    $location->status = 1;
                                }
                                else if($distance <= 5.0){
                                    $location->status = 2;
                                }
                                else if($distance <= 10.0){
                                    $location->status = 3;
                                }
                                else if($distance > 10.0){
                                    $location->status = 0;
                                }
                                $location->save();
                                //return response()->json($y->typeblood == $usertypeblood->typeblood);
                            }
                            
                        }
                    }
                }      
            }
            
        }
        return response()->json(['Calculate complete']);
    }

    public function calculateMonthsDiff($date1, $date2)
    {
        if($date1 == null)
        {
            return true;
        }
        $diff = strtotime($date2) - strtotime($date1);

        $totalMonthDiff = abs($diff / (60*60*24*30));
        if($totalMonthDiff > 3.0)
        {
            return true;
        }
        else {
            return false;
        }
    }
    
    public function checkGender($id)
    {
        $user = User::find($id);
        if($user->gender == "หญิง")
        {
            if($user->duringpregnancy == "ไม่ใช่" && $user->breastfeeding == "ไม่ใช่")
            {
                if($user->givebirth_past_6 == "ไม่ใช่")
                {
                    return true;
                } 
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else 
        {
            return true;
        }
    }
}
