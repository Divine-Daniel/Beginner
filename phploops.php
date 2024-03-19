<?php


// PHP LOOPS 
echo "<h1>PHP LOOPS<h1>";
//LOOPS - Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.



// WHILE LOOPS 
//while - loops through a block of code as long as the specified condition is true OR
//The while loop executes a block of code as long as the specified condition is true.
echo "<h2>WHLE LOOPS</h2>";
/*

while (condition is true) {
    code to be executed;
}

*/
// THE FIRST EXAMPLE

$x = 1;
while ($x <= 5){

    echo "the number is: $x <br>";
    $x++;

}

//This example counts to 100 by tens:

$x = 0;
while ($x <= 100){

    echo "<p>The number is: $x <br></p>";
    // $x = $x + 11;
    $x += 10;

}






// DO.... WHILE LOOPS 
//do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true OR
//The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.

echo "<h2> DO.... WHLE LOOPS</h2>";

/*

syntax

do {
    code to be executed;
} while (condition is true);

*/

$x = 1;
do{

    echo "<p>The number is: $x <br></p>";
    $x++;

}while( $x <= 5 );

// NOTE: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.

// This example sets the $x variable to 6, then it runs the loop, and then the condition is checked:
echo "<b> <p> Another Example </p>";

$x = 6;
do {

    echo "<p>The number is: $x <br></p>";
    $x++;

}while( $x <= 5 );





// FOR LOOPS 
// for - loops through a block of code a specified number of times OR 
// The for loop is used when you know in advance how many times the script should run.
echo "<h2>FOR LOOPS</h2>";
/*

Syntax
for (init counter; test counter; increment counter) {
    code to be executed for each iteration;
}

Parameters:

init counter: Initialize the loop counter value
test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
increment counter: Increases the loop counter value

Examples
The example below displays the numbers from 0 to 10:

*/

for ($i= 0; $i <= 10 ; $i++) { 
    
    echo "<p> The number is: $i <br> <p>";

}

/*

Example Explained
$x = 0; - Initialize the loop counter ($x), and set the start value to 0
$x <= 10; - Continue the loop as long as $x is less than or equal to 10
$x++ - Increase the loop counter value by 1 for each iteration

*/

// This example counts to 100 by tens:
echo "<p> This example counts to 100 by tens: <br> </p>";

for ($x = 0; $x <= 100; $x += 10){

    echo "<p>The number is: $x <br> </p>";

}








// FOREACH LOOPS 
//foreach - loops through a block of code for each element in an array OR 
// The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
echo "<h2>FOREACH LOOPS</h2>";
/*

Syntax
foreach ($array as $value) {
  code to be executed;
}

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

Examples
The following example will output the values of the given array ($colors):

*/

$color = array("Red", "Blue", "Green", "White");

foreach($color as $value){

    echo "$value <br>";

}

//The following example will output both the keys and the values of the given array ($age):

$age = [ "Peter" => 35, "Ben" => "37", "Dan" => "47"];

foreach ( $age as $x => $var ){

    echo "$x => $var <br>";

}







?>