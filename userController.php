<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController
{
    public function getUser($age, $name)
    {
        $u = new User($age, $name, ["user" => '#1', "country" => 'Ukraine', "id" => '123123434']);
        return view('index', ['obj' => $u]);
    }
}
