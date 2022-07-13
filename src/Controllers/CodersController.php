<?php

namespace App\Controllers;


use App\Core\View;
use App\Models\Coders;


class CodersController{

    public function __construct(){
        $this->index();
    }
    
    public function index(){
        $coder = new Coders;

        $coders = $coder->all();
        new View("coderList", ["coder" => $coders]);
    }
}