<x-milay>

   
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Form Localizacion
            </h2>
            
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    {{route('localizacion.create')}}
    </x-slot>
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md rounded-md px-8 py-6 my-8">
    <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Crear Localizacion</h1>

    <form method="POST" action="{{ route('localizacion.store') }}" class="space-y-4">
        @csrf

        <!-- Ciudad -->
        <div>
            <label for="ciudad" class="block text-sm text-gray-700 dark:text-gray-400">Ciudad</label>
            <input id="ciudad" type="text" name="ciudad" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </div>

        <!-- Nombre del Edificio -->
        <div>
            <label for="nombre_edificio" class="block text-sm text-gray-700 dark:text-gray-400">Nombre del Edificio</label>
            <input id="nombre_edificio" type="text" name="nombre_edificio" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </div>

        <!-- Dirección -->
        <div>
            <label for="direccion" class="block text-sm text-gray-700 dark:text-gray-400">Dirección</label>
            <input id="direccion" type="text" name="direccion" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </div>

        <!-- Número de Sala -->
        <div>
            <label for="numero_sala" class="block text-sm text-gray-700 dark:text-gray-400">Número de Sala</label>
            <input id="numero_sala" type="text" name="numero_sala" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
        </div>

        <!-- Botón de enviar -->
        <button type="submit" class="block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Crear
        </button>
    </form>
</div>

  


   
  

   
</x-milay>
