<?php

// PHP ECHO AND PRINT STATEMENT

/* 

echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

*/

// NOTE ::  The echo statement can be used with or without parentheses: echo or echo().

echo "<h2>PHP is fun!</h2>";
echo "Hello World! <br>";
echo "I am about to learn PHP! <br>";
echo "This ", "strings ", "was ", "made ", "with ", "multiple parameters";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

// THE PHP PRINT STATEMENT

/*

The print statement can be used with or without parentheses: print or print().

Display Text

The following example shows how to output text with the print command (notice that the text can contain HTML markup):

*/

print "<h2>PHP is fun</h2>";
print "Hello World! <br>";
print "i'm about to learn PHP!";

// Display Variables

// The following example shows how to output text and variables with the print statement:

$txt3 = "Learn PHP!";
$txt4 = "W3Schools.com.....";
$x = 6;
$y = 4;

print "<h2>" . $txt3 . "</h2>";
print "Study PHP at " . $txt4 . "<br>";
print $x + $y;



?>