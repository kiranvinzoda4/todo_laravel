<?php

use App\Models\User;
dd('halt');
 
$user = User::create([
    "name" => "kiran",
    "email" => "kiran@mail.com",
    "password" => "12345667890"
]);

dd($user);
dd(User::first());
echo "hello";