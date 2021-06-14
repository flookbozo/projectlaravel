<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locationuser;
use App\Models\Hospital;

class LocationController extends Controller
{
    public function store(Request $request)
    {
        $user = Locationuser::where('idUser', $request->idUser)->first();
        $hospitalname = null;
        if(isset($user->id))
        {
            $user->latitude = $request->latitude;
            $user->longitude = $request->longitude;
            $user->save();
            $status = $user->status;
            $hospital = Hospital::where('id', $user->idHospital)->first();
            if(isset($hospital->id))
            {
                $hospitalname = $hospital->hospitalname;
            }
            $response['idRequest'] = $user->idRequest;
            $response['status'] = $user->status;
            $response['hospitalname'] = $hospitalname;
            $response['messages'] = "Update location success.";
            return json_encode($response);
        }
        else
        {
            $user = new Locationuser();

            $user->idUser =  $request->idUser;
            $user->latitude = $request->latitude;
            $user->longitude = $request->longitude;
            $user->save();
            $respon['messages'] = "Insert location success.";
            return json_encode($respon);
        }
        
    }
}
