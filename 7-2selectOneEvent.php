<?php
$event_id = 1;
include "connectPDO.php" 
$sql = "SELECT event_name,event_description FROM wdv341_events WHERE event_id = eventID "
$stmt = $conn->prepare($sql);
$stmt -> bindParam(':eventID', $event_id)
$stmt ->execute();
$stmt ->setFetchMode(PDO::Fetch_ASSOC);


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
    
</body>
</html>