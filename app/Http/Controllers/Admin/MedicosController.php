<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = User::where('tipo', 'medico')->get();
        return view('Medico.index', compact('medico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Medico.create');
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
      $medico = new User();
      $medico->name =$request->input('name');
      $medico->cedula =$request->input('cedula');
      $medico->direccion =$request->input('direccion');
      $medico->telefono =$request->input('telefono');
      $medico->email =$request->input('email');
      $medico->password = bcrypt($request->input('password'));
      $medico->tipo = 'medico';

      $medico->save(); //esto hace un insert en la base de datos 

     $nmedico = $medico->name;
     $notificacion = 'Medico "'. $nmedico. '" añadido(a) con exito.';
      return redirect('Medico')->with(compact('notificacion'));
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
        $medicos = User::findOrFail($id);
       return view('Medico.edit', compact('medicos'));
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
        $rules = [
            'name' => 'required|min:3',
            'cedula' => 'required|max:10',
            'telefono' => 'required|max:14',
            'email' => 'required'
        ];
        $this->validate($request, $rules);

       $medico = User::findOrFail($id);

    //  dd($request->all()); (esto imprime en pantalla lo que envia el objeto request, lo que seria la informacion completada en el formulario para ser guardada en la base de datos)
     // $medico = new User();
     /* $medico->name =$request->input('name');
      $medico->cedula =$request->input('cedula');
      $medico->direccion =$request->input('direccion');
      $medico->telefono =$request->input('telefono');
      $medico->email =$request->input('email');
      $medico->password = bcrypt($request->input('password'));
      $medico->tipo = 'medico';*/
      $datos = $request->only('name', 'cedula', 'telefono', 'direccion', 'email');
      $password = $request->input('password');
      if ($password)
        $datos['password']=bcrypt($password);



      $medico->fill($datos);
      $medico->save(); //esto hace un update en la base de datos 

     $nmedico = $medico->name;
     $notificacion = 'Medico "'. $nmedico. '" editado con exito.';
      return redirect('Medico')->with(compact('notificacion'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = User::findOrFail($id);
        $nmedico = $medico->name;
        $medico->delete();
        $notificacion = 'Medico "'. $nmedico. '" ha sido eliminado con exito.';
      return redirect('Medico')->with(compact('notificacion'));

    }
}
