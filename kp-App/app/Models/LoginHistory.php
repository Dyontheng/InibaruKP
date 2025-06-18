<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginHistory extends Model
{
    protected $fillable = ['user_id', 'ip_address', 'user_agent', 'login_at'];
    // protected $casts = [
    //     'login_time' => 'datetime',
    //     'logout_time' => 'datetime',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
