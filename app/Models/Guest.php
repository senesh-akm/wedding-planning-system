<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'group_name',
        'email',
        'phone',
        'address',
        'rsvp',
        'dietary',
        'table_number',
        'invite_sent',
        'plus_allowed',
        'plus_name',
        'gift_status',
        'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
