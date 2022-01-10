<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'applys';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'team_id',
        'recruitment_id',
        'is_approval',
        'note',
    ];

    public static $rules = array(
        'note' => 'required',
    );

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function recruitments()
    {
        return $this->belongsTo(Recruitment::class);
    }

}
