<?php

namespace App\Controllers\Aboutus;

use App\Controllers\Base\BaseController;
use Config\Services;

class Aboutus extends BaseController
{
  public function index()
  {
    return view("aboutus/index");
  }
}
