<x-app-layout>
  <div class="px-4">
    <h1 class="text-4xl font-bold my-4">Insertar planta</h1>
    <form action="{{route('insertarPlanta')}}" method="POST" class="flex flex-col gap-1">
      @csrf
      <label class="text-xl" for="">Nombre</label>
      <input type="text" name="nombre" id="">
      <label class="text-xl" for="">Categoria</label>
      <input type="text" name="categoria" id="">
      <label class="text-xl" for="">Precio</label>
      <input type="number" name="precio" id="">
      <label class="text-xl" for="">Cantidad</label>
      <input type="number" name="cantidad" id="">
      <div class="mt-4">
        <input class="px-4 py-1 mr-2 border-black border-2 rounded bg-blue-700 text-white text-xl font-bold" type="submit" name="" id="" value="Enviar">
        <a class="px-4 py-1 inline-block border-black border-2 rounded bg-red-700 text-white text-xl font-bold" href="{{route('dashboard')}}">Volver</a>
      </div>
    </form>
  </div>
</x-app-layout>