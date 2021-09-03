@include("header")
<h1 class="page-header">
    {{(!empty($producto) ? 'Editar' : 'Nuevo')}}
</h1>

<ol class="breadcrumb">
  <li><a href="">Producto </a></li>
  <li class="active">{{(!empty($producto) ? $producto['nombre_de_producto'] : 'Nuevo')}}</li>
</ol>

<form action="{{asset('new_update')}}" method="get"  id="frm-alumno">
    <input type="hidden" name="id" value="{{(!empty($producto) ? $producto['id'] : '')}}" />
    
    <div class="form-group">
        <label>Nombre de producto</label>
        <input type="text" name="nombre" value="{{(!empty($producto) ? $producto['nombre_de_producto'] : '')}}" class="form-control" placeholder="Ingrese el nombre del producto" required />
    </div>
    
    <div class="form-group">
        <label>Referencia</label>
        <input type="text" name="referencia" value="{{(!empty($producto) ? $producto['referencia'] : '')}}" class="form-control" placeholder="Ingrese la Referencia" required />
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="{{(!empty($producto) ? $producto['precio'] : '')}}" class="form-control" placeholder="Ingrese el Precio" required />
    </div>
    
    <div class="form-group">
        <label>Peso</label>
        <input type="text" name="peso" value="{{(!empty($producto) ? $producto['peso'] : '')}}" class="form-control" placeholder="Ingreseel Peso" required/>
    </div>
    
    <div class="form-group">
        <label>Categoría</label>
        <input type="text" name="categoría" value="{{(!empty($producto) ? $producto['categoria'] : '')}}" class="form-control" placeholder="Ingrese la Categoría" required />
    </div>

    <div class="form-group">
        <label>Stock</label>
        <input type="text" name="stock" value="{{(!empty($producto) ? $producto['stock'] : '')}}" class="form-control" placeholder="Ingrese el Stock" required />
    </div>

    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
@include("footer")
