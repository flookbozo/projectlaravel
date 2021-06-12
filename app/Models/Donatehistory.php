<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatehistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'idHospital',
        'blooddonate'
    ];
}
