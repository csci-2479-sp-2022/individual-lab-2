<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model

{
    protected $fillable = [
        'name',
        'age',
        'type'
    ];

    public function __toString()
    {
        return "$this->name is a $this->age year old $this->type.";

    }
    use HasFactory;
}
