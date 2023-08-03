<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

use Illuminate\View\View;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('motores.index', [
            'motores' => Motor::all(),
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Motor $motor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motor $motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Motor $motor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motor $motor)
    {
        //
    }
}
