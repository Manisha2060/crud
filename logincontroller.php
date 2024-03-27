<?php
//  include_once(db.php);
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name='';
    $email=$_POST["email"];
    $pass=$_POST["password"];


    var_dump($pass) ;

    $connection=mysqli_connect('localhost','Suresh','poppunk','bca');
    $query="select * from users where email='$email'and name='$pass'";

    $result1=mysqli_query($connection,$query);
    var_dump($result1);

    if ($result1) {
        if (mysqli_num_rows($result1) > 0) {
            while ($user = $result1->fetch_assoc()) {
                echo $user["name"];
                $_SESSION['start_time'] = time();    
                $name = $user["name"];
    
                $_SESSION["name"] = $name;
            }
        header("Location:homepage.php");


        }
        else {
    header("Location:login.php?error");

        }

    

//     if($name!=null){
//     exit();
// }
//     header("Location:login.php?error");
//    exit();
}
else{
    echo "Error: " . mysqli_error($connection);


}
}

    
    ?>