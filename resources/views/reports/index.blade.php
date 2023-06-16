<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('reportes.store') }}">
            
            
            
        </form>

        <form method="POST" action="{{ route('reportes.store') }}" class="w-full max-w-lg">
        @csrf
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Turno
      </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="turno" name="turno" required>
            <option value="" selected disabled hidden>Selecciona el turno</option>  
            <option value="1">1er turno</option>
            <option value="2">2do turno</option>
            <option value="3">3er turno</option>
        </select>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
       Jefe de turno
      </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="jefe_turno" name="jefe_turno" required>
            <option value="" selected disabled hidden>Selecciona</option>  
            <option value="Elio Monje">Elio Monje</option>
            <option value="Gonzalo Delgado">Gonzalo Delgado</option>
            <option value="Jorge Espinoza">Jorge Espinoza</option>
            <option value="Jose Granados">José Granados</option>
            <option value="Ricardo Noriega">Ricardo Noriega</option>
        </select>
    </div>
  </div>
  {{-- Inicia tabla de reporte 
    
    mantto.inkabor.rioseco@gmail.cmo
Inkabor999
gpfhlexqhujhgtiw


https://tailwindui.com/components/application-ui/forms/form-layouts
https://tailwindcss.com/docs/margin
https://www.youtube.com/watch?v=trdKCyQ2bdc
    --}}
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
        Código
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="LIC220" name="codigo_1">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        Descripción del trabajo
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="descripcion_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Tiempo (horas)
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="2" name="tiempo_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        ¿Importante?
      </label>
      <input type="checkbox" class="h-6 w-6 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" style="margin-left: 20px;  margin-top: 5px;" name="importancia_1" >
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="codigo_1">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="descripcion_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" name="tiempo_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input type="checkbox" class="h-6 w-6 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" style="margin-left: 20px;  margin-top: 5px; margin-right: 40px;" name="importancia_1" >
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="codigo_1">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="descripcion_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" name="tiempo_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input type="checkbox" class="h-6 w-6 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" style="margin-left: 20px;  margin-top: 5px; margin-right: 40px;" name="importancia_1" >
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="codigo_1">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="descripcion_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" name="tiempo_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input type="checkbox" class="h-6 w-6 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" style="margin-left: 20px;  margin-top: 5px; margin-right: 40px;" name="importancia_1" >
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="codigo_1">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="descripcion_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" name="tiempo_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input type="checkbox" class="h-6 w-6 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" style="margin-left: 20px;  margin-top: 5px; margin-right: 40px;" name="importancia_1" >
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="codigo_1">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="descripcion_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" name="tiempo_1">
    </div>
    <div class="w-1/6 md:w-1/3 px-3 mb-6 md:mb-0">
      <input type="checkbox" class="h-6 w-6 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" style="margin-left: 20px;  margin-top: 5px; margin-right: 40px;" name="importancia_1" >
    </div>
  </div>

  <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Enviar reporte') }}</x-primary-button>
</form>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($reports as $report)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $report->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $report->created_at->format('j M Y, g:i a') }}</small>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $report->descripcion }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>