<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiturgicalActivity extends Model
{
    protected $table = 'liturgicalactivities';

    protected $fillable = [
        'user_id',
        'ActivityType',
        'ActivityName',
        'ActivityHost',
        'ActivityDescription',
        'ActivityDateTime',
        'activityStatus'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
