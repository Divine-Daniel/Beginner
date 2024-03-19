<?php

// THE PHP IF STATEMENT
echo "<h2> THE PHP IF STATEMENT<h2>";

//The if statement executes some code if one condition is true.

//Output "Have a good day!" if the current time (HOUR) is less than 20:

    $t = date("H");

    if ($t < "20" ){

        $message = "<h4>Have a nice day!</h4>";
        echo $message;
        
    }

    echo "<hr>";


    // PHP - THE IF... ELSE STATEMENT
    echo "<h2>PHP - THE IF... ELSE STATEMENT</h2>";

    //The if...else statement executes some code if a condition is true and another code if that condition is false.

    //Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:

        $t = date("H");

        if ($t < "20"){

            $massege = "<h4>Have a nice day!</h4>";
            echo $massege;

        }else{

            $night_message = "<h4>Have a good night!</h4>";
            echo $night_message; 

        }
        
        echo "<hr>";




        // PHP - THE IF... ELSEIF... ELSE STATEMENT

        echo "<h2>PHP - THE IF... ELSEIF... ELSE STATEMENT</h2>"; 

        //The if...elseif...else statement executes different codes for more than two conditions.

        //Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":

            $t = date("H");

            if ($t <= "10"){

                echo "<h4>Have a good morning!</h4>";

            }elseif ($t <= 20) {

                echo "<h4>Have a good day!</h4>";

            }else {

                echo "<h4>Have a good night!</h4>";

            }
            echo "<hr>";



?>