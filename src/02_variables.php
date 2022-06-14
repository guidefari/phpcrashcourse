<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/


$name = 'Guide';
$age = 420;

// echo $name . ' is '. $age . ' years old.';

// echo "$name is $age years old";

echo "${name} is ${age} years old";

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

var_dump(HOST);
var_dump(DB_NAME);

