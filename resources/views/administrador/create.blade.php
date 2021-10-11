@extends('layout.plantilla')

@section('title', 'Create')

@section('container')
    <h1>Crear administradores</h1>

    <form action="{{route('administrador.store')}}" method="POST">

    @csrf
        <label>Nombre:<br>
                <input type="text" name="nombre">
        </label><br>
        <label>Correo:<br>
                <input type="text" name="correo">
        </label><br>
        <label>Contraseña:<br>
                <input type="text" name="contrasena">
        </label><br><br>

        <input type="submit" value="Registrar">
    </form>
@endsection