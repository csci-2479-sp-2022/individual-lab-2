<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function show(){
    
        return view(
            'pets',
            [
                'pets'=> self::getPets(),
            ]
        );
    }


public static function getPets() {
    return
        [
            Pet::make(['name' => 'Tiger', 'age' => 12, 'type' => 'dog']),
            Pet::make(['name' => 'Frank', 'age' => 3, 'type' => 'cat']),
            Pet::make(['name' => 'Nanuq', 'age' => 3, 'type' => 'dog']),
            Pet::make(['name' => 'Pete', 'age' => 2, 'type' => 'cat'])
        ];
    }
}