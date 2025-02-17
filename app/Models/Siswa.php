<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model 
{
    use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'nis';
    public $incrementing = false;
    
    protected $fillable = [
        'nis', 
        'namasiswa',
        'alamat',
        'jeniskelamin',
        'kelas', 
        'ttl',
        'foto'
    ];

    // Ubah relasi menjadi hasMany karena satu siswa bisa memiliki banyak produk
    public function products()
    {
        return $this->hasMany(Product::class, 'nis', 'nis');
    }

    // Tambahkan timestamps
    protected $dates = ['ttl', 'created_at', 'updated_at'];
}