<?php

namespace App;

class User{
    var $age;
    var $name;
    function __construct($age, $name) {
        $this->age = $age;
        $this->name = $name;
    }
}
