<?php

echo "<h1>PHP Constants</h1>";
/*

Definition of a constant: Constants are like variables except that once they are defined they cannot be changed or undefined.

define(name, value, case-insensitive)

Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
 
Example 
 
*/

// // Create a constant with a case-sensitive name:
// define("greeting", "this is a define constant variables");
// echo greeting;

// // Create a constant with a case-insensitive name:
// define("greeting", "Welcome to W3Schools.com!", true);
// echo greeting;

/*

PHP Constant Arrays

In PHP7, you can create an Array constant using the define() function:

Example

*/

//Create an Array constant:
define("cars", ["venzer", "benze", "toyato"]);

  echo cars[2], "<br>";

  /*

  Constants are Global

Constants are automatically global and can be used across the entire script.

Example

  */

//This example uses a constant inside a function, even if it is defined outside the function:

  define("greet", "This is a define constant variable");

  function cons(){
    echo greet;
  }

  cons();
  

?>