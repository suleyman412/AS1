<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [
        "id"
    ];
    protected $fillable = [
        "city_id",
        "name",
        "address",
        "phone",
        "email"
    ];
    public function city() {
        return $this->belongsTo(City::class);
    }
    public function rooms() {
        return $this->hasMany(Room::class);
    }

}
