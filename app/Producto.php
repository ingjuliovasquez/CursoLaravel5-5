<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // relacion entre modelos
    public function category(){
        return $this->belongsTo(Categoria::class);
        
    }

     
        // relacion entre modelos
        public function images(){
            return $this->hasMany(ProductImage::class);
            
        }


}
