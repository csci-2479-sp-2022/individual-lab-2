<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model{

    use HasFactory;

    //define model attributes (more on this when we talk about Eloquent):

    protected $fillable = [
        'name',
        'age',
        'type'
    ];
    //Add a public toString() function that outputs the fillable properties into a descriptive string about the pet.

    public function toString(){

        return "$this->name . 'is a ' . $this->age . ' years old, and is a ' .  $this->type .";

    }
}
