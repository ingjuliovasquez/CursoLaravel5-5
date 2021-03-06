@extends('layouts.app')
@section('body-class', 'product-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

</div>

<div class="main main-raised">
<div class="container">
    
    <div class="section text-center">
        <h2 class="title">Editar Producto Seleccionado</h2>

 
        {{--  {!!Form::model($RenombradoBuscarVista, array('route' => array('ProductController@update', $RenombradoBuscarVista->id ), 'method' => 'PUT')) !!}  --}}
        {!!Form::model($RenombradoBuscarVista, ['method' => 'PUT', 'action' => ['ProductController@update',$RenombradoBuscarVista->id]]) !!}


        <div class="row">
        <div class="col-sm-6>
        <div class="form-group label-floating">
            <label class="control-label">Nombre del producto</label>
        <input type="text" class="form-control" name="name" value="{{$RenombradoBuscarVista->name}}">
        </div>
        <div class="form-group label-floating">
                <label class="control-label">Categoria</label>  
                <input type="text" class="form-control" name="namec" value="{{$RenombradoCategoriaVista->name}}">
            </div>
        </div>

        <div class="col-sm-6">
                <div class="form-group label-floating">
                    <label class="control-label">Descripcion</label>
                    <input type="text" class="form-control" name="description" value="{{$RenombradoBuscarVista->description}}">
        </div>
        


        
                <div class="form-group label-floating">
                    <label class="control-label">Precio del Producto</label>
                    <input type="number" class="form-control" name="price" value="{{$RenombradoBuscarVista->price}}">
        </div>
       
        
        
        <textarea class="form-control" placeholder="Descripcion extensa del producto"  name="descripcionl" >{{$RenombradoBuscarVista->long_description}}</textarea>
        
        {!!Form::submit('Guardar cambios',array('class' => 'btn btn-primary'))!!}

        <a href="{{ url('/admin/products')}}" class="btn btn-default">Cancelar</a>
        
    


        
{!!Form::close()!!}

    </div>


    
</div>

</div>

<footer class="footer">
<div class="container">
    <nav class="pull-left">
        <ul>
            <li>
                <a href="http://www.creative-tim.com">
                    Creative Tim
                </a>
            </li>
            <li>
                <a href="http://presentation.creative-tim.com">
                   About Us
                </a>
            </li>
            <li>
                <a href="http://blog.creative-tim.com">
                   Blog
                </a>
            </li>
            <li>
                <a href="http://www.creative-tim.com/license">
                    Licenses
                </a>
            </li>
        </ul>
    </nav>
    <div class="copyright pull-right">
        &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
    </div>
</div>
</footer>

@endsection


