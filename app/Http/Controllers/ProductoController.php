<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Localizacion;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto=Producto::paginate(25);
        return view('productos',['productos'=>$producto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $localizaciones = Localizacion::all();
        return view('forms.producto',compact('localizaciones')); //compact() no funciona con el simbolo $ 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto=new Producto();
        $producto->modelo = $request->modelo;
        $producto->fabricante = $request->fabricante;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->estado = $request->estado;
        $producto->localizacion_id = $request->localizacion_id;

        $producto->save();
        return redirect()->route('productos');



    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto=Producto::where('id', $id)->first();
        $localizaciones = Localizacion::all();

        return view('editproducto',compact('producto','localizaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $producto=Producto::where('id', $id)->first();

        $producto->modelo = $request->modelo;
        $producto->fabricante = $request->fabricante;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->estado = $request->estado;
        $producto->localizacion_id = $request->localizacion_id;

        $producto->save();

        return redirect()->route('productos');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto=Producto::where('id', $id)->first();
        $producto->delete();
        return redirect()->route('productos');
        
    }



    public function buscar(Request $request)
    {
        $filtro=$request->filtro;
        $busqueda=$request->contenido;

        switch($filtro){
            case 'id':
                $producto=Producto::where('id',$busqueda)->paginate();
                break;
            case 'modelo':
                $producto=Producto::where('modelo','LIKE',"%$busqueda%")->paginate();
                break;
            case 'localizacion_id':
                $localizacion=Localizacion::where('ciudad','LIKE',"%$busqueda%")->first();
                $producto = $localizacion->productos()->paginate(10);
                break;
                
            default:
                $producto=Producto::paginate(25);
                break;
        }

        return view('productos',['productos'=>$producto]);

    
    }
}
