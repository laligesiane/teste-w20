<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaboradores;

class ColaboradoresController extends Controller
{
    //
    function show()
    {
        return Colaboradores::all();
       return view('colaboradores', ['colaboradores' =>  $data]);
    }


    protected $table = "colaboradores";
    protected $fillable = ['nome','email','telefone','data_nascimento'];
    protected $primaryKey = 'id';
    public $timestamps = false;
    
}
