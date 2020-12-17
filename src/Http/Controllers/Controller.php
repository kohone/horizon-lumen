<?php

namespace Laravel\Horizon\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Laravel\Horizon\Http\Middleware\Authenticate;

class Controller extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // опираемся только на config('middleware')
        //$this->middleware(Authenticate::class);
    }
}
