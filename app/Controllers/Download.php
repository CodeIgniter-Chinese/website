<?php

namespace App\Controllers;

class Download extends BaseController
{
    public function index()
    {
        echo $this->render('download');
    }
}
