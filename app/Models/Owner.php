<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $table = 'owners';
    protected $fillable = [        
        'name',
        'idcard',
        'room',
        'birth',
    ];
    public function motorbikes()
    {
        return $this->hasMany(Motorbike::class);
    }
}
