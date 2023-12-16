<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category', 'city', 'favorite'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('detail', 'like', '%' . $search . '%')
                    ->orWhereHas('category', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('city', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    });
            });
        });

        $query->when($filters['city'] ?? false, function ($query, $city) {
            return $query->whereHas('city', function ($query) use ($city) {
                $query->whereIn('id', $city);
            });
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->whereIn('id', $category);
            });
        });

        
    
        // $query->when($filters['city'] ?? false, function ($query, $city) {
        //     return $query->whereIn('id', $city);
        // });
        

        // $query->when($filters['category'] ?? false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('name', $category);
        //     });
        // });

        // $query->when(
        //     $filters['city'] ?? false,
        //     fn ($query, $author) => $query->whereHas(  'author',fn ($query) =>
        //         $query->where('name', $author)
        //     )
        // );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
