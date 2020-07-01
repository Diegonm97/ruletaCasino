<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
    protected $table = 'jugadores';

    protected $fillable = ['nombre', 'dinero'];

    
}
