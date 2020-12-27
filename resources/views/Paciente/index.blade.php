@extends('layouts.panel')

@section('contenido')

      
       
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Pacientes</h3>
                </div>
                <div class="col text-right">
                  <a href="{{url('Paciente/create')}}" class="btn btn-success">Agregar Pacientes</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              @if (session('notificacion'))
              <li style="color:green">{{ session('notificacion') }}</li>
              @endif
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($paciente as $pacientes)
                  <tr>
                    <th scope="row">
                      {{ $pacientes->name }}
                    </th>
                    <td>
                    {{ $pacientes->cedula }}
                    </td>
                    <td>
                      {{ $pacientes->email }}
                      </td>
                    <td>
                    
                    
                    <form action="{{ url('/Paciente/'.$pacientes->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{ url('/Paciente/'.$pacientes->id.'/edit') }}" text-color="white" class="btn btn-sm btn-primary">Editar</a>
                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                    </td>
                  </tr>
                @endforeach
                   
                </tbody>
              </table>
            </div>
            <div class="card-body">
              {{ $paciente->links() }}
            </div>
          </div>
       
@endsection
