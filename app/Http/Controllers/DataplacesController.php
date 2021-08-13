<?php

namespace App\Http\Controllers;

use App\Models\Dataplaces;
use Illuminate\Http\Request;

class DataplacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\Get(
     *     path="/api/dataplaces",
     *     summary="Mostrar informacion por lugares",
     *     tags={"DataByPlaces"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal server error"
     *     ),
     *     @OA\Response(
     *         response=406,
     *         description="Not acceptable"
     *     )
     * )
     */
    public function index()
    {
        //
        return response()->json(Dataplaces::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataplaces  $dataplaces
     * @return \Illuminate\Http\Response
     */
    public function show(Dataplaces $dataplaces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataplaces  $dataplaces
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataplaces $dataplaces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataplaces  $dataplaces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataplaces $dataplaces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataplaces  $dataplaces
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataplaces $dataplaces)
    {
        //
    }
}
