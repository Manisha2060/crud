<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
     $email=$_POST['email'];
     $password=$_POST['password'];

//$encryptedPass=password_hash($password, PASSWORD_DEFAULT);

$connection=mysqli_connect('localhost','Suresh','poppunk','bca');
$query = "INSERT INTO users(name, email) VALUES ('$name','$email')";
$result= mysqli_query($connection,$query);
 if($result){
    header("Location:login.php");
 }
 else{
    echo "Failed to connect";
 }
}

?>