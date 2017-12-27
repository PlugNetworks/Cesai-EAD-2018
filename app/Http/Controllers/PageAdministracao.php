<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
Use App\CategoriaModel;
Use App\Pageadminist;
Use App\CursoInfo;
use App\Http\Requests;

class PageAdministracao extends Controller
{
    public function index()
    {
        $CategoriaModels        = CategoriaModel::orderBy('id')->get();
        $pageadminists            = pageadminist::orderBy('id')->get();
        $CursoInfos              = CursoInfo::orderBy('id')->get();

        return view('categorias.administracao', [

        ], compact('CategoriaModels', 'pageadminists', 'CursoInfos'));
    }

    public function detalhes($id)
    {
        $CategoriaModels        = CategoriaModel::orderBy('id')->get();

        $pageadminists  = Pageadminist::find($id);

        return view('categorias.detalhes', [
            'pageadminists' => $pageadminists,
        ], compact('CategoriaModels'));
    }
}
