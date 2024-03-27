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
if(isset($_REQUEST['id'])){
  $id=$_REQUEST['id'];
   $name="";
   $dob="";
   $address="";
   $gender="";
   $phone="";
   $course="";
  if($id!=null){
    $connect=mysqli_connect('localhost','root','','student');
  
    $query="Select * from information where id=$id";
  
    $result=mysqli_query($connect,$query);
  
 
  
    if($result){
     while($user = $result->fetch_assoc()){
       $id=$user["id"];
       $name=$user["name"];
       $address=$user["address"];
       $gender=$user["gender"];
       $dob=$user["dob"];
       $phone=$user["number"];
       $course=$user["course"];
      
     }
    }
  }
}
   
 

?>


<form action="stdController.php" method="post"><h1>Student Form</h1>

<input type="hidden" name="id" value="<?php echo !empty($id)?$id:""?>">

  <label for="name">Name</label>
  <input type="text"  id="name" name="name" value="<?php echo !empty($name)?$name:""?>"><br>

  <label for="address">Address</label>
  <input type="text" id="address" name="address" value="<?php echo !empty($address)?$address:""?>"><br>

  <label for="dateOfBirth">Date Of Birth</label>
  <input type="date" id="dateOfBirth" name="dob" value="<?php echo !empty($dob)?$dob:""?>"><br>

  <label for="gender">Gender</label>
  <div id="gen">
    <select name="gender" id="gender">
      <option value="">Choose your gender</option>
      <option value="male" <?php echo !empty($gender) ?($gender == 'male') ? 'selected="selected"' : '' : ""; ?>>Male</option>
    <option value="female" <?php echo !empty($gender) ? ($gender == 'female') ? 'selected="selected"' : '':""; ?>>Female</option>
    </select>
  </div><br>
  

  <label for="phoneNumber">Phone Number</label>
  <input type="tel" id="phoneNumber" name="phoneNumber" value="<?php echo !empty($number)?$number:""?>"><br>


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
