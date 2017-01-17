<?php namespace Project\Http\Controllers\Users;

use Project\Http\Controllers\Controller;

class PruebaController extends Controller {

       /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function index()
    {
        return "probando desde dentro de carpeta";
    }

    public function showProfile($id)
    {
    	return $id;
        
    }

}