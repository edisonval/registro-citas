@extends('layouts.panel')

@section('contenido')
<form action="{{ url('/calendario')}}" method="post">
@csrf
<div class="card shadow">

    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Gestionar horario</h3>
        </div>
        <div class="col text-right">
          <button type="submit" class="btn btn-success">Guardar cambios</button>
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
            <th scope="col">Día</th>
            <th scope="col">Activo</th>
            <th scope="col">Turno mañana</th>
            <th scope="col">Turno tarde</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <th>Lunes</th>
           <td> 
              <label class="custom-toggle">
              <input type="checkbox" name="activo[]" value="0">
              <span class="custom-toggle-slider rounded-circle"></span>
            </label>
            </td>
            <td>
              <div class="row">
                <div class="col">
                  <select class="form-control" name="mañana[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                    <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="mañanafin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                  <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                  @endfor
                </select>
              </div>
              </div>
            </td>
            <td>
              <div class="row">
              <div class="col">
                <select class="form-control"name="tarde[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                  <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                  @endfor
                </select>
            </div>
            <div class="col">
              <select class="form-control"name="tardefin[]">
                @for ($i=1; $i<=11; $i++)
                <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                @endfor
              </select>
            </div>
            </div>
          </td>
          </tr>

          <tr>
            <th>Martes</th>
            <td> 
               <label class="custom-toggle">
               <input type="checkbox" name="activo[]" value="1">
               <span class="custom-toggle-slider rounded-circle"></span>
             </label>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="mañana[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                    <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="mañanafin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                  <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                  @endfor
                </select>
              </div>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="tarde[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                    <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="tardefin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                  <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                  @endfor
                </select>
              </div>
              </div>
             </td>
           </tr>

           <tr>
            <th>Miercoles</th>
            <td> 
               <label class="custom-toggle">
               <input type="checkbox" name="activo[]" value="2">
               <span class="custom-toggle-slider rounded-circle"></span>
             </label>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="mañana[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                    <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="mañanafin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                  <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                  @endfor
                </select>
              </div>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="tarde[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                    <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="tardefin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                  <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                  @endfor
                </select>
              </div>
              </div>
             </td>
           </tr>

           <tr>
            <th>Jueves</th>
            <td> 
               <label class="custom-toggle">
               <input type="checkbox" name="activo[]" value="3">
               <span class="custom-toggle-slider rounded-circle"></span>
             </label>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="mañana[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                    <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="mañanafin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                  <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                  @endfor
                </select>
              </div>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="tarde[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                    <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="tardefin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                  <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                  @endfor
                </select>
              </div>
              </div>
             </td>
           </tr>

           <tr>
            <th>Viernes</th>
            <td> 
               <label class="custom-toggle">
               <input type="checkbox" name="activo[]"value="4">
               <span class="custom-toggle-slider rounded-circle"></span>
             </label>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="mañana[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                    <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="mañanafin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                  <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                  @endfor
                </select>
              </div>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="tarde[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                    <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="tardefin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                  <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                  @endfor
                </select>
              </div>
              </div>
             </td>
           </tr>

           <tr>
            <th>Sabado</th>
            <td> 
               <label class="custom-toggle">
               <input type="checkbox" name="activo[]" value="5">
               <span class="custom-toggle-slider rounded-circle"></span>
             </label>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="mañana[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                    <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="mañanafin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                  <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                  @endfor
                </select>
              </div>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="tarde[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                    <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="tardefin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                  <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                  @endfor
                </select>
              </div>
              </div>
             </td>
           </tr>

           <tr>
            <th>Domingo</th>
            <td> 
               <label class="custom-toggle">
               <input type="checkbox" name="activo[]" value="6">
               <span class="custom-toggle-slider rounded-circle"></span>
             </label>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="mañana[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                    <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="mañanafin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i }}:00">{{ $i }}:00 am</option>
                  <option value="{{ $i }}:30">{{ $i }}:30 am</option>
                  @endfor
                </select>
              </div>
             </td>
             <td>
              <div class="row">
                <div class="col">
                  <select class="form-control"name="tarde[]">
                    @for ($i=1; $i<=11; $i++)
                    <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                    <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                    @endfor
                  </select>
              </div>
              <div class="col">
                <select class="form-control"name="tardefin[]">
                  @for ($i=1; $i<=11; $i++)
                  <option value="{{ $i+12 }}:00">{{ $i }}:00 pm</option>
                  <option value="{{ $i+12 }}:30">{{ $i }}:30 pm</option>
                  @endfor
                </select>
              </div>
              </div>
             </td>
           </tr>

          
        
        </tbody>
      </table>
    </div>
  </div>
</form>
  @endsection
