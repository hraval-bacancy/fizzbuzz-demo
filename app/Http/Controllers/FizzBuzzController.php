<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ResponseManager;

class FizzBuzzController extends Controller
{
    public function generatePattern()
    {
        try {
            $data = array();
            for($i=1; $i<=100; $i++){
                $displayValue = "";
                if($i%15 == 0 ? $displayValue = "FizzBuzz" : ($i%5 == 0 ? $displayValue = "Buzz" : ($i%3 == 0 ? $displayValue = "Fizz" : $displayValue = $i)) ){
                    array_push($data,$displayValue);
                }
            }
            return Response()->json(ResponseManager::getResult($data,'Successfully created'));
        } catch(\Exception $e) {
            return Response()->json(ResponseManager::getError($data,'Something went wrong'));
        }
    }
}
