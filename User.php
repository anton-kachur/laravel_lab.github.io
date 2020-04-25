<?php

namespace App;

class User{
    var $age;
    var $name;
    var $arr;
    function __construct($age, $name, $arr) {
        $this->age = $age;
        $this->name = $name;
        $this->arr = $arr;
    }
}
