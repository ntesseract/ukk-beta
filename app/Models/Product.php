<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Picqer\Barcode\BarcodeGeneratorHTML;


class Product extends Model 
{
   use HasFactory;

   protected $fillable = [
       'barcode',
       'nis', 
       'nama',
       'jumlah',
       'harga',
       'tanggal',
       'foto'
   ];

   public function generateBarcode()
   {
       $generator = new BarcodeGeneratorHTML();
       return $generator->getBarcode($this->nis, $generator::TYPE_CODE_128);
   }

   protected $primaryKey = 'id';

  
   public function getRouteKeyName()
   {
       return 'id';
   }
}