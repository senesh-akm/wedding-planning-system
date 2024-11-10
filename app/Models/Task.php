<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'assign_to',
        'due_date',
        'priority',
        'status',
        'category',
        'budget',
        'actual_cost',
        'completion_date',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
