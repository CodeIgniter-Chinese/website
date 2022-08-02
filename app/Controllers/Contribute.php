<?php

namespace App\Controllers;

class Contribute extends BaseController
{
    public function index()
    {
        echo $this->render('contribute');
    }
}
