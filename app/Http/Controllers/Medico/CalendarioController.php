<?php

namespace App\Http\Controllers\Medico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\DiaTrabajo;

class CalendarioController extends Controller
{
    public function edit()
    {
        return view('calendario');
    }

    public function store(Request $request)
    {
       // dd($request->all());
       $activo = $request->input('activo') ?:[];
       $mañana = $request->input('mañana');
       $mañanafin = $request->input('mañanafin');
       $tarde = $request->input('tarde');
       $tardefin = $request->input('tardefin');

       for ($i=0; $i<7; ++$i)
       DiaTrabajo::updateOrCreate(
           [
               'dia' =>$i,
               'user_id' => auth()->id()
           ],

           [
               'activo' =>in_array($i, $activo),

               'mañana' => $mañana[$i],
               'mañanafin' =>$mañanafin[$i],

               'tarde' => $tarde[$i],
               'tardefin' => $tardefin[$i]
           ]
           );

           return back();
    }
}
