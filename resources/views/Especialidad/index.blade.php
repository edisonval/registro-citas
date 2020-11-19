@extends('layouts.panel')

@section('contenido')

      
       
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Especialidades</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('Especialidad/create')}}" class="btn btn-success">Agregar especialidad</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($especialidad as $especialidades)
                  <tr>
                    <th scope="row">
                      {{ $especialidades->nombre }}
                    </th>
                    <td>
                    {{ $especialidades->descripcion }}
                    </td>
                    <td>
                    
                    
                    <form action="{{ url('/Especialidad/'.$especialidades->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{ url('/Especialidad/'.$especialidades->id.'/edit') }}" text-color="white" class="btn btn-sm btn-primary">Editar</a>
                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                    </td>
                  </tr>
                @endforeach
                   
                </tbody>
              </table>
            </div>
          </div>
       
@endsection
