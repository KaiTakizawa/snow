<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Review;
use App\Models\Like;
use App\Models\Image;
use App\Models\Location;

class Area extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'name',
        'detail',
        'address',
        'access',
        'snowmap_url', 
    ];
    
        
    
    
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
        return $this->hasMany(Image::class);
    }
    
    public function getFirstImages()
    {

        return $this->images->first();    
        
        
    }
    
    
     public function location()
    {
        return $this->hasOne(Location::class);
    }
    
    
  
}
