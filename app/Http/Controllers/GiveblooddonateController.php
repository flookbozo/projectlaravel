<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donatehistory;

class GiveblooddonateController extends Controller
{
       
    public function index()
    {
        $user = Donatehistory::all();

        return response()->json($user);
    }

}
