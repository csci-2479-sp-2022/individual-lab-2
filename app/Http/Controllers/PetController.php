<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    
    public static function show()
    {
        // controller actions typically return a view and a model
        return view(
            'pets', // name of the view, i.e. views/game-list.blade.php
            [
                //the keys define variables in the template, i.e. $games
                'pets' => self::getPets(),
            ]);
    }

    private static function getPets(): array {        
        return [
            Pet::make(['name' => 'Salem', 'age' => 8, 'type' => 'Lab']),
            Pet::make(['name' => 'Tom', 'age' => 3, 'type' => 'Hound']),
            Pet::make(['name' => 'Sparky', 'age' => 2, 'type' => 'Doodle'])
        ];
    }
}