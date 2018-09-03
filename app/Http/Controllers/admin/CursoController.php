<?php

namespace App\Http\Controllers\admin;

use App\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CursoController extends Controller
{
    public function index(){

        $registros = Curso::all();
        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.cursos.adicionar');
    }

}
