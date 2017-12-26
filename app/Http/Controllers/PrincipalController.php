<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
Use App\CategoriaModel;
Use App\CursoInfo;
use App\Http\Requests;

class PrincipalController extends Controller
{
    public function index()
    {
        $CategoriaModels        = CategoriaModel::orderBy('id')->get();
        $CursoInfos              = CursoInfo::orderBy('id')->get();

        return view('principal.index', [

        ], compact('CategoriaModels', 'CursoInfos'));
    }
}
