<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Guest extends Model
{
    use HasFactory;

    protected $guarded = [
        "id"
    ];

    protected $fillable = [
        "firstname",
        "lastname",
        "passport_num"
    ];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
