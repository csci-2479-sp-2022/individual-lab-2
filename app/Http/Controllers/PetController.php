<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function show(){
        return view ('pets',['pets' => self::getPet(),]);
    }
    public static function getpet(){
        return [
            Pet::make(['name' => 'fizz', 'age' => 14, 'type' => 'fizz']),
            Pet::make(['name' => 'nasus', 'age' => 3, 'type' => 'dog']),
            Pet::make(['name' => 'azir', 'age' => 66, 'type' => 'bird']),
            Pet::make(['name' => 'corki', 'age' => 24, 'type' => 'yordel']),
            
            
        ];
    }
}
