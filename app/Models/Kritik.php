<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;
    protected $table = 'kritiks';
    protected $primaryKey = 'id_kritik';
    protected $fillable = [
        'nama_pengguna', 
        'email', 
        'kritik', 
        'saran',
        'pesan', 
        'created_at', 
        'updated_at'
    ];
}
