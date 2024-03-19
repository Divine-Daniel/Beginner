<?php



// PHP OPERATORS
echo '<h1>PHP OPERATORS</h1>';

// PHP Arithmetic Operators
echo "<hr>";
echo '<h2>PHP Arithmetic Operators</h2>';

// Addition
echo "<hr>";
echo "<p>Addition</p>";
$x = 10;
$y = 5;
echo $x + $y;

// Subtraction
echo "<hr>";
echo "<p>Subtraction</p>";
$x = 10;
$y = 5;
echo $x -$y;

// Multiplication
echo "<hr>";
echo "<p>Multiplication</p>";
$x = 10;
$y = 5;
echo $x * $y;

// Division
echo "<hr>";
echo "<p>Division</p>";
$x = 10;
$y = 5;
echo $x / $y;

// Modulus
echo "<hr>";
echo "<p>Mudulus</p>";
$x = 10;
$y = 5;
echo $x % $y;


// EXponentiation
echo "<hr>";
echo "<p>Exponentiation</p>";
$x = 10;
$y = 3;
echo $x ** $y;
echo "<hr>";



//PHP Assignment Operators
echo "<hr>";
echo "<h2>PHP Assignment Operators</h2>";

/*

 Description
 x = y
 the left operand get set to the value of the explession on the right

 */
echo "<hr>";
 echo "<p>
  Description <br>
 x = y <br>
 the left operand get set to the value of the explession on the right
 </p>";

 $x = 10;
 echo $x;
 


 /*

 Description
 x += y is the same as x = x + y
 Addition

 */
echo "<hr>";
 echo "<p>
  Description <br>
 x += y is the same thing as x = x + y <br>
 Addition
 </p>";

 $x = 20;
 echo $x += 100;
 


 /*

 Description
 x -= y is the same as x = x - y
 Subtraction

 */
echo "<hr>";
echo "<p>
Description <br>
x -= y is the same thing as x = x - y <br>
Subtraction
</p>";
$x = 15;
echo $x -= 5;



 /*

 Description
 x /= y is the same as x = x / y
 Division

 */
echo "<hr>";

echo "<p>
Description <br>
x /= y is the same thing as x = x / y <br>
Division
</p>";
$x = 15;
echo $x /= 5;


 /*

 Description
 x *= y is the same as x = x * y
 Multiplication

 */
echo "<hr>";

echo "<p>
Description <br>
x *= y is the same as x = x * y <br>
Multiplication
</p>";
$x = 10;
echo $x *= 5;

echo "<hr>";


/*

 Description
 x **= y is the same as x = x ** y
 Modulus

 */

echo "<p>
Description <br>
x **= y is the same as x = x ** y <br>
Modulus
</p>";
$x = 10;
echo $x **= 3;

echo "<hr>";
echo "<hr>";

// PHP Comparison Operators
echo "<h2>PHP Comparison Operators</h2>";

/*

 Operators
 ==
 Equal

 */
echo "<p>
Operators<br>
== <br>
Equal
</p>";

$x = 100;
$y = '100';
var_dump($x == $y);
echo "<hr>";


/*

 Operators
 ===
 Identical

 */
echo "<p>
Operators<br>
=== <br>
Identical
</p>";
$x = 100;
$y = '100';
var_dump($x === $y);
echo "<hr>";


/*

 Operators
 !=
 Not Equal

 */
echo "<p>
Operators<br>
!=<br>
Not Equal
</p>";
$x = 100;
$y = '100';
var_dump($x != $y);
echo "<hr>";



/*

 Operators
 <>
 Not Equal

 */
echo "<p>
Operators<br>
<> <br>
Not Equal
</p>";
$x = 100;
$y = '100';
var_dump($x <> $y);
echo "<hr>";


/*

 Operators
 !==
 Not Equal

 */
echo "<p>
Operators<br>
!== <br>
Not Equal
</p>";
$x = 100;
$y = '100';
var_dump($x !== $y);
echo "<hr>";


/*

 Operators
 >
 Greater Than

 */
echo "<p>
Operators<br>
> <br>
Greater Than
</p>";
$x = 100;
$y = '100';
var_dump($x > $y);
echo "<hr>";


/*

 Operators
 <
 Less Than

 */
echo "<p>
Operators<br>
< <br>
Less Than
</p>";
$x = 100;
$y = '100';
var_dump($x < $y);
echo "<hr>";


/*

 Operators
 >=
 Greater Than or Equals to

 */
echo "<p>
Operators<br>
>= <br>
Greater Than or Equals to
</p>";
$x = 100;
$y = '100';
var_dump($x >= $y);
echo "<hr>";

