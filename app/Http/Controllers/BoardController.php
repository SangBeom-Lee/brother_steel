<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\base\FrontController;

class BoardController extends FrontController
{
    public function __construct()
    {        
        parent::__construct(); 
    }

    public function index(Request $request, $boardid)
    {
        $param                                  = $request->input();
        $param['sub']                           = "Y";

        return view('board.index', array(
          'param'                               => $param
        ));
    }

    public function regist(Request $request)
    {
        $param                                  = $request->input();
        $param['sub']                           = "Y";

        return view('board.regist', array(
          'param'                               => $param
        ));
    }
}