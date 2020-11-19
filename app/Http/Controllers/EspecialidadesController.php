<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especialidades;

class EspecialidadesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

      return redirect('Especialidad');

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

      return redirect('Especialidad');

    }

    public function destroy(Especialidades $especialidades)
    {
        $especialidades->delete();
        return redirect('Especialidad');
    }
}
