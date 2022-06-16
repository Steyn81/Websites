<?php
    $name = "Deon";
    echo $name;

    $string1 = "<p>This is the first part";
    $string2 = "of a sentence</p>";
    echo $string1." ".$string2;

    $myNumber = 45;
    $calculation = $myNumber + 31 / 97 + 4;
    echo "The result of the calculation is: ".$calculation;

    $myBool = true;
    echo "<p>This statement is true? ".$myBool."</p>";

    $myArray = array("Deon","Cassy","Theresa");
    print_r($myArray);
    echo $myArray[1];
    echo sizeof($myArray);
    unset($myArray[1]);

    $age = 25;
    if($age <= 18)
    {
        echo "you are to young";
    }
    else
    {
        echo "You may proceed";
    }
    
    for($i = 0; $i < 30; $i += 2)
    {
        echo $i."<br>";
    }

    //include another php file
    include("PHP.php");

    //include another php file from a website
    echo file_get_contents("https://www.ecowebhosting.co.ca");
?>