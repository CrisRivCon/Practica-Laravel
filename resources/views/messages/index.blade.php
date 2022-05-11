@extends('layout')

@section('contenido')

<div class="container">
    <h2>Mensajes</h2>
    <table class="table table-striped">
         <thead>
             <tr>
                 <th>Email</th>
                 <th>Mensaje</th>
                 <th>Acciones</th>
             </tr>
         </thead>
         <tbody>
              @foreach ($messages as $message)
                  <tr>
                      <td>
                          <a href=" {{ route('mensajes.show', $message->id) }}">
                             {{ $message->email }}
                        </a>
                    </td>
                      <td>{{ $message->mensaje }}</td>
                      <td>
                          <button class="btn btn-dark">
                              <a href=" {{ route('mensajes.edit', $message->id)}} ">
                                  Editar
                              </a>
                            </button>
                            <form method="POST" class="d-inline" action="{{ route('mensajes.destroy', $message->id)}}">
                                @csrf
                                {{@method_field('DELETE')}}
                                <button class="btn btn-dark">
                                        Eliminar
                                </button>
                            </form>
                      </td>
                  </tr>
              @endforeach
         </tbody>
    </table>
</div>

@endsection
