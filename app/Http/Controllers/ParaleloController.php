<?php

namespace App\Http\Controllers;

use App\Models\Paralelo;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="Documentacion de Práctica Estudiante-Paralelo",
 *     description="API documentation for Practica2"
 * )
 */
class ParaleloController extends Controller
{
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
     * @OA\Post(
     *     path="/api/paralelos",
     *     summary="Create a new paralelo",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="nombre", type="string"),
     *             @OA\Property(property="seccion", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Paralelo created successfully"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'seccion' => 'required|string',
        ]);

        $paralelo = Paralelo::create($request->all());

        return response()->json($paralelo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paralelo $paralelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paralelo $paralelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paralelo $paralelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paralelo $paralelo)
    {
        //
    }
}

// Environment variables
putenv('L5_SWAGGER_GENERATE_ALWAYS=true');
putenv('L5_SWAGGER_CONST_HOST=http://127.0.0.1:8000/api');
