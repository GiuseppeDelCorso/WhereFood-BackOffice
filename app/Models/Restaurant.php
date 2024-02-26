<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "image",
        "address",
        "PIVA",
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
