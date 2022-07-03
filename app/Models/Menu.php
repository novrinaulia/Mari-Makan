<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $primaryKey = 'id_menu';
    protected $fillable = [
        'makanan', 
        'harga',
        'rating_makanan',
        'desk_makanan', 
        'gambar_mkn', 
        'created_at',
        'updated_at',
        'id_restaurants'
    ];
}
