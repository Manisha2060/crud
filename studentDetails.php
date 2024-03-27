<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once("checkAuth.php");

include_once("nav.php");
 $connection=mysqli_connect('localhost','Suresh','poppunk','december');
$query1="SELECT * FROM students";
$result1 = mysqli_query($connection, $query1);
if($result1){     
?>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Date of birth</th>
    <th>Course</th>
    <th>Edit | Delete</th>

</tr>
<?php
    while($user = $result1->fetch_assoc()){
?>
<tr>
    <td>
        <?php echo $user["id"];?>
    </td>
    <td>
        <?php echo $user["name"];?>
    </td>

    <td>
        <?php echo $user["dob"];?> 
    </td>
 
    <td>
        <?php echo $user["faculty"];?>
    </td>
    <td>
        <a href="std.php?id=<?=$user["id"]?>">Edit</a> | 
        <a href="delete.php?id=<?=$user["id"]?>" role="button" onclick="return msg()">Delete</a>
    </td>
</tr>
<?php
    }

}
?>
<script type="text/javascript">  
    function msg(){  
        var v= confirm("Are u sure?");  
        if(v==true){  
            return true;  
        }  
        else{  
            return false;
        }  
}  
</script>  
</table>
</body>
</html>
