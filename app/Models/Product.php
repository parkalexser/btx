<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','art','status','data'];

    protected $casts = [
        'data' => 'array',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 'available');
    }
}
