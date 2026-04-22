<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    private $name;
    private $year;
    private $distance;
    function __construct($name, $year, $distance) {
        $this->name = $name;
        $this->year = $year;
        $this->distance = $distance;
    }
    public static function create($name, $year, $distance) { return new Car($name, $year, $distance); }
    public function print() { echo "Name: " . $this->name . "\nYear: " . $this->year . "\nTotal Distance: " . $this->distance; }
}
