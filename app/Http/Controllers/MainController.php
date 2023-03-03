<?php

declare(strict_types=1);

namespace App\Http\Controllers;

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
    public function index()
    {
        return view('main.index');
    }
}