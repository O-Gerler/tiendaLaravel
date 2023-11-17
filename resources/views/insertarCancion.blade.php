<x-app-layout>
  <div class="px-4 w-9/12 flex justify-center items-center">
    <form action="{{route('cancion.store')}}" method="POST" class="flex flex-col gap-2 w-full">
      @csrf
      <label for="">Nombre</label><input class="rounded" type="text" name="nombre">
      <label for="">Duracion</label><input class="rounded" type="text" name="duracion">
      <label for="">Año</label><input class="rounded" type="number" name="año">
      <label for="">Artista</label><input class="rounded" type="text" name="artista">
      <div class="mt-2">
        <input class="bg-indigo-400 px-4 py-1 rounded text-lg text-white font-bold border-2 border-black" type="submit" value="Enviar">
      </div>
    </form>
  </div>
</x-app-layout>