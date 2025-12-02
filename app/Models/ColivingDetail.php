<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColivingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'coliving_id',
        'room_type',
        'price_per_month',
        'room_size',
        'capacity',
        'available_rooms',
        'amenities',
        'description',
        'images',
        'is_available'
    ];

    protected $casts = [
        'amenities' => 'array',
        'images' => 'array',
        'price_per_month' => 'decimal:2',
        'is_available' => 'boolean',
        'room_size' => 'integer',
        'capacity' => 'integer',
        'available_rooms' => 'integer',
    ];

    /**
     * Relationship with Coliving
     */
    public function coliving()
    {
        return $this->belongsTo(Coliving::class);
    }

    /**
     * Accessor for formatted price
     */
    protected function formattedPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => 'Rp ' . number_format($this->price_per_month, 0, ',', '.'),
        );
    }

    /**
     * Scope for available rooms
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true)
                    ->where('available_rooms', '>', 0);
    }

    /**
     * Scope by room type
     */
    public function scopeByRoomType($query, $type)
    {
        return $query->where('room_type', $type);
    }

    /**
     * Scope by price range
     */
    public function scopePriceRange($query, $min, $max)
    {
        return $query->whereBetween('price_per_month', [$min, $max]);
    }

    /**
     * Check if room is available
     */
    public function isFullyBooked(): bool
    {
        return $this->available_rooms <= 0;
    }

    /**
     * Decrease available rooms
     */
    public function decreaseAvailableRooms($quantity = 1): bool
    {
        if ($this->available_rooms >= $quantity) {
            $this->available_rooms -= $quantity;
            if ($this->available_rooms === 0) {
                $this->is_available = false;
            }
            return $this->save();
        }
        return false;
    }

    /**
     * Increase available rooms
     */
    public function increaseAvailableRooms($quantity = 1): bool
    {
        $this->available_rooms += $quantity;
        $this->is_available = true;
        return $this->save();
    }
}
