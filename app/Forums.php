<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    // le especifico la tabla de uso
    protected $table = 'forums';

    // la campos que permitimos que se llenen
    protected $fillable = ['name', 'slug', 'description','created_at', 'updated_at'];

}
