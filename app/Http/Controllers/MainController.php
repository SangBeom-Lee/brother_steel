<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\base\FrontController;

class MainController extends FrontController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    * Main Page
    */
    public function index(Request $request)
    {
        $param                                  = $request->input();
        $param['sub']                           = "N";

        return view('main.index', array(
            'param'                             => $param
        ));
    }
}