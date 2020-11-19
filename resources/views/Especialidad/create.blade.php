@extends('layouts.panel')

@section('contenido')

      
       
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Agregar nueva especialidad</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('Especialidad')}}" class="btn btn-danger">Cancelar</a>
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

           <form action="{{url ('Especialidad') }}" method="post">
           @csrf
           <div class="form-group">
           <label for="nombre">Nombre especialidad</label>
           <input type="text" name="nombre" class="form-control" required value="{{ old('nombre') }}">
           </div>

           <div class="form-group">
           <label for="descripcion">Descripcion</label>
           <input type="text" name="descripcion" class="form-control" value="{{ old('descripcion') }}" >
           </div>

           <button type="submit" class="btn btn-primary"> Guardar </button>
           
           </form>
           </div>
          </div>
       
@endsection
