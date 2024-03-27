<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank</title>
  <link rel="stylesheet" href="stdStyle.css">
</head>

<body>
  
  <form action="stdController.php" method="post"><h1>Student Form</h1>

  <label for="name">Name</label>
  <input type="text"  id="name" name="name"><br>

  <label for="address">Address</label>
  <input type="text" id="address" name="address" ><br>

  <label for="dateOfBirth">Date Of Birth</label>
  <input type="date" id="dateOfBirth" name="dob" ><br>

  <label for="gender">Gender:</label>
  <select name="gender" class="gen">
    <option value="">Please select one…</option>
    <option value="female">Female</option>
    <option value="male">Male</option>
    <option value="other">Other</option>
  </select>
 <label for="phoneNumber">Phone Number</label>
  <input type="tel" id="phoneNumber" name="phoneNumber" ><br>


  <label for="course" >Courses</label>
  <select width=300 style="width: 350px" class="cou" name="course">
  <option >Select Your Course</option>
    <option value='bca'>BCA</option>
    <option value='bicte'>BICTE</option>
    <option value='bed'>B.ED</option>
    <option value='bit'>BIT</option>
  </select>
  


<div class="sub">
  <input type="submit" value="Submit"></input>
  <input type="reset"  value="reset"></input>

</div>



  
</form>

</body>

</html>
