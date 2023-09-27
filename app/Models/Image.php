<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Image extends Model
{
    use HasFactory;
    
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
