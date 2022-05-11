@extends('layout')

@section('contenido')
<div class="row">
    <h1 class="p-3 mt-2 bg-secondary text-white col-md-8  offset-md-2 col-lg-6 offset-lg-3">CONTACTANOS</h1>
</div>
    <div class="row text-center ">
        @if ( session()->has('info'))
            <h5 class="col-4 offset-4 p-3 mb-2 bg-light text-dark">{{ session('info') }}</h5>

        @else
        <form method="POST" action="{{ route('mensajes.store') }}" class="col-md-8  offset-md-2 col-lg-6 offset-lg-3 p-3 mb-2 bg-light text-dark">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ old('email') }}">
                {!! $errors->first('email', '<div id="validation" style="color:red"">:message</div>') !!}
            </div>
            {{--<div class="form-group">
            <label for="exampleFormControlSelect1">Ciudad de residencia</label>
            <select class="form-control" name="ciudad" id="exampleFormControlSelect1">
                <option>Chipiona</option>
                <option>Jerez</option>
                <option>Sanlucar</option>
                <option>Chiclana</option>
                <option>Rota</option>
            </select>
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect2">Fruta favorita</label>
            <select multiple class="form-control" name="fruta" id="exampleFormControlSelect2">
                <option>Pera</option>
                <option>Manzana</option>
                <option>Melon</option>
                <option>Sandia</option>
                <option>Fresa</option>
            </select>
            </div>--}}
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3">{{ old('texto') }}</textarea>
            {!! $errors->first('texto', '<div id="validation" style="color:red"">:message</div>') !!}
            </div>
            <input type="submit" class="btn btn-secondary" value="Contactar">
        </form>
        @endif
    </div>
@endsection
