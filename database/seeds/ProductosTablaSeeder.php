<?php

use Illuminate\Database\Seeder;
use App\Producto;
use App\Categoria;
use App\ProductImage;

class ProductosTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //model actories
        factory(Categoria::class, 5)->create();
        factory(Producto::class, 100)->create();
        factory(ProductImage::class, 200)->create();

    //    $categories = factory(Categoria::class, 5)->create();
    //    $categories->each(function ($Categoria) {
    //        $Producto = factory(Producto::class, 100)->make();
    //    $Categoria->Producto()->saveMany($Producto);
           
    //       $Producto->each(function ($p) {
    //            $images=factory(ProductImage::class, 200)->make();
    //            $p->images()->saveMany($images);
    //        });
    //    });
        
    }
}
