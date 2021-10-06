<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    { 

    }

    /**
     * prueba.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inicio($id,$nombre)
    {  
        return "Hola Mundo  $id $nombre";
    }

    /**
     * prueba.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inicio2($id,$nombre)
    {  
        return "Hola Mundo  $id $nombre";
    }

}
