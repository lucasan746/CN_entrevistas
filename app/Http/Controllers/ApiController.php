<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function queryApi(){
        var_dump($_POST);exit;
    }
}
