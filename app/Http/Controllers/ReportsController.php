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
        $reporte_diario = $request;
        $reporte_diario_data = [];
        foreach ($reporte_diario as $key => $value) {
            $reporte_diario_data[] = $value;
        }
        */
        //condicional usado previamente para determinar la importancia del reporte
        //$importancia_1 = ($request->has('importancia_1')) ? "Media" : "Baja";
        
        $data = $request->all();

        $reportes = [];

        for ($i = 1; $i <= 6; $i++) {
            $descripcionKey = 'descripcion_' . $i;
            $categoriaKey = 'categoria_' . $i;
    
            if (isset($data[$descripcionKey]) && !empty($data[$descripcionKey])) {
                $importancia = $this->getImportanciaByCategoria($data[$categoriaKey]);
    
                $reporte = [
                    'fecha' => $data['fecha'],
                    'turno' => $data['turno'],
                    'jefe_turno' => $data['jefe_turno'],
                    'categoria' => $data[$categoriaKey],
                    'codigo_equipo' => $data['codigo_' . $i],
                    'descripcion' => $data[$descripcionKey],
                    'tiempo' => $data['tiempo_' . $i],
                    'importancia' => $importancia,
                ];
    
                $reportes[] = $reporte;
            }
        }
    
        if (!empty($reportes)) {
            $request->user()->reports()->createMany($reportes);
        }

        // Mensaje de confirmacion
        // en la documentacion el ejemplo es $request->session()->flash('status', 'Task was successful!') pero muestra mensaje de error en el editor de codigo
        session()->flash('success', 'El reporte se ha enviado correctamente 👍');

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
    public function edit(Reports $reports) : View
    {
        //
        //$this->authorize('update', $reports);
 
        return view('reports.edit', [
            'report' => $reports,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reports $reports) : RedirectResponse
    {
        //
        //$this->authorize('update', $reports);
 
        $validated = $request->validate([
            'descripcion' => 'required|string|max:255',
        ]);
 
        $reports->update($validated);
 
        return redirect(route('reports.all'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reports $reports)
    {
        //
    }

    private function getImportanciaByCategoria($categoria)
    {
        $importancia = 'Baja';

        switch ($categoria) {
            case 'Mantto. de equipo':
            case 'Cambio de equipo':
            case 'OT programada':
                $importancia = 'Baja';
                break;
            case 'Modificación de equipo':
            case 'Emergencia planta':
                $importancia = 'Media';
                break;
            case 'Otros':
                $importancia = 'Baja';
                break;
            // Puedes agregar más casos si es necesario
        }

        return $importancia;
    }
}
