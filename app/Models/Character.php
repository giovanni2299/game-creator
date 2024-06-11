<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'attack', 'defence', 'speed', 'life',
    ];

    public function weapons()
    {
        return $this->belongsToMany(Weapon::class);
    }
}
