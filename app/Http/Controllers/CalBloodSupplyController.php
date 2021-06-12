<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Giveblood;

class CalBloodSupplyController extends Controller
{
    public function calBlood(Request $request)
    {
        $giveblood = Giveblood::find($request->idRequest);
        $answer = $request->answer;
        if($answer == 1)
        {
            $sumblood = $giveblood->bloodreceived + 350;
            if($sumblood <= $giveblood->deficiencyBlood)
            {
                $giveblood->bloodreceived = $sumblood;
                $giveblood->bloodsupply = $giveblood->bloodsupply - $giveblood->bloodreceived;
                $response['success'] = true;
            }
            else
            {
                $response['success'] = false;
            }
            $giveblood->save();
            return json_encode($response);
        }
    }
}