/*

 Operators
 <=
 Less Than or Equals to

 */
echo "<p>
Operators<br>
<= <br>
Less Than or Equals to
</p>";
$x = 100;
$y = '100';
var_dump($x <= $y);
echo "<hr>";


/*

 Operators
 <=>
 Spaceship

 */
echo "<p>
Operators<br>
<=> <br>
Spaceship
</p>";
$x = 100;
$y = '100';
var_dump($x <=> $y);
echo "<hr>";
echo "<hr>";

// PHP Increment / Decrement Operators
echo "<h2>PHP Increment / Decrement Operators</h2>";

/*

 Description - Increment variable $x by one, then returns variable $x
 Name - Pre-Increment
 Operators - ++$x

 */
echo "<p>Pre - Increment</p>";

 $x = 10;
 echo ++$x;


 /*

 Description - Returns variable $x, Then Increment variable $x by one, 
 Name - Post-Increment
 Operators - $x++

 */
echo "<p>Post - Increment</p>";

 $x = 10;
 echo $x++;


 /*

 Description - Decrement variable $x by one, Then Returns variable $x 
 Name - Pre-Decrement
 Operators - --$x

 */
echo "<p>Pre - Decrement</p>";

$x = 10;
echo --$x;



/*

 Description - Returns variable $x, Then Decrement variable $x by one, 
 Name - Post-Decrement
 Operators - --$x

 */
echo "<p>Post - Decrement</p>";

$x = 10;
echo $x--;
echo "<hr>";
echo "<hr>";




// PHP Logical Operators
echo "<h2>PHP Logical Operators</h2>";

 /*

 Operators - And
 Name - 	And
 Examples - $x and $y

 */
echo "<p>And Operators</p>";
$x = 100;
$y = 50;
// var_dump($x and $y);

// conditional statement
if ( $x == 100 and $y == 50 ){

    echo "Hello World!";

}

echo "<hr>";



/*

 Operators - OR
 Name - 	OR
 Examples - $x or $y

 */
echo "<p>OR Operators</p>";
$x = 100;
$y = 50;
// var_dump($x and $y);

// conditional statement
if ( $x == 100 or $y == 80 ){

    echo "Hello World!";

}

echo "<hr>";



/*

 Operators - XOR
 Name - 	XOR
 Examples - $x xor $y

 */
echo "<p>XOR Operators - Ether x or y is true but not both of them</p> ";
$x = 100;
$y = 50;
// var_dump($x and $y);

// conditional statement

if ( $x == 100 Xor $y == 50 ){

    echo "Hello World!";
    
}
else{
    echo "This is for xor operator - it echo this because it is false";
}

echo "<hr>";



/*

 Operators - &&
 Name - 	And
 Examples - $x && $y

 */
echo "<p>&& same as AND Operators</p>";
$x = 100;
$y = 50;
// var_dump($x && $y);

// conditional statement
if ( $x == 100 && $y == 50 ){

    echo "Hello World!";

}

echo "<hr>";



/*

 Operators - ||
 Name - 	OR
 Examples - $x || $y

 */
echo "<p> || same as OR Operators</p>";
$x = 100;
$y = 50;
// var_dump($x || $y);

// conditional statement
if ( $x == 100 || $y == 80 ){

    echo "Hello World!";

}

echo "<hr>";



/*

 Operators - !
 Name - 	Not
 Examples - !$x

 */
echo "<p> Not Operators</p>";
$x = 100;
$y = 50;
// var_dump($x ! $y);

// conditional statement
if ( $x !== 90){

    echo "Hello World!";

}

echo "<hr>";
echo "<hr>";



// PHP String Operators
echo "<h2>PHP String Operators</h2>";

/*

 Operators - .
 Name - 	Concatenation
 Examples - $txt1 . $txt2

 */

 echo "<p> . Concatenation Operators</p>";
 $txt1 = "Hello";
 $txt2 = "World!";
 echo $txt1 . $txt2 ;
 echo "<hr>";




 /*

 Operators - .=
 Name - 	Concatenation Assignment
 Examples - $txt1 .= $txt2

 */

 echo "<p> . Concatenation Assignment Operators</p>";
 $txt1 = "Hello";
 $txt1 .= "World!!!!";
 echo $txt1 ;
 echo "<hr>";
 echo "<hr>";
 
 
 
 // PHP Array Operators
 echo "<h2>PHP Array Operator</h2>";#
 
 /*
 
 Operators - +
 Name - 	Union
 Examples - $x + $y
 
 */
echo "<p>Union</p>";

