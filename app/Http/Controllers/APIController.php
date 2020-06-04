<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;


class APIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return (new Response(['result'=> 'ok'], 200))->header('Content-Type', 'application/json');
    }
}
