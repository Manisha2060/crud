<?php
    $id=$_REQUEST["id"];
    $connect=mysqli_connect('localhost','root','','student');
    $query="Delete from information where id=$id";
    $result=mysqli_query($connect,$query);

    if($result){
        echo "Successfully done";
        header("location:studentDetails.php");
    }
    else{
        echo "Failed";
    }
?>