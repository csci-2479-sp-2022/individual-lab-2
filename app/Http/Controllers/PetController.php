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
                'pets' => self::getPets(),
            ]
        );
    }
    
    public static function getPets(){
        return [
            Pet::make(['name' => 'Greta', 'age' => 15, 'type' => 'dog']),
            Pet::make(['name' => 'Mittens', 'age' => 8, 'type' => 'cat']),
            Pet::make(['name' => 'Tweety', 'age' => 73, 'type' => 'canary']),
            Pet::make(['name' => 'Jerry', 'age' => 75, 'type' => 'mouse']),
        ];
    }
}
