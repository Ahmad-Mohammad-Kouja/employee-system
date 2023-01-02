<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'qr_code',
        'department_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'qr_code',
        'remember_token',
    ];

    public function department() {
        return $this->hasOne(Department::class);
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function workTimes() {
        return $this->hasMany(WorkTime::class);
    }

    public function absences() {
        return $this->hasMany(Absence::class);
    }

}
