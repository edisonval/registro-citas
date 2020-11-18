<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    public function index()
    {
        return view ('Especialidad.index');
    }
}
