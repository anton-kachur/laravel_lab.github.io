<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AgeController
{
    public function getAge($age)
    {
        $u = new User($age, null);
        return view('age', ['obj' => $u]);
    }

    public function getName($name)
    {
        $u = new User(null, $name);
        return view('user', ['obj' => $u]);
    }
}
