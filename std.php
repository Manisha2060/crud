<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank</title>
  <link rel="stylesheet" href="stdStyle.css">
</head>

<body>
  <?php
   include_once("nav.php");
   include_once("checkAuth.php");
   
   $id= null;
   $name= "";
   $dob= "";
   $course= "";

if(isset($_REQUEST['id'])){
  $id=$_REQUEST['id'];
    $connection=mysqli_connect('localhost','Suresh','poppunk','december');
    $query="Select * from students where id=$id";
    $result=mysqli_query($connection,$query);
    if($result){
     while($user = $result->fetch_assoc()){
       $id=$user["id"];
       $name=$user["name"];
       $dob=$user["dob"];
       $course=$user["faculty"];
      
     }
    }
}
   
 

?>


<form action="stdController.php" method="post"><h1>Student Form</h1>

<input type="hidden" name="id" value="<?php echo  $id ?>">

  <label for="name">Name</label>
  <input type="text"  id="name" name="name" value="<?php echo $name?>"><br>


  <label for="dateOfBirth">Date Of Birth</label>
  <input type="date" id="dateOfBirth" name="dob" value="<?php echo  $dob?>"><br>

  
  </div><br>
  




  <label for="course" >Courses</label>
  <select class="cou" name="course">
  <option >Select Your Course</option>
    <option value='bca'>BCA</option>
    <option value='bicte'>BICTE</option>
    <option value='bed'>B.ED</option>
    <option value='bit'>BIT</option>
  </select>
  


<div class="sub">
  <button type="submit" value="Submit">Submit</button>
  <button type="reset"  value="reset">Reset</button>

</div>



  
</form>

</body>

</html>
