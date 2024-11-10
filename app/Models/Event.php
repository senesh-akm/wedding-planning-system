<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'event_date',
        'start_time',
        'end_time',
        'venue',
        'address',
        'contact_person',
        'contact_number',
        'estimated_guests',
        'event_type',
        'budget',
        'actual_cost',
        'instructions',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
