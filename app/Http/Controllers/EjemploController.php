<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo 'Hola Mundo';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "$request->nombre - ".$request->edad ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'Metodo Show con Parámetro'.$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo 'Metodo Update con Parametro ';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 'Metodo Eliminar con Parametro';
    }
}
