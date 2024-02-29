<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;


    protected $fillable = [
        "name",
        "image",
        "ingredients",
        "description",
        "type_id",
        "price",
        "visibility",
    ];

    use HasFactory;
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
