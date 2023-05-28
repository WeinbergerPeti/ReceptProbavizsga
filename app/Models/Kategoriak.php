<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategoriak extends Model
{
    protected $table = 'kategoriak';
    
    protected $fillable = [
        'nev'
    ];
}
