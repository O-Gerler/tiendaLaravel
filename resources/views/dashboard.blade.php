<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
    <div style="margin-top: 10em">
        <p style="text-align: center">Nombre: {{$nombre}}</p>
        <p style="text-align: center">Email: {{$email}}</p>
        <p style="text-align: center">Es admin: {{$admin}}</p>
    </div>
    <div class="ml-2 mt-6 flex gap-2">
        <x-link-button route="{{route('listadoTodos')}}">Listar todos los usuarios</x-link-button>
        <x-link-button route="{{route('insertarPlanta')}}">Insertar planta</x-link-button>
        <x-link-button route="{{route('verPlantas')}}">Ver plantas</x-link-button>
        <x-link-button route="{{route('cancion.index')}}">Ver Canciones</x-link-button>
    </div>
    
</x-app-layout>
