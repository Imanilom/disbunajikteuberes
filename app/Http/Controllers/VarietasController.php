<?php

namespace App\Http\Controllers;

use App\Models\Varietas;

class VarietasController extends Controller
{
    public function show($id)
    {
        $varietas = Varietas::with(['posts'])->findOrFail($id);
        return view('varietas.show', compact('varietas'));
    }
}
