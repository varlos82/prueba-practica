<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function listar(){
		$productos = Product::all();
        //var_dump($productos);die;
        return view('inventario')->with('productos',$productos);
	}

    public function crear(Request $request){
        $input = $request->all();
        //var_dump($input);die;
        if(empty($input['new'])){
            $producto = "";
        }else{
            $producto = Product::find($input['new']);
        }
       
        return view('crear')->with('producto',$producto);
	}


    public function new_update_product(Request $request){
        $input = $request->all();
        //var_dump($input);die;

        if(empty($input['id'])){

            $producto =  new Product();

        }else{
            $producto = Product::find($input['id']);
        }

            $producto->nombre_de_producto = $input['nombre'];
            $producto->referencia  = $input['referencia'];
            $producto->precio = $input['precio'];
            $producto->peso  = $input['peso'];
            $producto->categoria = $input['categoría'];
            $producto->stock  = $input['stock'];
            $producto->fecha_de_creación  = date('Y-m-d');
            $producto->fecha_de_ultima_venta = NULL;
            $producto->save();
            
        //var_dump($producto);die;
        return redirect('/inventario');
	}

    public function delete_product(Request $request){
        $input = $request->all();
        
        $producto = Product::find($input['id']);
        $producto->delete();
       
        return redirect('/inventario');
	}

    public function sale(Request $request){
        $input = $request->all();
        
        $producto = Product::find($input['new']);
        if($producto['stock'] <= 0){

            return view('/no_venta');
        }else{
            $resta_prod = (int)$producto['stock'] - 1;
            $producto->stock = $resta_prod;
            $producto->fecha_de_ultima_venta = date('Y-m-d H:i:s');
            $producto->save();
            return redirect('/inventario');
        }
       
        
	}
}
