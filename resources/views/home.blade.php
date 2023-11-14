@extends('template')

@section('content')
    <section>
        <h2 class="text-3xl text-center my-8">Registra un cumpleañero</h2>
        <form action="" method="POST" class="border border-gray-100 max-w-xl mx-auto rounded shadow-gray-300 shadow-md py-2 px-10">
            <label for="name" class="block my-5">Nombres completos</label>
            <input type="text" name="name" class="block w-full border border-gray-300 py-2 px-3 rounded">
            <label for="birth" class="block my-5">Fecha de nacimiento / Cumpleaños</label>
            <input type="date" name="birth" class="block w-full border border-gray-300 py-2 px-3 rounded">
            <input type="submit" value="Guardar" class="bg-lime-500 text-white py-2 px-6 uppercase text-gray-800 font-semibold rounded block mx-auto my-8">
        </form>
    </section>
    <section>
        <h2 class="text-3xl text-center my-8">Cumpleañeros</h2>
        <table class="max-w-xl mx-auto">
            <thead class="bg-gray-600 text-white">
                <tr>
                    <th>Nombre</th>
                    <th>Alias</th>
                    <th>Cumpleaños</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->alias }}</td>
                        <td>{{ $user->birth->format('m/d/Y') }}</td>
                        <td>Felicitar | Mensajes | Eliminar</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection