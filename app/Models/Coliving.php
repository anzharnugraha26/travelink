<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coliving extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image', // tambahkan ini
        'location',
        'area',
        'distance_info',
        'starting_price',
        'current_price',
        'price_period',
        'has_discount',
        'discount_type',
        'voucher_count',
        'voucher_discount',
    ];

    protected $casts = [
        'has_discount' => 'boolean',
        'starting_price' => 'decimal:0',
        'current_price' => 'decimal:0',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }

        return asset('images/default-coliving.jpg');
    }


}
