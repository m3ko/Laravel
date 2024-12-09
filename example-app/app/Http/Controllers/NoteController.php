<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;


class NoteController extends Controller
{
    //
    public function index(){
        
        $notas = Note::all();
        return view('note.index', compact('notas'));
    }

    public function create(): View{

        return view('note.create');
    }

    public function store(Request $request): RedirectResponse{

        Note::create($request->all());
        return redirect()->route('note.index');

        $nota = new Note;
        $nota->title = $request->title;


    }

    public function edit(Note $note){

        return view();
    }
}
