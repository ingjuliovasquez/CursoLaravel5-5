@extends('layouts.app')
@section('title', 'Listado de productos')
@section('body-class', 'product-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
<div class="container">
  

    <div class="section text-center">
        <h2 class="title">Listado de Productos</h2>

        <div class="team">
            <div class="row">
            <a href="{{url('/admin/products/create')}}" class="btn btn-primary btn-round">Nuevo Producto</a>         
                    <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Nombre PRODUCTO</th>
                                    <th class="col-md-4">Descripcion</th>
                                    <th class="text-right">Categoria</th>
                                    <th class="text-right">Precio</th>
                                    <th class="text-right">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($llamar as $producto)
                                <tr>
                                    <td class="text-center">{{$producto->id}}</td>
                                <td>{{$producto->name}}</td>
                                    <td>{{$producto->description}}</td>
                                    <td>{{$producto->categoria}}</td>
                                <td class="text-right">&euro;{{$producto->price}}</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-info"></i>
                                        </button>
                                    <a href="{{ url('/admin/products/'.$producto->id.'/edit')}}" type="button" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>



                   {{$llamar->links()}}
                    </div>

</footer>

@endsection


