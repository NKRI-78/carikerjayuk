<?php

namespace App\Controllers;

use App\Controllers\Base\BaseController;

class TermAndCondition extends BaseController
{
    public function index()
    {
        return view('termandcondition/index');
    }
}
