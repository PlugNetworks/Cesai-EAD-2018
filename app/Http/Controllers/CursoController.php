<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
Use App\CategoriaModel;
Use App\CursoInfo;
use App\Http\Requests;

class CursoController extends Controller
{
    public function index()
    {
        $CategoriaModels        = CategoriaModel::orderBy('id')->get();
        $CursoInfos              = CursoInfo::orderBy('id')->get();

        return view('cursos.index', [

        ], compact('CategoriaModels', 'CursoInfos'));
    }
}
