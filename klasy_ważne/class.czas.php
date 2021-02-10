<?php

class czas
{   
    const DEFAULT_TIME_ZONE = "Europe/Warsaw";
    public $currenttime;
    public $futuretime;
    public $timezone;
    
    function __construct($timezone=self::DEFAULT_TIME_ZONE)     //dla każdego obiektu jest wywoływany konstruktor
    {
        $this->timezone = $timezone;
        $this->currenttime = $this->setcurrenttime();
         date_default_timezone_set($this->timezone);
    }
    function __toString() {
        return $this->currenttime;
    }
    
    
function setcurrenttime($pattern="H:i:s d M Y")
{
    $this->currenttime = date($pattern,time());
return $this->currenttime;
}
function setfuturetime($godzina)
{
    $pattern="H:i:s d M Y";
    $timefuture = time()+($godzina*60*60);
    $this->futuretime= date($pattern,$timefuture);
    return $this->futuretime;
}

}


?>