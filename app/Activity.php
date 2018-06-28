<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'activity', 'description', 'user_id', 'points', 'status', 'estimated', 'score'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
