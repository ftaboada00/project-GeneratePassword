<?php
include_once "password.php";

use MyProject\Protection\Password;

$pass = new Password();

echo $pass->generate(20);


