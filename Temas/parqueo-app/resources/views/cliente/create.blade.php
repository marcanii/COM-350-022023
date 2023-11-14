<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Listado de clientes') }}
      </h2>
  </x-slot>
<form class="w-full " action="{{route('cliente.store')}}" method="POST">
    @csrf
    <div class="w-full flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/6 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="placa">
                Placa
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="placa" type="text" name="placa" placeholder="Placa" *>

        </div>
        <div class="w-full md:w-1/3 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tipo_documento_id">
                Tipo Documento
            </label>
            <div class="relative">

                <select
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="tipo_documento_id" id="tipo_documento_id">
                    @foreach ($tipos_documentos as $tipo_documento)
                    <option value="{{$tipo_documento->id}}">{{$tipo_documento->descripcion}}</option>
                    @endforeach

                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>

        </div>
        <div class="w-full md:w-1/6 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="placa">
                Numero Documento
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="numero_documento" type="text" name="numero_documento" placeholder="numero_documento" *>

        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6 w-full">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono">
        <label for="fecha_nacimiento">Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">

    </div>
    <div>
        <input type="submit" value="Registrar">
    </div>
</form>

</x-app-layout>