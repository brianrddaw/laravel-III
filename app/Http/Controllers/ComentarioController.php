<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentariosController extends Controller
{
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentarios.index', compact('comentarios'));
    }
}
