<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Table name (optional, if the table name doesn't follow Laravel's convention)
    protected $table = 'bookings';

    // Fillable fields, which can be mass-assigned
    protected $fillable = [
        'customerName', 'customerEmail', 'contactNumber', 'packageName', 
        'numPax', 'notes', 'eventDate', 'eventLocation', 'user_id'
    ];

    public function user()
{
    return $this->belongsTo(User::class, 'user_id')->nullable();
}

    // // You can define custom casts for specific fields if necessary
    // protected $casts = [
    //     'event_date' => 'date', // Ensure that the event_date is treated as a date
    // ];

    // // Optionally, you can add validation rules here
    // public static function validationRules()
    // {
    //     return [
    //         'customer_name' => 'required|string|max:255',
    //         'customer_email' => 'required|email|max:255',
    //         'contact_number' => 'required|regex:/^\+?[0-9]{7,15}$/',  // Example for phone validation
    //         'package_name' => 'required|string',
    //         'num_pax' => 'required|integer|min:1',
    //         'notes' => 'nullable|string',
    //         'event_date' => 'required|date|after_or_equal:today',
    //         'event_location' => 'required|string|max:255',
    //     ];
    // }
}
