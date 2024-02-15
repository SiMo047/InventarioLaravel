<x-milay>

   
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Localizaciones
            </h2>
            
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    {{route('localizacion.create')}}
    </x-slot>


    <x-tabla>

    <x-slot name="tcabecera">
                <x-tabla.th>Ciudad</x-tabla.th>
                <x-tabla.th>Nombre Del Edificio</x-tabla.th>
                <x-tabla.th>Direccion</x-tabla.th>
                <x-tabla.th>Nº sala</x-tabla.th>
                <x-tabla.th>Acciones</x-tabla.th>

          
    </x-slot>

    <x-slot name="tbody">
   
    
        @foreach($localizaciones as $localizacion)


            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
             
                        <x-tabla.td>{{$localizacion->ciudad}}</x-tabla.td>
                        <x-tabla.td>{{$localizacion->nombre_edificio}}</x-tabla.td>
                        <x-tabla.td>{{$localizacion->direccion}}</x-tabla.td>
                        <x-tabla.td>{{$localizacion->numero_sala}}</x-tabla.td>
                        <x-tabla.td>   
                            
                            <a href="{{route('dellocalizacion',['id'=>$localizacion->id])}}"><i class="zmdi zmdi-delete"></i></a>
                        </x-tabla.td>
            </tr>

        @endforeach

        <x-slot name="tlink">
        {{$localizaciones->links()}}
        </x-slot>
</x-slot>


    </x-tabla>
  

   
</x-milay>
