<?php

// PHP STRING

echo "<h1>PHP STRING FUNCTION</h1>";
echo "Some commonly used function to manipulate strings";

echo "<h1>PHP STRING</h1>";
echo "<p>A string is a sequence of characters like Hello World.. </p> <br>";

//  A string is a sequence of characters like Hello World..

//  PHP STRING FUNCTION

// Some commonly used function to manipulate strings

/*

- - 1. String-length "strlen()" - Returns the length of a string
    The PHP string function which is "strlen()" returns the length of a string

    EXAMPLE

    Return the length of a string called 'Hello World'

*/

echo strlen("hello World!"), " <b> -  this is for the string-length  <code>'strlen()'</code> function </b> <br><br>"; //The output will be 12

/*

- - 2. String-Word-Count "str_word_count()" - Count Words In A String
    The PHP String-Word-Count "str_word_count()" function counts the number of a word in a string

    EXAMPLE

    count the number of a word in the string "Heloo World!"

*/

echo str_word_count("Hello World!"), " <b> - this is for the string word count <code> 'str_word_count()'</code> function </b> <br><br>"; // The output will be 2

/*

- - 3. String-Reverse "strrev()" - Reverse a string 
    The PHP string-reverse "strrev()" function reverse a string

    EXAMPLE 

    Reverse a string called  "Hello world!"

*/


echo strrev("Hello World!"), " <b> - this is for the string reverse <code> 'strrev()'</code> function </b> <br><br>"; // The output will be "!dlrow olleH"

/*

- - 4. strpos() - Search  for a Text within a string
    The PHP strpos() function searches for a spacific text within a string. If matches is found, the function returns the  character position of the first match, But if no match is found it will return FALSE 

    Tip: The first character position in a string is 0 (not 1).

*/

echo strpos("Hello World!", "World"), " <b> - this is for the string position <code> 'strpos()'</code> function </b> <br><br>"; // The output will be 6

/*

- - 5. string replace "str_replace()" - Replace terxt within a string
    The PHP String Replace "str_replace()" function replaces some character with some other character with a string

    EXAMPLE..

    Replace the text 'world' with 'Dolly'

*/

echo str_replace("World", "Dolly", "Hello World!"), " <b> - this is for the string Replacement ( 'Dolly' replaces the text 'world' in a string which is 'Hello World!' and it happen just because of a function which is 'str_replace()' ) <code> 'str_replace()'</code> function </b> <br><br>"; // The output will be 'Hello Dolly'


?>