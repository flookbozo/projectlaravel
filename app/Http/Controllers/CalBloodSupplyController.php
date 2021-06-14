<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Giveblood;
use App\Models\Locationuser;

class CalBloodSupplyController extends Controller
{
    public function calBlood(Request $request)
    {
        $giveblood = Giveblood::find($request->idRequest);
        $location = Locationuser::where('idUser', $request->idUser)->first();
        $answer = $request->answer;
        if($answer == 1)
        {
            $sumblood = $giveblood->bloodreceived + 350;
            if($sumblood <= $giveblood->deficiencyBlood)
            {
                $giveblood->bloodreceived = $sumblood;
                $giveblood->bloodsupply = $giveblood->bloodsupply - $giveblood->bloodreceived;
                $response['messages'] = "ขอบคุณสำหรับความร่วมมือ ทางโรงพยาบาลกำลังรอโลหิตของคุณอยู่";
                $response['success'] = true;
                
            }
            else
            {
                $response['messages'] = "ขออภัยตอนนี้ทางโรงพยาบาลได้รับโลหิตครบตามที่ต้องการแล้ว ขอบคุณสำหรับความร่วมมือของท่าน";
                $response['success'] = false;
            }
            $location->reply = 1;
            $location->status = 0;
        }
        else if ($answer == 2)
        {
            $location->reply = 2;
            $location->status = 0;
            $response['messages'] = "ขอบคุณสำหรับความร่วมมือ";
            $response['success'] = false;
        }
        $location->save();
        $giveblood->save();
        return json_encode($response);
    }
}
