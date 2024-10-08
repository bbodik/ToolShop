<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone', 
        'address', 
        'city', 
        'postal_code'
    ]; 

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
