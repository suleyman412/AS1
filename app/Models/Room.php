<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Room extends Model
{
    use HasFactory;

    protected $guarded = [
        "id"
    ];
    protected $fillable = [
        "hotel_id",
        "room_number",
        "type",
        "per_night_price",
        "is_available"
    ];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
