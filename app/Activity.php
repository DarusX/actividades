<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Activity extends Model
{
    protected $fillable = [
        'activity', 'description', 'user_id', 'points', 'status', 'estimated', 'score'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRemainingAttribute()
    {
        if($this->status != 'Y') return Carbon::now()->diffInDays(Carbon::createFromFormat('Y-m-d',$this->estimated), false);
        return;
    }
}
