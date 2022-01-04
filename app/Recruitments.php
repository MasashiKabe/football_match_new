<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitments extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'recruitment_start' => 'required',
        'recruitment_close' => 'required',
        'prefecture' => 'required',
        'areas' => 'required',
        'address' => 'required',
        'note' => 'required',
    );
}
