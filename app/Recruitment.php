<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'team_id',
        'start_at',
        'end_at',
        'close_at',
        'prefecture',
        'areas',
        'address',
        'url',
        'note',
    ];

    public static $rules = array(
        'start_at' => 'required',
        'end_at' => 'required',
        'close_at' => 'required',
        'prefecture' => 'required',
        'areas' => 'required',
        'address' => 'required',
        'note' => 'required',
    );

    protected $dates = [
        //'start_at',
        //'end_at',
        //'close_at',
        //'created_at',
        //'updated_at',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
