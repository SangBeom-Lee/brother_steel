<?php

declare(strict_types=1);

namespace App\Http\Controllers\base;

use App\Http\Controllers\base\BaseController;
use Illuminate\Support\Facades\Blade;

class FrontController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_header()
    {
        return Blade::render(
            'Hello, {{ $name }}',
            ['name' => 'Julian Bashir'],
            deleteCachedView: true
        );
    }

    public function get_footer()
    {

    }
}