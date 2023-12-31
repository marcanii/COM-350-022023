<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Editar') }}
      </h2>
  </x-slot>

    <form action="{{route('cliente.update',$cliente->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa" value="{{$cliente->placa}}">
        <label for="tipo_documento_id">Tipo Documento</label>
        <input type="number" name="tipo_documento_id" id="tipo_documento_id" value="{{$cliente->tipo_documento_id}}">
        <label for="numero_documento">Numero Documento</label>
        <input type="number" name="numero_documento" id="numero_documento" value="{{$cliente->numero_documento}}">
    </div>
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{$cliente->nombre}}">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido" value="{{$cliente->apellido}}">
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono" value="{{$cliente->telefono}}">
        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$cliente->fecha_nacimiento}}">
        
    </div>
    <div>
        <input type="submit" value="Actualizar">
    </div>
    </form>
    
</x-app-layout>