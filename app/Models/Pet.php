<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    // define model attributes
    protected $fillable = [
        'name',
        'age',
        'type'
    ];

    // output fillable properties into a descriptive string
    public function toString() {
        return $this->name .' is a ' . $this->type . ' and is '. $this->age  .' year old.';

    }
}

