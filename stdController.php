<?php
//  include_once(db.php);


if($_SERVER["REQUEST_METHOD"]=="POST"){
   $id=$_POST["id"];
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $course=$_POST['course'];

    $connection=mysqli_connect('localhost','Suresh','poppunk','december');
   if($id){
    $query="UPDATE `students` SET `name`='$name',`dob`='$dob',`faculty`='$course' WHERE id=$id";

   }
   else{
    $query = "INSERT INTO students (name,dob, faculty) VALUES ('$name','$dob','$course')";
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
mysqli_close($connection);
?>




