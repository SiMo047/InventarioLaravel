<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class ApiCategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::paginate(10);
        return response()->json($categorias);
    }
}
