<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ViewArtigosController extends Controller
{
    public function index(Request $request)
    {
        return view('artigos_usuario');
        // dd(Auth::user()->name);
    }
}
