<x-app-layout>
  <div class="p-6">
    <h1 class="text-4xl font-bold mb-6">Plantas</h1>
    <div class="flex flex-wrap gap-4">
      @foreach ($plantas as $planta)
          <div class=" bg-white rounded p-4 text-xl font-bold flex flex-col gap-2">
            <p>ID: {{$planta->id}}</p>
            <p>Nombre: {{$planta->nombre}}</p>
            <p>Categoria: {{$planta->categoria}}</p>
            <p>Precio: {{$planta->precio}}</p>
            <p>Cantidad: {{$planta->cantidad}}</p>
            <div>
              <a class="px-4 py-1 inline-block border-black border-2 rounded bg-red-700 text-white text-xl font-bold" href="{{ route('eliminarPlanta', ['id' => $planta->id]) }}">Eliminar</a>
            </div>
            <br>
          </div>
      @endforeach
    </div>
  </div>
</x-app-layout>