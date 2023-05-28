<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receptek extends Model
{
    protected $table = 'receptek';

    protected $primaryKey = "kat_id";

    protected $fillable = [
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras',
    ];
}
