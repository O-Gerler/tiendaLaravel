<x-app-layout>
  <div class="px-4 w-9/12 flex justify-center items-center">
    <form action="{{route('cancion.update', $cancion)}}" method="POST" class="flex flex-col gap-2 w-full">
      @csrf
      @method('PUT')
      <label for="">Nombre</label><input class="rounded" type="text" name="nombre" value="{{$cancion->nombre}}">
      <label for="">Duracion</label><input class="rounded" type="text" name="duracion" value="{{$cancion->duracion}}">
      <label for="">Año</label><input class="rounded" type="number" name="año" value="{{$cancion->año}}">
      <label for="">Artista</label><input class="rounded" type="text" name="artista" value="{{$cancion->artista}}">
      <div class="mt-2">
        <input class="bg-indigo-400 px-4 py-1 rounded text-lg text-white font-bold border-2 border-black" type="submit" value="Enviar">
      </div>
    </form>
  </div>
</x-app-layout>