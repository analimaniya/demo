<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index(){
        $array = [
            [ 
                
                'name' => 'php',
                'framework' => 'laravel'
            ],
            [
                'name'=> 'javaScript',
                'framework' => 'express.js'     
            ]
        ];

        return response()->json([
            'status' =>true ,
            'message' => '2 record find it.',
            'data'=> $array
        ],200);
    }
}
