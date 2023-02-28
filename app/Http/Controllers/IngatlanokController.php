<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Ingatlanok;
use DB;

class IngatlanokController extends Controller
{

    public function index() {
        $task = response()->json(Ingatlanok::all());
        return $task;
    }

    public function show($id) {
        $task = response()->json(Ingatlanok::find($id));
        return $task;
    }


    public function all() { // 1
        $messages =
        DB::table('ingatlanoks')
        ->select('*','kategoriak.nev')
        ->join('kategoriak')->on('ingatlanok.id','=','kategoriak.id')
        ->get();
        return $messages;
    }

    public function new(Request $request) { // 2
        $task = new Ingatlanok();
        $task->kategoria = $request->kategoria;
        $task->leiras = $request->leiras;
        $task->hirdetesDatuma = $request->hirdetesDatuma;
        $task->tehermentes = $request->tehermentes;
        $task->ar = $task->ar;
        $task->kepUrl = $task->kepUrl;
        $task->save();
    }

    public function del($id) { // 3
        Ingatlanok::find($id)->delete();
    }
}
