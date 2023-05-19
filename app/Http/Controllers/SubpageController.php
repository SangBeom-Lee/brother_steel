<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\base\FrontController;

class SubpageController extends FrontController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    * 서브페이지 분기
    */
    public function index(Request $request, $pageName)
    {
        $param                                  = $request->input();
        $param['sub']                           = "Y";

        $data                                   = $this->$pageName();

        return view('page.greeting', array(
          'param'                               => $param,
          'data'                                => $data
        ));
    }

    /*
    * 인사말
    */
    public function greeting()
    {
        $data                                   = array();

        return $data;
    }
}