<?php

namespace App\Controllers;

use App\Controllers\Base\BaseController;

class HowToUse extends BaseController
{
    public function index()
    {
        return view('howtouse/index');
    }
}
