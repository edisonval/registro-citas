<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class PacientesController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = User::where('tipo', 'paciente')->paginate(10);
        return view('Paciente.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'cedula' => 'required|max:10',
            'telefono' => 'required|max:14',
            'email' => 'required'
        ];
        $this->validate($request, $rules);

      //  dd($request->all()); (esto imprime en pantalla lo que envia el objeto request, lo que seria la informacion completada en el formulario para ser guardada en la base de datos)
      $paciente = new User();
      $paciente->name =$request->input('name');
      $paciente->cedula =$request->input('cedula');
      $paciente->direccion =$request->input('direccion');
      $paciente->telefono =$request->input('telefono');
      $paciente->email =$request->input('email');
      $paciente->password = bcrypt($request->input('password'));
      $paciente->tipo = 'paciente';

      $paciente->save(); //esto hace un insert en la base de datos 

     $npaciente = $paciente->name;
     $notificacion = 'El paciente "'. $npaciente. '" añadido(a) con exito.';
      return redirect('Paciente')->with(compact('notificacion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = User::findOrFail($id);
        return view('Paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $paciente = User::findOrFail($id);
      $datos = $request->only('name', 'cedula', 'telefono', 'direccion', 'email');
      $password = $request->input('password');
      if ($password)
        $datos['password']=bcrypt($password);



      $paciente->fill($datos);
      $paciente->save(); //esto hace un update en la base de datos 

     $npaciente = $paciente->name;
     $notificacion = 'paciente "'. $npaciente. '" editado con exito.';
      return redirect('Paciente')->with(compact('notificacion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = User::findOrFail($id);
        $npaciente = $paciente->name;
        $paciente->delete();
        $notificacion = 'Paciente"'. $npaciente. '" ha sido eliminado con exito.';
      return redirect('Paciente')->with(compact('notificacion'));
    }
    
}
