<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurants';
    protected $primaryKey = 'id_restaurants';
    protected $fillable = [
        'nama_resto', 
        'alamat', 
        'jambuka', 
        'jamtutup', 
        'rating_resto', 
        'desk_resto', 
        'gambar_resto',
        'created_at',
        'updated_at'
    ];
}
