<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function _construct(
        string $name,
        string $age,
        string $type
    ){} 
    public function __toString(){
        return "$name is a $age year old $type.";
    }
}


