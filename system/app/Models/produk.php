<?php

namespace App\Models;

class produk extends Model
{
   protected $table = 'produk';

   function seller(){
    return $this->belongTo( user::class,'id_user');
   }
}
