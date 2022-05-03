<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresasController extends Controller
{
    //
    public function index()
    {
        $empresas = Empresa::get();
        return view('empresa.index', compact('empresas'));
    }
    function show()
    {
        return Empresa::all();
        return view('empresas', ['empresas' =>  $data]);
    }
}
