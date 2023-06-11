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
        $validated = $request->validate([
            'descripcion' => 'required|string|max:255',
        ]);
 
        //We're creating a record that will belong to the logged in user by leveraging a chirps relationship in app/Models/User.php
        $request->user()->reports()->create($validated);
 
        return redirect(route('reportes.index'));
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
