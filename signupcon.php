<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
     $email=$_POST['email'];
     $password=$_POST['password'];

//$encryptedPass=password_hash($password, PASSWORD_DEFAULT);

$connection=mysqli_connect('localhost','root','','student');
$query = "INSERT INTO info(name, email, password) VALUES ('$name','$email','$password')";
$result= mysqli_query($connection,$query);
 if($result){
    header("Location:login.php");
 }
 else{
    echo "Failed to connect";
 }
}

?>