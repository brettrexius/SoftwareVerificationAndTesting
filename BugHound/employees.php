<!DOCTYPE html>

<?php
include("connection_to_root.php");
error_reporting(0);
?>
<head>

<meta charset="UTF-8">

<title>practise</title>

</head>

<body>

<h1>USer</h1>

<form name="employeeForm" action="" method="post" onsubmit="return validate()">

<table>

<tr><td> name:</td><td><input type="Text" name="name"></td></tr>

<tr><td>username:</td><td><input type="Text" name="username"></td></tr>
<tr><td>password:</td><td><input type="Text" name="password"></td></tr>

<tr><td>userlevel:</td><td><input type="Text" name="userlevel"></td></tr>

</table>

<input type="submit" name="submit" value="Next">


</form>
 
<!-- <p> 

<h3>

<a href="page3.php"><span class="linkline">View Names</span></a>

</h3>

</p>  -->

<?php

$username = $_POST['username'];

$name = $_POST['name'];

$password = $_POST['password'];

$userlevel = $_POST['userlevel'];

// echo $username;

$query = "INSERT INTO employees (name, username,password,userlevel) VALUES ('$name','$username','$password','$userlevel')";

// echo "here";

$dataInserted=mysqli_query($conn, $query);

if($dataInserted)
{
    echo"inserted in database";
}
?>

<script language=Javascript>

function validate() {

if(employeeForm.name.value === ""){

alert ("username field must contain characters");

return false;

}

if(employeeForm.username.value === ""){

alert ("name field must contain characters");

return false;

}
if(employeeForm.password.value === ""){

alert ("pasword field must contain characters");

return false;

}
if(employeeForm.userlevel.value === ""){

alert ("userlevel field must contain values from either from 1 to 10");

return false;

}

return true;

}

</script>

</body>

</html>

