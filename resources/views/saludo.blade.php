@extends('layout')

@section('contenido')
<h1>Pagina de inicio de la web de {{ $nombre }}</h1>
    <p>
        {{now()->format('d/m/Y H:i:s')}}
    </p>
@endsection

