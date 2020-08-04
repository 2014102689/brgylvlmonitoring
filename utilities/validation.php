<?php

    // DATA ENTRY VALIDATE

    function validate($str){
        return isEmpty($str) && checkSize($str) && isString($str)!==true;
    }

    function isEmpty($str){
        return trim(strlen($str) > 0);
    }
    
    function isString($str){
        return strpbrk($str, '1234567890') == true;
    }

    function checkSize($str){
        $min = 2;
        return strlen($str) >= $min;
    }  
    function checkIntLenBegin($intnum){
        return BeginLen($intnum) && is_numeric($intnum) ;
    }

    function BeginLen($intnum){
        if (strpos($intnum,'+639') !== false && strlen($intnum)==13){
            return true;
        }else{
            return false;
        }
    }


    //FILE VALIDATE

    function checkType($type = null){
        $allowed = array('jpeg','jpg','png','gif');
        $strArray = explode('/',$type);
        return in_array(end($strArray),$allowed);
    }

    function checkfileSize($size){
        $max = 5000000; // 5mb
        if($size){
            return $size <= $max;
        }
    }

    function upload($filename = null,$filetemp=null){
        $destination = '../uploads/'.basename($filename);
        move_uploaded_file($filetemp, $destination);
        return true;
    }

?>