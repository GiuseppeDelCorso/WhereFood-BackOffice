<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "name",
        "description",
        'customer_name',
        'customer_surname',
        'customer_address',
        'customer_number',
        'total_order',
        'state_payment',
    ];
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
