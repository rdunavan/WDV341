<?php
session_start();
if(isset($_SESSION['validUser'])&& $_SESSION['validUser']){

}
else{

}
$eventName = "";
$eventDesc = "";
$eventPresenter = "";

$eventNameErrorMsg = "";
$eventDescErrorMsg = "";
$eventPresenterErrorMsg = "";
if(isset($_POST ['submit'])){
    echo "Form has been submitted";
    $eventName = $_POST['event_name'];
    $eventDesc = $_POST['event_description'];
    $eventPresenter = $_POST['presenter'];

    echo "<p>  $eventName, $eventDesc, $eventPresenter</p> ";

    //validate input values
    $validForm = true;
    if($eventName == ""){
        $eventNameErrorMsg = "Event Name is require";
        $validForm = false;

    }
    
    if( $eventDesc == ""){
        $eventDescErrorMsg  = "Event Description is require";
        $validForm = false;

    }
   
    if( $eventPresenter == ""){
        $eventPresenterErrorMsg = "Event Presenter is require";
        $validForm = false;

    }

    if($validForm){
        echo"<p>Form is valid</p>";

        require "connectPDO.php";
        $sql = "INSERT INTO wdv341_events";
        $sql .= "(event_name, event_description, presenter) ";
        $sql .= "VALUES(:name, :desc, :presenter);";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $eventName);
        $stmt->bindParam(':desc', $eventDesc);
        $stmt->bindParam(':presenter', $eventPresenter);
        $stmt->execute();
    }
    else{
        echo"<p>please fix the form</p>";
    }
}


else {
    echo "Form is new and needs to be input";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Input form</title>
   

</head>
<body>
<h2>12-1: Create a form page for the events</h2>
    <form method = "post" action = "12-1Createaform.php">
        <p>
            <label for = "event_name"> Event Name:</label>
            <input type = "text" name = "event_name" id = "event_name" placeholder ="Name" value= "<?php echo $eventName; ?>">
            <span><?php echo $eventNameErrorMsg ?></span>
        </p>
        <p>
            <label for = "event_description"> Event Description:</label>
            <input type = "text" name = "event_description" id = "event_description" placeholder ="Description" value= "<?php echo  $eventDesc; ?>">
            <span><?php echo $eventDescErrorMsg ?></span>
        </p>
        <p>
            <label for = "presenter"> Event Presenter:</label>
            <input type = "text" name = "presenter" id = presenter" placeholder ="Presenter" value= "<?php echo   $eventPresenter ; ?>">
            <span><?php echo  $eventPresenterErrorMsg ?></span>
        </p>
        <p>
            <input type = "submit" value = "Submit" name = "submit">
            <input type = "reset" value = "Try Again">
</p>
</body>
</html>