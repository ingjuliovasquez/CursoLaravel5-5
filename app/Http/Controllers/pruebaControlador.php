<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\ProductImage;
use DB;


class pruebaControlador extends Controller
{
    

public function welcome()
{

	$llamardatos = DB::table('Productos')
	->join('categorias', 'categorias.id', '=', 'Productos.category_id')
	->join('product_images', 'product_images.product_id', '=', 'Productos.id')
	->select('Productos.name', 'categorias.name as categoria', 'product_images.image' )->get();
	
	return view('welcome')->with('llamar', $llamardatos);
	
}


}
