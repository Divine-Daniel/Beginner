<?php

// PHP SWITCH STATEMENT

echo "<h1>PHP SWITCH STATEMENT</h1>";

// SWITCH STATEMENT IS USED TO PERFORMDIFFERENT ACTION BASED ON DIFFERENT CONDITION

// use the switch statement to select one of the blocks of codes to be executed 

//Example

/*

switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
}

*/

$favcolor = "Red";

switch( $favcolor ){

    case "Red":
        echo "Your favourite color is Red ";
        break;

    case "Green":
        echo "Your favourite color is Green";
        break;

    case "Blue":
        echo "Your favourite color is Blue";
        break;

    default :
        echo "Your favourite color is nither color Red, Green nor Blue";

}


?>