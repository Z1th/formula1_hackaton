@extends('layouts.master')

@section('metaSEO')
    <title>Index - F1 App</title>
@endsection

@section('contenido-principal')
<h1>Seleccionar piloto:</h1>
<form id="selectForm">
    <select id="driversSelect" name="driver">
        <option value="">Selecciona un piloto...</option>
    </select>
    <button type="submit">Seleccionar</button>
</form>

<div id="driverInfo"></div> 

<h3>Esto es un test de Api</h3>

@foreach($Drivers as $driver)
    <p>{{ $driver['GivenName'] }} {{$driver['FamilyName']}}</p>
@endforeach

@endsection

@section('css')
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/peticion_api.js') }}"></script>
@stop