<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorbike extends Model
{
    use HasFactory;
    protected $table = 'motorbikes';
    protected $fillable = [        
        'brand_id',
        'color',
        'owner_id',
        'year',
        'plate',
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function color()
    {
        return $this->belongsToMany(Color::class);
    }
}
