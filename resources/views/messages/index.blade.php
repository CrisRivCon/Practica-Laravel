@extends('layout')

@section('contenido')

<div class="container">
    <h2>Mensajes</h2>
    <table class="table table-striped">
         <thead>
             <tr>
                 <th>Email</th>
                 <th>Ciudad</th>
                 <th>Fruta</th>
                 <th>Mensaje</th>
             </tr>
         </thead>
         <tbody>
              @foreach ($messages as $message)
                  <tr>
                      <td>{{ $message->email }}</td>
                      <td>{{ $message->ciudad }}</td>
                      <td>{{ $message->fruta }}</td>
                      <td>{{ $message->mensaje }}</td>
                  </tr>
              @endforeach
         </tbody>
    </table>
</div>

@endsection