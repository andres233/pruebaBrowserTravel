<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *    title="Documentacion API - Prueba Tecnica - BrowserTravel", 
     *    version="1.0" , 
     *    description="Documentacion elaborada con swagger para prueba tecnica browser travel(by Andres Felipe Cuevas Quiroga)", 
     *    @OA\Contact(
     *       email="andres-felipe32@hotmail.com"
     *    )
     * )
     * 
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
