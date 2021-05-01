<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','art','status','data'];

    protected $casts = [
        'options' => 'array',
    ];

    public function getDataAttribute($value) {
        return json_decode($value);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'available');
    }
}
