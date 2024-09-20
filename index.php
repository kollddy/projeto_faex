<?php

require_once './vendor/autoload.php';

session_start();

use Regivaldo\Videos\Routers\Loader;
// use Regivaldo\Videos\Models\Users\Users;

// $user = new Users();

// $data = [
//     'name' => "",
//     'email' => "regis@example.com",
//     'phone' => "35997995490",
//     'password' => password_hash('12236565', PASSWORD_DEFAULT),
// ];

// $user->create($data);

$loader = new Loader();
$loader->execute();