<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY</title>
    <link rel="icon" href="{{ asset('imagenes/icono1.png') }}">

      <!-- Scripts Estilosssss-->

      @vite(['resources/css/app.css', 'resources/js/app.js'])
     <!--<script src="https://cdn.tailwindcss.com"></script>-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>
<body>
@include('layouts.navigation')
<nav x-data="{ open: false }" class="bg-white white:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="flex bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
            
    
    
             <div class="flex w-full items-center justify-between px-12 py-2">
    
                <h5>{{$titulo}}</h5>
                <div class="flex-grow"></div>

                <!--ESTE IF ES PARA QUE MUESTRE SOLO EL BUSCADOR EN ESTAS RUTAS-->
                @if(request()->routeIs('reporte') or request()->routeIs('buscar')  )
                <form action="{{route('buscar')}}" method="GET">
                    <div class="flex">
                        
                        <select id="filtro" name="filtro" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                            <option value="id">ID</option>
                            <option value="localizacion_id">Ciudad</option>
                            <option value="modelo">Modelo</option>
                        </select>

                        <div class="relative w-full">
                            <input type="search" id="contenido" name="contenido" class="block  px-12 py-3 w-full  z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Buscar..." required>
                            <button type="submit" class="absolute top-0  end-0  p-2.5 text-sm font-medium h-full text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                
                            </button>
                        </div>
                    </div>
                </form>

                @endif

                <div class="flex-grow"></div>
                <button class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-5 mb-2">
                    <a href="{{$nuevo}}">Nuevo</a></button>

             </div>

    </div>
</nav>   

    
    <div>
         {{$slot}} <!--Este slot es de la table -->
    </div>
    
</body>
</html>