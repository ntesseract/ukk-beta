<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Guru extends Model
{
   protected $primaryKey = 'nip';
   public $incrementing = false;
   
   protected $fillable = [
       'nip',
       'nis',
       'namaguru',
       'jeniskelamin',
       'kontak',
       'foto'
   ];
   
   public function siswa()
   {
        return $this->hasMany(Product::class, 'nis', 'nis');
   }
}
