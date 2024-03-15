<?php

namespace App\Http\Controllers\Api\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Routing extends Controller
{
    //
    public function index($input=null,$arg=null) {
        return [
            'input' => $input ?? null,
            'arg' => $arg ?? null
        ];
    }
}
