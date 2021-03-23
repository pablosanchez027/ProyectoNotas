<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;


class NotasController extends Controller
{
    public function index() {
        $notas = Notas::all(); //DB::table('notas')->get();
    
        return view('notas', ['notas' => $notas]);
    }

    public function store(Request $request){

        Notas::create([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
        ]);

        return redirect('/notas');
    }

    public function edit($id){
        $notas = Notas::find($id);

        return view('editar', ['notas' => $notas]);

    }

    public function update(Notas $notas, Request $request){

        $notas->update([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
        ]);

        return redirect('/notas');
    }
}
