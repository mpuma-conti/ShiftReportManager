<?php

namespace App\Http\Controllers;

use App\Models\Codigo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CodigoController extends Controller
{
    public function buscarCodigos(Request $request)
    {
        $q = $request->input('q');

        // Realiza la búsqueda en tu base de datos o fuente de datos para obtener los valores sugeridos
        // Por ejemplo, puedes usar Eloquent para buscar los códigos en tu base de datos
        $codigos = DB::table('import_equipos')->where('codigo', 'like', "%$q%")->pluck('codigo');

        return response()->json($codigos);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Codigo $codigo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Codigo $codigo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Codigo $codigo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Codigo $codigo)
    {
        //
    }
}
