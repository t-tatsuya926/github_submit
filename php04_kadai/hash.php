<?php

$pw= password_hash('test1', PASSWORD_DEFAULT);
echo $pw;
echo "<br>";
var_dump(password_verify('test1', $pw));

$pw= password_hash('test2', PASSWORD_DEFAULT);
echo $pw;
echo "<br>";
var_dump(password_verify('test2', $pw));

$pw= password_hash('test3', PASSWORD_DEFAULT);
echo $pw;
echo "<br>";
var_dump(password_verify('test3', $pw));