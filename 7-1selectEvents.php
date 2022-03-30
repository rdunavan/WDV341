<?php
include "connectPDO.php" ;
$sql = "SELECT event_name,	event_description FROM wdv341_events ";
$stmt = $conn->prepare($sql);
$stmt ->execute();
  

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
    <h1>WDV341 Intro PHP</h1>
    <h2> Unit -7 SELECT Data from your database and display it to this page</h2>
    <h3>Current Events</h3>
    <?php
    
    while($row=$stmt->fetch()){
        echo "<p>";
        echo"<span>";
        echo $row['event_name'];
        echo "</span>";
        echo"<span>";
       
        echo $row['event_description'];
        echo "</span>";
        echo "</p>";
    }
    ?>
</body>
</html>
