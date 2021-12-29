<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'approval_at' => 'required',
        'time_at' => 'required',
        'prefecture' => 'required',
        'areas' => 'required',
        'address' => 'required',
        'note' => 'required',
    );
}
