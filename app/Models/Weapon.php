<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','slug','url_img','category', 'damage_dice', 'weight', 'cost'
    ];

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
