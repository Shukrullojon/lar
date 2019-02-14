<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        echo "Test Controller test function";
    }
    public function post(){
        echo "Post controller";
    }
}
