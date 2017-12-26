<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DeveloperController extends Controller
{
    public function index()
    {
        return view('desenvolvimento.index');
    }
}
