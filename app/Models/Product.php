<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
