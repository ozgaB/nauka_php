<?php
        require_once 'fileread.php';
        try
        {
            $reader = new fileread("test.txt");
            $reader->getWholeContent();

            
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
        
?>