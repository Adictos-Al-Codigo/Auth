<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Str;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::orderBy('id','desc')->get();
        return response()->json($productos,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Productos();
        $producto->nombre = $request->nombre;
        $producto->slug = Str::slug($request->slug);
        $producto->descripcion = $request->descripcion;
        $producto->fecha = date('Y-m-d H:i:s');
        $producto->precio = $request->precio;
        $producto->idCategorias = $request->idCategorias;
        $producto->save();
        return response()->json($producto,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Productos::where(['id' => $id])->first();
        if (is_null($producto)) {
            return response()->json("El Producto no se Encontró.", 404);
        }else{
            return response()->json($producto, 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Productos::find($id);

        if (is_null($producto)) {
            return response()->json(["msj" => "El Producto no se encontró."], 404);
        }else{
            $producto->nombre = $request->nombre;
            $producto->slug = Str::slug($request->slug);
            $producto->nombre = $request->nombre;
            $producto->descripcion = $request->descripcion;
            $producto->precio = $request->precio;
            $producto->stock = $request->stock;
            $producto->idCategorias = $request->idCategorias;
            $producto->save();
            return response()->json($producto,200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Productos::where(['id' => $id]);
        if (is_null($producto)) {
            return response()->json(["msj" => "El Producto no se encontró."], 404);
        }else{
            $producto->delete();
            return response()->json(["msj" => "El Producto se Borro Exitosamente."],200);
        }
    }
}
