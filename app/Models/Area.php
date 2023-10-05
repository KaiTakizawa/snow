<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use app\Models\Review;
use app\Models\Like;
use app\Models\Image;


class Area extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function images()
    {
        return $this->hasMany(Images::class);
    }
    
    protected $fillable = [
    'name',
    'detail',
    'address',
    'access',
    'image_url', 
    ];
}
