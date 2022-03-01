<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function show()
    {
        return view('pet-list',
         [ 'pets' => self::getPets() ]);
    }

    private static function getPets(): array
    {
        return [
            new Pet('Salem', '8', 'dog'),
        ];
    }
}
