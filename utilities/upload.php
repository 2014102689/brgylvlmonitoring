<?php

    $name = $_FILES['myFile']['name'];
    $type = $_FILES['myFile']['type'];
    $size = $_FILES['myFile']['size'];

    if(checkType($type) && checkSize($size)){
        if(upload($_FILES['myFile'])){
            echo "Success!";
            echo "<audio controls>";               
            echo "<source src='../uploads/".$name."' type='audio/mpeg'>";
            echo "Your browser does not support the audio element.";
            echo "</audio>";
            echo "<img src='../uploads/".$name."' width='150' height='150'>";
        }else{
            echo "Failed";
        }
    }else{
        echo "Invalid File";
    }

    function checkType($type = null){
        $allowed = array('png','jpg','jpeg','gif','mp3');

        if($type){
            $strArray = explode('/', $type);
            return in_array(end($strArray), $allowed);
        }
    }

    function checkSize($size = null){
        $max = 5000000; // 5gb
        if($size){
            return $size <= $max;
        }
    }

    function upload($file = null){
        if($file){
            $myfile = $file['tmp_name'];
            $destination = "../uploads/".basename($file['name']);
            return move_uploaded_file($myfile, $destination);
        }        
    }

?>