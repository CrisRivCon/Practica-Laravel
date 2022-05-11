@extends('layout')

@section('contenido')

<div class="container">
    <h2>Mensajes</h2>
    <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Email</th>
                    <th>Mensaje</th>
                </tr>
                @foreach($messages as $message)
                <tr>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->mensaje }}</td>
                </tr>
            @endforeach
         </tbody>
    </table>
</div>

@endsection
