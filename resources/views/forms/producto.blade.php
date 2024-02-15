<x-milay>

   
    <x-slot name="titulo">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-200 mr-auto">
              Form Producto
            </h2>
            
        </h2>
    </x-slot>

    <x-slot name="nuevo">
    {{route('producto.create')}}
    </x-slot>

    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md rounded-md px-8 py-6 my-8">
      <h1 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Crear Producto</h1>

    <form method="POST" action="{{ route('producto.store') }}" class="space-y-4">
            @csrf

            <!-- Modelo -->
            <div>
                <label for="modelo" class="block text-sm text-gray-700 dark:text-gray-400">Modelo</label>
                <input id="modelo" type="text" name="modelo" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            </div>

            <!-- Fabricante -->
            <div>
                <label for="fabricante" class="block text-sm text-gray-700 dark:text-gray-400">Fabricante</label>
                <input id="fabricante" type="text" name="fabricante" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            </div>

            <!-- Descripción -->
            <div>
                <label for="descripcion" class="block text-sm text-gray-700 dark:text-gray-400">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-textarea"></textarea>
            </div>

            <!-- Stock -->
            <div>
                <label for="stock" class="block text-sm text-gray-700 dark:text-gray-400">Stock</label>
                <input id="stock" type="number" name="stock" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
            </div>

            <!-- Estado -->
            <div>
                <label for="estado" class="block text-sm text-gray-700 dark:text-gray-400">Estado</label>
                <select id="estado" name="estado" class="block w-full mt-1 text-sm bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select">
                    <option value="activo">Activo</option>
                    <option value="roto">Roto</option>
                    <option value="desaparecido">Desaparecido</option>
                </select>
            </div>

            <!-- Localización -->
            <div>
                <label for="localizacion_id" class="block text-sm text-gray-700 dark:text-gray-400">Localización</label>
                <select id="localizacion_id" name="localizacion_id" class="block w-full mt-1 text-sm bg-gray-100 dark:bg-gray-700 border-gray-300 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-select">
                    @foreach($localizaciones as $localizacion)
                        <option value="{{ $localizacion->id }}">{{ $localizacion->ciudad }}</option><!--EN HTML SE REPRESENTA {{ $localizacion->ciudad }} PERO AL ENVIAR LOS DATOS SE ENVIA EL ID-->
                    @endforeach
                </select>
            </div>

            <!-- Botón de enviar -->
            <button type="submit" class="block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Crear
            </button>
        </form>
    </div>


   
  

   
</x-milay>
