<?php
class  Event  {
   
    private $event_name;
    public $event_description;
    public $presenter;
    public $date;
    public $time;
    public $date_inserted;
    public $date_updated;
    

    // Methods

  public function setEventName($inName) {
    $this->eventName = $inName;
  }
 public  function getEventName() {
    return $this->eventName;
  }
  public function setEventDescription($inDesc) {
    $this->eventDescription = $inDesc;
  }
 public  function getEventDescription() {
    return $this->eventDescription;
  }
  public function setEventPresenter($inPres){
    $this->eventPresenter = $inPres;
  }
  public function getEventPresenter(){
    return $this->eventPresenter;
  }

  public function setEventDate($inDate){
    $this->eventDate = $inDate;
  }
  public function getEventDate(){
    return $this->eventDate;
  }

  public function setEventTime($inTime){
    $this->eventTime = $inTime;
  }
  public function getEventTime(){
    return $this->eventTime;
  }

  public function setEventDateInserted($inDateInsert){
    $this->eventDateInsert = $inDateInsert;
  }
  public function getEventDateInsert(){
    return $this->eventDateInsert;
  }

  public function setEventDateUpdated($inDateUpdated){
    $this->eventDateUpdated = $inDateUpdated;
  }
  public function getEventDateUpdated(){
    return $this->eventDateUpdated;
  }

}


?>