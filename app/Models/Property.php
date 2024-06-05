<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_name',
        'property_type',
        'description',
        'address',
        'city',
        'state',
        'zipcode',
        'country',
        'price',
        'photo',
        'bedroom',
        'bathroom',
        'car_park',
        'build_up_area',
        'furnishing',
        'occupancy',
        'availability',
        'user_id'
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
