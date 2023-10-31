<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Location extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'area_id',
        'latitude',
        'longitude', 
    ];
    
    protected $table="locations";
    
    
    
    
    public function area()
    {
        dd($this->belongsTo(Area::class));
        return $this->belongsTo(Area::class);
    }
}
