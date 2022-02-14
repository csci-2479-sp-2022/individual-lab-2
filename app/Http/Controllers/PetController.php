<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller {

    // create action method to return pets view
    public function show(){
        return view (
            'pets',
            [
                'pets' => self::getPet(),
            ]);
            return null;
    }

    // method to return an array of pets
    public static function getPet() {
        return [
            Pet::make(['name' => 'Nemo', 'age' => 5, 'type' => 'fish']),
            Pet::make(['name' => 'Lucy', 'age' => 7, 'type' => 'tiger']),
            Pet::make(['name' => 'Wallace', 'age' => 8, 'type' => 'rabbit'])
        ];
    }
}
