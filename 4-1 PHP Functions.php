<?php
//Create a function that will accept a timestamp and format it into mm/dd/yyyy format.
function datetime(){//function name datetime 
    echo "Today is " . date("m/d/y") . "<br>";
}
//Create a function that will accept a timestamp and format it into dd/mm/yyyy format to use when working with international dates.
function datetime1(){//function name datetime1
    echo "Today is " . date("d/m/y") . "<br>";
}
//Create a function that will accept a string input.  It will do the following things to the string
function stringInput($userInput){
    //Display the number of characters in the string
    echo strlen($userInput);
    //Trim any leading or trailing whitespace
    echo trim($userInput);
    //Display the string as all lowercase characters
    echo strtolower($userInput);
}
//Create a function that will accept a number and display it as a formatted phone number.
function phoneNumber($phone){

}
function moneyNumber(){
    
    $number = "1234.5672";
    setlocale(LC_MONETARY,"en_US"); 
    echo "$".number_format($number,2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
   //call fuction datetime
   datetime();
   ?>
   </p>
   <p>
       <?php
   //call function datetime1
   datetime1();
   ?>
</p>
<p>
    <?php
   stringInput("DMACC");
   ?>
   <p>
   <?php
   
   moneyNumber();
   ?>

</p>
  
</body>
</html>