<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['restaurant_id', 'customer_name', 'number_of_guests', 'reservation_time', 'status'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}