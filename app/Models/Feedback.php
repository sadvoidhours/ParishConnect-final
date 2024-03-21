<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    protected $fillable = ['user_id', 'Satisfaction', 'Recommendation', 'Opinion'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}