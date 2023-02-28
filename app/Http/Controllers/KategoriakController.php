<?php

namespace App\Http\Controllers;

use App\Models\Kategoriak;
use Illuminate\Http\Request;

class KategoriakController extends Controller
{
    public function index() {
        $task = response()->json(Kategoriak::all());
        return $task;
    }

    public function show($id) {
        $task = response()->json(Kategoriak::find($id));
        return $task;
    }

    public function del($id) { // 3
        Kategoriak::find($id)->delete();
    }
}
