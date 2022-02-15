<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function show()
    {
        return view(
            'pets', 
            [
                'pets' => self::getPets(),
            ]);
    }

    private static function getPets(): array
    {
        return [
            Pet::make(['name' => 'Brooski', 'age' => 7, 'type' => 'dog']),
            Pet::make(['name' => 'Penny', 'age' => 3, 'type' => 'dog']),
            Pet::make(['name' => 'Chewy', 'age' => 10, 'type' => 'dog'])
        ];
    }
}
