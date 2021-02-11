<?php

class fileread
{
    protected $filename;
    protected $filepoint;
    protected $isfileopen = true;
    function __construct($filename){
        $this->filename = $filename;
    if(!($this->filepoint = @fopen($filename, "r")))
    {
        $this->isfileopen = false;
        throw new Exception("Plik o nazwie $filename nie istnieje");
    }
}
function __destruct() {
    if($this->isfileopen){
    fclose($this->filepoint);
    }
}
function getWholeContent()
{
    return fread($this->filepoint, filesize());
}
}
?>