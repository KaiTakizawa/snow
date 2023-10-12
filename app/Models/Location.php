<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Location extends Model
{
    use HasFactory;
    protected $table="locations";
    
    
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
