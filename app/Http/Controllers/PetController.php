<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{



    public function show()
    {

        // controller actions typically return a view and a model
        return view('pets', ['pets'=> self::getPets()]);
    }


    private static function getPets(): array
    {
        return
        [
            new Pet('Ava', 7, 'dog'),
            new Pet('Toby', 4, 'cat'),
            new Pet('Unnamed fish', 2, 'Mbuna African Chiclid')
        ];
    }
}
