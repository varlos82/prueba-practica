@include("header")
	
<h1 class="page-header">Inventario</h1>

<div class="well well-sm text-right">
     <a class="btn btn-primary pull-left" href="{{url('/')}}">volver</a>

    <a class="btn btn-primary" href="{{url('crear?new=')}}">Agregar Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Inventario</th>
            <th>Nombre de producto</th>
            <th>Referencia</th>
            <th >Precio</th>
            <th >Peso</th>
            <th >Categoría</th>
            <th >Stock</th>
            <th >Fecha de creación</th>
            <th >Fecha de ultima venta</th>
            <th ></th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{$producto['id']}}</td>
            <td>{{$producto['nombre_de_producto']}}</td>
            <td>{{$producto['referencia']}}</td>
            <td>{{$producto['precio']}}</td>
            <td>{{$producto['peso']}}</td>
            <td>{{$producto['categoria']}}</td>
            <td>{{$producto['stock']}}</td>
            <td>{{$producto['fecha_de_creación']}}</td>
            <td>{{$producto['fecha_de_ultima_venta']}}</td>
            <td>
                <i class="glyphicon glyphicon-create"><a href="{{url('venta?new=').$producto['id']}}"> Venta</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="{{url('crear?new=').$producto['id']}}"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="{{url('delete?id=').$producto['id']}}"> Eliminar</a></i>
            </td>
        </tr>
    @endforeach
    </tbody>
</table> 
@include("footer")