<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Localizacion;

class ApiProductoController extends Controller
{
    public function index(){
        $productos = Producto::paginate(10);
        return response()->json($productos);
    }

    public function show($id){
        $producto = Producto::findorFail($id);
       
        return response()->json($producto);
    }

    public function destroy($id){
        if (Producto::findOrFail($id)) {
            Producto::destroy($id);
            return ['message' => 'Producto eliminado correctamente'];
        }
    }

    public function store(Request $request){

    //valido si la localizacion que se le pase exista en mi base de datos 
     $localizacion=Localizacion::find($request->localizacion_id);

     if (!$localizacion) {
        return response()->json(['error' => 'La localización que has pasado no existe']);
    }

    $producto = new Producto();
    $producto->modelo = $request->modelo;
    $producto->fabricante = $request->fabricante;
    $producto->descripcion = $request->descripcion;
    $producto->stock = $request->stock;
    $producto->estado = $request->estado;
    $producto->localizacion_id = $request->localizacion_id;

    $producto->save();

    return ['message' => 'Producto creado', 'producto' => $producto];
}

}
