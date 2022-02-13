<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller  {
    public function show(){
        return view (
            'pets',
            [
                'pets' => self::getPet(),
            ]);
            return null;

    }

    public static function getPet() {
        return [
            Pet::make(['name' => 'Salem', 'age' => 8, 'type' => 'dog']),
            Pet::make(['name' => 'Magic', 'age' => 11, 'type' => 'dog']),
            Pet::make(['name' => 'Garfield', 'age' => 40, 'type' => 'cat'])
        ];
    }


}
