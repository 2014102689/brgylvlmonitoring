<?php
  include_once('../utilities/dbconnect.php');
  $StudentID = $_POST['StudentID'];
  $Password = $_POST['Password'];

  $sql = "SELECT * FROM tbl_student WHERE studentID = '$StudentID' AND password = '$Password'";
 	$data = mysqli_query($conn, $sql);

  if(mysqli_num_rows($data) == 1){
      	header("location: ../student-profile.php?StudentID=".$StudentID);
  }else{
     	header("location: ../error.php");    
  }    
?>