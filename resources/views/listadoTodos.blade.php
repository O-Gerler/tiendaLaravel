<x-app-layout>
  <h1>Todos los usuarios</h1>
  @foreach ($users as $user)
      <div>
        <p>Nombre: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
      </div>
  @endforeach
  <a href="{{route('dashboard')}}">Volver</a>
</x-app-layout>