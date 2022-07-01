<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = ['name', 'decription', 'price', 'image'];
    public function Categogys()
    {
        return $this->hasMany(Category::class, 'type_id', 'id');
    }
}
