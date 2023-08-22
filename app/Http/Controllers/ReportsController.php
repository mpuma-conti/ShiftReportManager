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
        
        /*
        return view('reports.index', [
            'reports' => Reports::with('user')->latest()->get(),
        ]);
        */
        return view('reports.index');
    }

    public function newReporteMaquinaria() : View
    {
        return view('reports.newMaquinaria');
    }

    public function mostrarTodos() : View
    {
        //
        
        return view('reports.all', [
            'reports' => Reports::with('user')->latest()->get(),
        ]);
    }

    public function mostrarReportesElectricos() : View
    {
        $reports = Reports::whereHas('user', function ($query) {
            $query->where('area', 'Eléctrico');
        })->latest()->get();
    
        return view('reports.electricos', [
            'reports' => $reports,
        ]);
    }

    public function mostrarReportesMecanicos() : View
    {
        $reports = Reports::whereHas('user', function ($query) {
            $query->where('area', 'Mecánico');
        })->latest()->get();
    
        return view('reports.mecanicos', [
            'reports' => $reports,
        ]);
    }

    public function mostrarReportesMaquinarias() : View
    {
        //electricos y mecanicos podrian hacer trabajos en la maquinaria
        $reports = Reports::whereIn('categoria', ['Mantto. Preventivo', 'Mantto. Correctivo', 'Emergencia'])
        ->latest()
        ->get();
    
        return view('reports.maquinarias', [
            'reports' => $reports,
        ]);
    }

    public function mostrarReportesImportantes() : View
    {
        $reports = Reports::where('importancia', 'Alta')
                      ->orWhere('importancia', 'Urgente')
                      ->latest()
                      ->get();

        return view('reports.importantes', [
            'reports' => $reports,
        ]);
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
                //$importancia = $this->getImportanciaByCategoria($data[$categoriaKey]);
    
                $reporte = [
                    'fecha' => $data['fecha'],
                    'turno' => $data['turno'],
                    'jefe_turno' => $data['jefe_turno'],
                    'categoria' => $data[$categoriaKey],
                    'codigo_equipo' => $data['codigo_' . $i],
                    'descripcion' => $data[$descripcionKey],
                    'tiempo' => $data['tiempo_' . $i],
                    //'importancia' => $importancia,
                    'importancia' => $data['importancia_' . $i],
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

    public function storeMaquinaria(Request $request) : RedirectResponse
    {
       
        $data = $request->all();

        $reportes = [];

        for ($i = 1; $i <= 6; $i++) {
            $descripcionKey = 'descripcion_' . $i;
            $categoriaKey = 'categoria_' . $i;
    
            if (isset($data[$descripcionKey]) && !empty($data[$descripcionKey])) {
                    
                $reporte = [
                    'fecha' => $data['fecha'],
                    'turno' => $data['turno'],
                    'jefe_turno' => $data['jefe_turno'],
                    'categoria' => $data[$categoriaKey],
                    'codigo_equipo' => $data['codigo_' . $i],
                    'descripcion' => $data[$descripcionKey],
                    'tiempo' => $data['tiempo_' . $i],
                    'importancia' => $data['importancia_' . $i],
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

        return redirect(route('reportes.newReporteMaquinaria'));
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

    //public function edit(Reports $reports) : View //esta era la funcion prefabricada
    public function edit($report_) : View
    {
        //$this->authorize('update', $reports);
        $report = Reports::findOrFail($report_); // Suponiendo que tienes un modelo llamado "Report" que representa los reportes
        return view('reports.edit', compact('report')); //debe tener el mismo nombre de la variable de la linea anterior
        
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, Reports $reports) : RedirectResponse
    public function update(Request $request, $report_) : RedirectResponse
    {
        //
        //$this->authorize('update', $reports); 
        /*
        $validated = $request->validate([
            'descripcion' => 'required|string|max:255',
        ]);
        */

        // Encuentra el reporte que quieres actualizar
        $report = Reports::findOrFail($report_);

        // Actualiza los campos del reporte con los datos del formulario
        $report->update([
            'fecha' => $request->input('fecha'),
            'turno' => $request->input('turno'),
            'jefe_turno' => $request->input('jefe_turno'),
            'categoria' => $request->input('categoria'),
            'codigo_equipo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'tiempo' => $request->input('tiempo'),
            'importancia' => $request->input('importancia'),
        ]);

        // Redirige nuevamente a la página de edición con el mensaje de éxito
        return back()->with('success', 'Reporte actualizado correctamente.');
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
