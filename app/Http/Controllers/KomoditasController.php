<?php

namespace App\Http\Controllers;

use App\Models\Komoditas;
use Illuminate\Http\Request;

class KomoditasController extends Controller
{
    /**
     * Menampilkan semua data komoditas beserta relasi secara hirarkis.
     */
    public function index()
    {
        $komoditas = Komoditas::with(['items.varietas.posts'])->get();
        return view('komoditas', compact('komoditas'));
    }

    public function show($id)
    {
        $komoditi = Komoditas::with(['items.varietas.posts'])->findOrFail($id);
        return view('komoditas.show', compact('komoditi'));
    }
    

    
}
