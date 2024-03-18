<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use Illuminate\Support\Str;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categorias = Categorias::orderBy('id', 'desc')->get();
        return response()->json($Categorias,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $json = json_decode(file_get_contents('php://input'), true);
        if (!is_array($json)) {
            $array = 

                array
                (
                    'response'=>array(
                    'status' => 'Bad Request',
                    'msj' => 'La Petición HTTP No Trae Datos para Procesar.'
                )
            );

            return response()->json($array, 400);
        }

        $categorias = new Categorias();
        $categorias->categoria = $request->categoria;
        $categorias->slug = Str::slug($request->slug);
        $categorias->save();
        $array = array(
                "data" => $categorias,
                "msj" => "La Categoría se Creo Exitosamente.",
                "status" => 201
        );

        return response()->json($array,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorias = Categorias::where(['id' => $id])->first();
        if (is_null($categorias)) {
            return response()->json(["msj" => "El Id No Existe de la Categoria."], 404);
        }else{
            return response()->json($categorias,200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categorias = Categorias::find($id);

        if (is_null($categorias)) {
            return response()->json(["msj" => "La Categoria no se encontró."], 404);
        }else{
            $categorias->categoria = $request->categoria;
            $categorias->slug = Str::slug($request->slug);
            $categorias->save();
            return response()->json($categorias,200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categorias::where(['id' => $id]);
        if (is_null($categoria)) {
            return response()->json(["msj" => "La Categoria no se encontró."], 404);
        }else{
            $categoria->delete();
            return response()->json(["msj" => "La Categoria se Borro Exitosamente."],200);
        }
    }
}
