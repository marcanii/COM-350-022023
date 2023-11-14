<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Listado de clientes') }}
    </h2>
</x-slot>

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium">
              <tr>
                <th scope="col" class="px-6 py-4">placa</th>
                <th scope="col" class="px-6 py-4">tipodocumento</th>
                <th scope="col" class="px-6 py-4">Numero Documento</th>    
                <th scope="col" class="px-6 py-4">nombre</th>
                <th scope="col" class="px-6 py-4">apellido</th>
                <th scope="col" class="px-6 py-4">telefono</th>
                <th scope="col" class="px-6 py-4">fecha nacimiento</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr class="border-b">
                    <td class="whitespace-nowrap px-6 py-4">{{$cliente->placa}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$cliente->tipo_documento->descripcion}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$cliente->numero_documento}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$cliente->nombre}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$cliente->apellido}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$cliente->telefono}}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{$cliente->fechanacimiento}}</td>
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
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


<a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('cliente.create')}}">Registrar Cliente</a>
</x-app-layout>