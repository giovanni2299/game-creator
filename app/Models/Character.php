<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','slug','url_img','description', 'attack', 'defence', 'speed', 'life','type_id',
    ];

    public function weapons()
    {
        return $this->belongsToMany(Weapon::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
}
