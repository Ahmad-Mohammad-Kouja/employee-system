<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    public function rated() {
        return $this->belongsTo(User::class, 'rated_id');
    }
    public function rater() {
        return $this->belongsTo(User::class, 'rater_id');
    }

}
