<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_name',
        'property_type_id',
        'description',
        'address',
        'city',
        'state_id',
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

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
