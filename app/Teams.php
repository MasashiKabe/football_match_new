<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'nickname' => 'required',
        'team_name' => 'required',
        'age' => 'required',
        'prefecture' => 'required',
        'area' => 'required',
        'note' => 'required',
    );
}
