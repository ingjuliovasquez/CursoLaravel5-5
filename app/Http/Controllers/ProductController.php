<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\ProductImage;
use DB;
use Alert;


class ProductController extends Controller
{
 
    public function index(){

        $llamardatos = DB::table('Productos')
        ->join('categorias', 'categorias.id', '=', 'Productos.category_id')
        ->join('product_images', 'product_images.product_id', '=', 'Productos.id')
        ->select('Productos.id', 'Productos.name', 'Productos.description', 'Productos.long_description','Productos.price', 'categorias.name as categoria', 'product_images.image' )
        ->paginate(10);
        //paginar de 10 10
        return view('admin.products.index')->with('llamar', $llamardatos);



    //    $products = Producto::all(); //mostrar todos los productos
    //     $products = Producto::paginate(10); //paginar de 10 10
    //     return view('admin.products.index')->with('llamar', $products); //listado de productos


    //     $products2 = DB::table('productos')
    //     //->join('nombre tabla querer agregar ','id relacional de la tabla','=','id de la tbal que quiero ')
    //     ->join('categorias','categorias.id','=', 'productos.category_id')
    //     ->select('productos.name','productos.description', 'categorias.name')->get();
    //    dd($products2);
    //   return view('admin.products.index')->with('products',$products2);



    }

    public function create(){
        return view('admin.products.create');  //formulario de registro
    }


    public function store(Request $request){

        //return view();  // resgistart un nuevo producto a la base de datos
        //dd($request->all());

        $Categoria = new Categoria();
        $Categoria->name = $request->namec;  //el namec es el nombre dl input
        $Categoria->save();   // para guardar el registro
        $idCategoria = $Categoria->id; //sacar el ultimo id de la insersion de categoria

        $Producto = new Producto();
        $Producto->name = $request->input('name');
        $Producto->description = $request->input('description');
        $Producto->long_description = $request->descripcionl;
        $Producto->price = $request->input('price');
        $Producto->category_id = $idCategoria;
        $Producto->save(); //insert
        $idProducto = $Producto->id;


        $Imagen = new ProductImage();
        $Imagen->product_id = $idProducto;
        $Imagen->save();

        return redirect('/admin/products');

    }


    

    public function edit($id)//este id permitira buscar el id del producto seleccionado y una vez encontrado se pasara a la vista
    {

        $BuscarProducto = Producto::find($id);
        $buscarcategoria = Categoria::find($BuscarProducto->category_id);
      
        
        return view('admin.products.edit')->with('RenombradoBuscarVista', $BuscarProducto)->with('RenombradoCategoriaVista', $buscarcategoria);

    }


    public function update(Request $request, $id){
        
        //return view();  // resgistart un nuevo producto a la base de datos
       // dd($request);
        
       $Producto = Producto::find($id );

        $Categoria = Categoria::find($Producto->category_id);
        $Categoria->name = $request->namec;  //el namec es el nombre dl input
        $Categoria->save();   // para guardar el registro
        $idCategoria = $Categoria->id; //sacar el ultimo id de la insersion de categoria

        $Producto->name = $request->input('name');
        $Producto->description = $request->input('description');
        $Producto->long_description = $request->descripcionl;
        $Producto->price = $request->input('price');
        $Producto->category_id = $idCategoria;
        $Producto->save(); //insert
        $idProducto = $Producto->id;


        // $Imagen = ProductImage::find($idProducto);
        // $Imagen->product_id = $idProducto;
        // $Imagen->save();  
        Alert::success('Registro modificado con exito','Hecho');
        return redirect('/admin/products');

    }
    




}
