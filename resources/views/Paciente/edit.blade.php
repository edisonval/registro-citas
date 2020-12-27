@extends('layouts.panel')

@section('contenido')

      
       
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Editar Pacientes</h3>
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

           <form action="{{url ('Paciente/'.$paciente->id) }}" method="post">
           @csrf
           @method('PUT')
           <div class="form-group">
           <label for="name">Nombre</label>
           <input type="text" name="name" class="form-control" required value="{{ old('name', $paciente->name) }}">
           </div>

           <div class="form-group">
           <label for="cedula">Cedula</label>
           <input type="text" name="cedula" class="form-control" required  value="{{ old('cedula', $paciente->cedula ) }}" >
           </div>

           <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $paciente->direccion) }}" >
            </div>

            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" required  value="{{ old('telefono', $paciente->telefono) }}" >
                </div>

                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" name="email" class="form-control" required  value="{{ old('email', $paciente->email) }}" >
                    </div>

                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="text" name="password" class="form-control"  value="" >
                      <P>Ingresar contraseña solo si desea cambiar la anterior, de lo contrario mantendra su contraseña actual.</p>
                      </div>

           <button type="submit" class="btn btn-primary"> Guardar </button>
           
           </form>
           </div>
          </div>
       
@endsection