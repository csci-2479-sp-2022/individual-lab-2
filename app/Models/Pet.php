<?php
namespace App\Models;

class Pet
{
    public function __construct(
        public string $name,
        public int $age,
        public string $type
    ) { }


    /*protected $fillable = [
        'name',
        'age',
        'type'
    ];  */

    public function toString()
    {
        return "$this->name is a $this->age year old $this->type.";
    }
}
