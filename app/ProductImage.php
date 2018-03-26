<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //




        // relacion entre modelos
        public function productoimagenes(){
            return $this->belongsTo(Producto::class);
            
        }
}
