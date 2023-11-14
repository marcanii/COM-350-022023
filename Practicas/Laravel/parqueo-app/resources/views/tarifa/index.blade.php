@extends('layouts.app')

@section('content')
<h1>Listado de las Tarifas</h1>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
            <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Descripcion</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Horas</th>
                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">Precio</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($tarifas as $tarifa)
                <tr class="border-b dark:border-neutral-500">
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$tarifa->descripcion}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$tarifa->horas}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">{{$tarifa->precio}}</td>
                    <td class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500"><a href="{{route('tarifa.edit',$tarifa->id)}}">Editar</a></td>
                    <td>
                        <form action="{{route('tarifa.destroy',$tarifa->id)}}" method="post">
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

<a href="{{route('tarifa.create')}}">Registrar Cliente</a>
@endsection