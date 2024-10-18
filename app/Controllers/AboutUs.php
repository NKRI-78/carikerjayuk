<?php

namespace App\Controllers;

use App\Controllers\Base\BaseController;

class AboutUs extends BaseController
{
    public function index(): string
    {
        return view('aboutus/index');
    }
}
