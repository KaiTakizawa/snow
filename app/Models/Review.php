<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Area;

class Review extends Model
{
     use HasFactory;
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    
     protected $fillable = [
    'user_id',
    'area_id',
    'snow',
    'biginner',
    'all',
    'comment',
    ]; 
    
    
}
