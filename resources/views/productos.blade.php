<x-milay>

   
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Productos
            </h2>
            
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    {{route('producto.create')}}
    </x-slot>


    <x-tabla>

    <x-slot name="tcabecera">
                <x-tabla.th>Modelo</x-tabla.th>
                <x-tabla.th>Fabricante</x-tabla.th>
                <x-tabla.th>Descripcion</x-tabla.th>
                <x-tabla.th>Stock</x-tabla.th>
                <x-tabla.th>Estado</x-tabla.th>
                <x-tabla.th>ID Localizacion</x-tabla.th>
                <x-tabla.th>Acciones</x-tabla.th>

          
    </x-slot>

    <x-slot name="tbody">
   
    
        @foreach($productos as $producto)


            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
             
                        <x-tabla.td>{{$producto->modelo}}</x-tabla.td>
                        <x-tabla.td>{{$producto->fabricante}}</x-tabla.td>
                        <x-tabla.td>{{ Str::limit($producto->descripcion, $limit = 30, $end = '...') }}</x-tabla.td>
                        <x-tabla.td>{{$producto->stock}}</x-tabla.td>
                        <x-tabla.td>{{$producto->estado}}</x-tabla.td>
                        <x-tabla.td>{{$producto->localizacion_id}}</x-tabla.td>
                        <x-tabla.td>   
                            <a href="{{ route('modproducto',['id'=>$producto->id]) }}"><i class="zmdi zmdi-edit"></i></a>
                            <a href="{{ route('delproducto',['id'=>$producto->id]) }}"><i class="zmdi zmdi-delete"></i></a>
                        </x-tabla.td>
            </tr>

        @endforeach

        <x-slot name="tlink">
        {{$productos->links()}}
        </x-slot>
</x-slot>


    </x-tabla>
  

   
</x-milay>
