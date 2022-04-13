<?php
$eventId = 1;
include "connectPDO.php" ;
$sql = "SELECT event_name,	event_description, presenter, date , time, date_inserted, date_updated FROM wdv341_events  WHERE event_id=:eventID";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":eventID", $eventId);
$stmt ->execute();
$stmt ->setFetchMode(PDO::FETCH_ASSOC);
$row=$stmt->fetch();
//echo $row["event_name"];
//echo $row["event_description"];


include 'Event.php';

$newEventObject = new Event();

$newEventObject-> setEventName( $row["event_name"]);
echo "Event Name " . $newEventObject-> getEventName();

$newEventObject->  setEventDescription($row["event_description"]);
echo "Event description" . $newEventObject-> getEventDescription();

$newEventObject->  setEventPresenter($row["presenter"]);
echo "Event presenter" . $newEventObject-> getEventPresenter();

$newEventObject->  setEventDate($row["date"]);
echo "Event date" . $newEventObject-> getEventDate();

$newEventObject->  setEventTime($row["time"]);
echo "Event time" . $newEventObject-> getEventTime();

$newEventObject-> setEventDateInserted($row["date_inserted"]);
echo "Event date inserted" . $newEventObject-> getEventDateInsert();

$newEventObject-> setEventDateUpdated($row["date_updated"]);
echo "Event date updated" . $newEventObject->  getEventDateUpdated();

$eventJSON = json_encode($newEventObject);
echo $eventJSON;
?>