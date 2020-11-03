<?php

$qno = 5;
$ques = $_POST["ques"];
$opt1 = $_POST["opt1"];
$opt2 = $_POST["opt2"];
$opt3 = $_POST["opt3"];
$opt4 = $_POST["opt4"];
$ans = $_POST["ans"];
$marks = $_POST["marks"];
$neg_marks = $_POST["neg_marks"];

/*$name = $_FILES["file"]["name"];
$data = file_get_contents($_FILES["file"]["tmp_name"]);
$type = $_FILES["file"]["type"];*/


$con = mysqli_connect("localhost", "root", "","questions");

    if( $con ) 
    {
        echo "connected successfully<br>";
    }
    else
    {
        echo "cannot connect";
        die();
    }
    
   // mysqli_autocommit($con,FALSE);


//if(substr($type, 0, 5) == "image")
//{
  //$query = "INSERT INTO ques VALUES('$qno','$ques', '$opt1', '$opt2', '$opt3', '$opt4', '$ans', '$marks', '$neg_marks', '','$name','$data')";
  //mysqli_query($con,$query);
  //echo $query;
  //mysqli_commit($con);
  //mysqli_close($con);
//}
//else
//{
  echo "Image not valid";
  $query = "INSERT INTO ques VALUES('$qno','$ques', '$opt1', '$opt2', '$opt3', '$opt4', '$ans', '$marks', '$neg_marks')";
  echo $query;
  mysqli_query($con,$query);
  //mysqli_commit($con);
  //mysqli_close($con); 
//}

?>