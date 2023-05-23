<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\base\FrontController;

class ContactController extends FrontController
{
    public function __construct()
    {        
        parent::__construct(); 
    }

    public function regist(Request $request)
    {
        $param                                  = $request->input();
        $param['sub']                           = "Y";

        return view('contact.regist', array(
          'param'                               => $param
        ));
    }
}