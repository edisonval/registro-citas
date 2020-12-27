@extends('layouts.panel')

@section('contenido')

      
       
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Agregar pacientes</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('Paciente')}}" class="btn btn-danger">Cancelar</a>
                </div>
              </div>
            </div>
            <div class="card-body">

            @if ($errors->any())
            <ul>
            @foreach($errors->all() as $error)
            <li style="color:#FF0000">{{ $error }}</li>
            @endforeach
            </ul>
            @endif

           <form action="{{url ('Paciente') }}" method="post">
           @csrf
           <div class="form-group">
           <label for="name">Nombre</label>
           <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
           </div>

           <div class="form-group">
           <label for="cedula">Cedula</label>
           <input type="text" name="cedula" class="form-control" required  value="{{ old('cedula') }}" >
           </div>

           <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}" >
            </div>

            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" required  value="{{ old('telefono') }}" >
                </div>

                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" class="form-control" required  value="{{ old('email') }}" >
                    </div>

                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="text" name="password" class="form-control" required  value="{{ old('password', str_random(8)) }}" >
                      </div>

           <button type="submit" class="btn btn-primary"> Guardar </button>
           
           </form>
           </div>
          </div>
       
@endsection
