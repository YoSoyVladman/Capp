<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EscogerOptions extends Model
{
    //
    protected $table = 'escoger_options';
    protected $hidden = ['escoger_id','created_at','updated_at'];
}
