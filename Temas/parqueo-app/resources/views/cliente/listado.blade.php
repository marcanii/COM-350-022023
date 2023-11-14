<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Listado de clientes') }}{{$tipo_documento->descripcion}}
      </h2>
  </x-slot>

<table>
    <tr>
        <th>placa</th>
        
        <th>Numero Documento</th>    
        <th>nombre</th>
        <th>apellido</th>
        <th>telefono</th>
        <th>fecha nacimiento</th>
    </tr>
@foreach ($clientes as $cliente)
<tr>
    <td>{{$cliente->placa}}</td>
    
    <td>{{$cliente->numero_documento}}</td>
    <td>{{$cliente->nombre}}</td>
    <td>{{$cliente->apellido}}</td>
    <td>{{$cliente->telefono}}</td>
    <td>{{$cliente->fechanacimiento}}</td>
    <td><a href="{{route('cliente.show',$cliente->id)}}">Mostrar</a>
        <a href="{{route('cliente.edit',$cliente->id)}}">Editar</a></td>
    <td>
        <form action="{{route('cliente.destroy',$cliente->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach
</table>    
<a href="{{route('cliente.create')}}">Registrar Cliente</a>
</x-app-layout>