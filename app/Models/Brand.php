<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = [
        'name',
        'country',
        'founded',
        'year',
    ];
    public function motorbikes()
    {
        return $this->hasMany(Motorbike::class);
    }
}
