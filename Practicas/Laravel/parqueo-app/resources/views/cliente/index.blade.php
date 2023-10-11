@extends('layouts.app')

@section('content')
<h1>Lista de Clientes</h1>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
            <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Placa</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">tipodocumento</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Numero Documento</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Nombre</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Apellido</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Telefono</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Fecha Nacimiento</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr class="border-b dark:border-neutral-500">
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$cliente->placa}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$cliente->tipo_documento_id}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$cliente->numero_documento}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$cliente->nombre}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$cliente->apellido}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$cliente->telefono}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$cliente->fecha_nacimiento}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"><a href="{{route('cliente.edit',$cliente->id)}}">Editar</a></td>
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

<a href="{{route('cliente.create')}}">Registrar Cliente</a>
@endsection