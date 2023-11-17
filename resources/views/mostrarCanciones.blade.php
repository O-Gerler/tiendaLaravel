<x-app-layout>
    <div class="mt-4 ml-4">
        <x-link-button route="{{ route('cancion.create') }}">Añadir cancion</x-link-button>
    </div>
    <div class="p-4 flex flex-wrap gap-4">
        @foreach ($canciones as $cancion)
            <div class="p-4 bg-white shadow-lg rounded-md flex flex-col gap-1 w-60 font-semibold">
                <p>Nombre: {{ $cancion->nombre }}</p>
                <p>Duracion: {{ $cancion->duracion }}</p>
                <p>Año: {{ $cancion->año }}</p>
                <p>Artista: {{ $cancion->artista }}</p>
                <form method="POST" action="{{ route('cancion.destroy', $cancion) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 px-2 py-1 rounded block w-full font-semibold">Eliminar</button>
                </form>
                <a class="py-1 px-4 bg-teal-400 rounded text-center font-semibold" href="{{ route('cancion.edit', $cancion) }}">Modificar cancion</a>
            </div>
        @endforeach
    </div>
</x-app-layout>
