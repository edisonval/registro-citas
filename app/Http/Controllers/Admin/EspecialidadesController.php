<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Especialidades;
use App\Http\Controllers\Controller;

class EspecialidadesController extends Controller
{

   

    public function index()
    {
        $especialidad = Especialidades::all();
        return view('Especialidad.index', compact('especialidad'));
    }

    public function create()
    {
        return view ('Especialidad.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nombre' => 'required|min:3'
        ];
        $this->validate($request, $rules);

      //  dd($request->all()); (esto imprime en pantalla lo que envia el objeto request, lo que seria la informacion completada en el formulario para ser guardada en la base de datos)
      $especialidades = new Especialidades();
      $especialidades->nombre =$request->input('nombre');
      $especialidades->descripcion =$request->input('descripcion');
      $especialidades->save(); //esto hace un insert en la base de datos 

      $nespecialidad = $especialidades->nombre;
      $notificacion = 'Especialidad "'. $nespecialidad. '" registrada con exito.';
      return redirect('Especialidad')->with(compact('notificacion'));

    }

    public function edit(Especialidades $especialidades)
    {
        return view('Especialidad.edit', compact('especialidades'));
    }

    public function update(Request $request, Especialidades $especialidades)
    {
        $rules = [
            'nombre' => 'required|min:3'
        ];
        $this->validate($request, $rules);

      $especialidades->nombre = $request->input('nombre');
      $especialidades->descripcion = $request->input('descripcion');
      $especialidades->save(); //esto hace un update en la base de datos

      $nespecialidad = $especialidades->nombre;
      $notificacion = 'Especialidad " '. $nespecialidad. ' " ha sido actualizada exitosamente.';
      return redirect('Especialidad')->with(compact('notificacion'));

    }

    public function destroy(Especialidades $especialidades)
    {
        $especialidades->delete();

        $nespecialidad = $especialidades->nombre;
      $notificacion = 'Especialidad " '. $nespecialidad. ' " ha sido eliminada.';
        return redirect('Especialidad')->with(compact('notificacion'));
    }
}
