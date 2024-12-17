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
        'customerName', 'customerEmail', 'contactNumber', 'packageId', 'numPax', 'notes', 'eventDate', 'eventLocation', 'user_id',
    ];
    

    public function user()
    {
    return $this->belongsTo(User::class);
    }

    public function package()
{
    return $this->belongsTo(Package::class, 'packageId');
}


}
