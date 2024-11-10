<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'contact_name',
        'phone',
        'email',
        'address',
        'website',
        'service_provided',
        'star',
        'review',
        'estimated_cost',
        'contract_signed',
        'note',
    ];

    public function budget()
    {
        return $this->hasMany(Budget::class);
    }
}
