<?php
//  include_once(db.php);


if($_SERVER["REQUEST_METHOD"]=="POST"){
   $id=$_POST["id"];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phonenumber=$_POST['phoneNumber'];
    $course=$_POST['course'];

    $connection=mysqli_connect('localhost','root','','student');
   if($id!=null|| !empty($id)){
    $query="UPDATE `information` SET `name`='$name',`address`='$address',`dob`='$dob',`gender`='$gender',`number`='$phonenumber',`course`='$course' WHERE id=$id";

   }
   else{
    $query = "INSERT INTO information (name,address,dob, gender,number, course) VALUES ('$name','$address','$dob','$gender','$phonenumber','$course')";
   }
    

    $result= mysqli_query($connection,$query);
    if($result){
        echo "successfully created";
        header("Location:studentDetails.php");
    }

    else{
        echo "error".mysqli_error($connection);
    }
    
}
?>

<?php
// mysqli_close($connection);
?>