$x = array("a" => "Apple", "b" => "Banana");
$y = array("c" => "Cattle", "d" => "Dog");

echo "<pre>";
print_r($x + $y);
echo "</pre>";
echo "<hr>";


/*

Operators - ==
Name - 	Equality
Examples - $x == $y

*/
echo "<p>Equality</p>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
echo "<hr>";


/*

Operators - ===
Name - 	Identity
Examples - $x === $y

*/
echo "<p>Identity</p>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
echo "<hr>";


/*

Operators - !=
Name - 	Inequality
Examples - $x != $y

*/
echo "<p>Inequality</p>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
var_dump($x != $y);
echo "<hr>";




/*

Operators - <>
Name - 	Inequality
Examples - $x <> $y

*/
echo "<p>Inequality</p>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
var_dump($x <> $y);
echo "<hr>";




/*

Operators - !==
Name - 	Not Identitical to
Examples - $x !== $y

*/
echo "<p>Inequality</p>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
var_dump($x !== $y);
echo "<hr>";
echo "<hr>";



// PHP Conditional Assignment Operators
echo "<h2>PHP Conditional Assignment Operators</h2>";


/*

Operators - ?
Name - 	Ternary
Examples - $x = $expr1 ? $expr2 : $expr3
Result - Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE	

*/

//    // if empty($user) = TRUE, set $status = "anonymous"
//    echo $status = (empty($user)) ? "anonymous" : "logged in";
//    echo("<br>");

//    $user = "John Doe";
//    // if empty($user) = FALSE, set $status = "logged in"
//    echo $status = (empty($user)) ? "anonymous" : "logged in";

$statue = (empty ($users)) ? "<h3>anonymous</h3>" : "<h3>Logged in Successfully</h3>";
echo $statue;
echo "<hr>";

$user = "John Doe";
$statue = (empty($user)) ? "<h3>anonymous</h3>" : "<h3>Logged in Successfully</h3>";
echo $statue;
echo "<hr>";

/*

Operators - ??
Name - 	Ternary
Examples - $x = $expr1 ?? $expr2
Result - Returns the value of $x. The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL, the value of $x is expr2.Introduced in PHP 7	

*/

//    // variable $user is the value of $_GET['user']
//    // and 'anonymous' if it does not exist
//    echo $user = $_GET["user"] ?? "anonymous";
//    echo("<br>");

//    // variable $color is "red" if $color does not exist or is null
//    echo $color = $color ?? "red";

// My Own 
$user = $_GET['user'] ?? "<h3>anonymous</h3>";
echo $user;
echo "<hr>";

$color = NULL ?? "<h3>Red</h3>";
echo $color;
echo "<hr>";



















// $txt1 = "Hello";
// $txt2 = " world!";
// $txt1 .= $txt2;
// echo $txt1 . '<br>';

// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// print_r($x + $y) ; // union of $x and $y

// $x = array("a" => "reed", "b" => "greeen");  
// $y = array("c" => "bluee", "d" => "yeellow");  

// var_dump($x == $y);// 	Returns true if $x and $y have the same key/value pairs

// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// var_dump($x === $y);//Returns true if $x and $y have the same key/value pairs in the same order and of the same types

// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// var_dump($x != $y);//Returns true if $x is not equal to $y	

// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// var_dump($x <> $y);//Returns true if $x is not equal to $y	


// $x = array("a" => "red", "b" => "green");  
// $y = array("c" => "blue", "d" => "yellow");  

// var_dump($x !== $y);//Returns true if $x is not identical to $y

// //PHP Conditional Assignment Operators

// echo "<h1>PHP Conditional Assignment Operators</h1>";

// //for 	Ternary :Example

// $statue = (empty($username)) ? "<h4>you are not logged in" : "you are logged in";

// echo $statue;// Returns the value of $x. ( $x = expr1 ? expr2 : expr3 ) The value of $x is expr2 if expr1 = TRUE.



// $user = "Divine Daniel";
// $statue = (empty($user)) ? "<h4>you are not logged in</h4>" : "<h4>you are logged in!<h4>";


// echo $statue;//Returns the value of $x. ( $x = expr1 ? expr2 : expr3 ) The value of $x is expr3 if expr1 = FALSE

//  //for 	Null coalescing :  Example

//    // variable $user is the value of $_GET['user']
//    // and 'anonymous' if it does not exist
//     $username = $_GET['user'];
//     echo $username ?? '<h4>You are not registered</h4>';
  
//    // variable $color is "red" if $color does not exist or is null\
//    $color = null $color ?? '<h4>It is red because variable $color is null or does not exist</h4>';
   

?>