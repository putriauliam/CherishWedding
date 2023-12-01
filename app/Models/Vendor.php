<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Favorite()
    {
        return $this->hasMany(Favorite::class);
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
}
