<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        //
        
        return view('reports.index', [
            'reports' => Reports::with('user')->latest()->get(),
        ]);
        
        //return view('reports.index');
    }

    public function mostrarTodos() : View
    {
        //
        
        return view('reports.all', [
            'reports' => Reports::with('user')->latest()->get(),
        ]);
        
        //return view('reports.index');
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
    public function store(Request $request) : RedirectResponse
    {
        //
        /*
        $validated = $request->validate([
            'descripcion' => 'required|string|max:255',
        ]);
        

        
 
        //We're creating a record that will belong to the logged in user by leveraging a chirps relationship in app/Models/User.php
        $request->user()->reports()->create($validated);
        */


        /*
        $reporte_diario = $request;
        $reporte_diario_data = [];
        foreach ($reporte_diario as $key => $value) {
            $reporte_diario_data[] = $value;
        }
        */
        $data = $request->all();

        //$importancia_1 = ($request->has('importancia_1')) ? "Media" : "Baja";

        $request->user()->reports()->createMany([
            ['fecha' => $data['fecha'], 'turno' => $data['turno'], 'jefe_turno' => $data['jefe_turno'], 'codigo_equipo' => $data['codigo_1'], 'descripcion' => $data['descripcion_1'], 'tiempo' => $data['tiempo_1'], 'importancia' => $importancia = ($request->has('importancia_1')) ? "Media" : "Baja" ],
            ['fecha' => $data['fecha'], 'turno' => $data['turno'], 'jefe_turno' => $data['jefe_turno'], 'codigo_equipo' => $data['codigo_2'], 'descripcion' => $data['descripcion_2'], 'tiempo' => $data['tiempo_2'], 'importancia' => $importancia = ($request->has('importancia_2')) ? "Media" : "Baja" ],
            ['fecha' => $data['fecha'], 'turno' => $data['turno'], 'jefe_turno' => $data['jefe_turno'], 'codigo_equipo' => $data['codigo_3'], 'descripcion' => $data['descripcion_3'], 'tiempo' => $data['tiempo_3'], 'importancia' => $importancia = ($request->has('importancia_3')) ? "Media" : "Baja" ],
            ['fecha' => $data['fecha'], 'turno' => $data['turno'], 'jefe_turno' => $data['jefe_turno'], 'codigo_equipo' => $data['codigo_4'], 'descripcion' => $data['descripcion_4'], 'tiempo' => $data['tiempo_4'], 'importancia' => $importancia = ($request->has('importancia_4')) ? "Media" : "Baja" ],
            ['fecha' => $data['fecha'], 'turno' => $data['turno'], 'jefe_turno' => $data['jefe_turno'], 'codigo_equipo' => $data['codigo_5'], 'descripcion' => $data['descripcion_5'], 'tiempo' => $data['tiempo_5'], 'importancia' => $importancia = ($request->has('importancia_5')) ? "Media" : "Baja" ],
            ['fecha' => $data['fecha'], 'turno' => $data['turno'], 'jefe_turno' => $data['jefe_turno'], 'codigo_equipo' => $data['codigo_6'], 'descripcion' => $data['descripcion_6'], 'tiempo' => $data['tiempo_6'], 'importancia' => $importancia = ($request->has('importancia_6')) ? "Media" : "Baja" ],
        ]);

        return redirect(route('nuevo-reporte.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reports $reports)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reports $reports)
    {
        //
    }
}
