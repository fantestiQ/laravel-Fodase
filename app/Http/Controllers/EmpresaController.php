<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    function empresa()
    {
        return view('site.Empresa');
    }
}
