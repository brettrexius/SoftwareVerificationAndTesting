<?php
// Start the session
session_start();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5)) {
    // request 5 sec ago
    session_destroy();
    session_unset();
    $_SESSION = array();
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time

if (isset($_SESSION['user']))
{
echo "Your login was succ.";// the page you want to go to if login successful
echo $_SESSION['data01'];
echo $_SESSION['data02'];
echo $_SESSION['data03'];
echo $_SESSION['data04'];
echo "hello";
}
else
{
session_unset();
session_destroy(); 
$_SESSION = array(); 
header("Location:index.php");//any page you want to return to if log in failed
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hound BUG</title>
</head>
<body>
<h1>Data base Maintenance</h1>
<form action="dbMaintenance.php" method="post" onsubmit="return validate(this)">
</form>
<?php 
echo "<table border=1 > <th>Index</th> <th>Option</th> \n";
printf("<tr><td>%d</td><td><a href=editAddAreas.php>Edit/Add Areas</a></td></tr>\n",1);
printf("<tr><td>%d</td><td><a href=addPrograms.php>Add Programs</a></td></tr>\n",2);
printf("<tr><td>%d</td><td><a href=editPrograms.php>Edit Programs</a></td></tr>\n",3);
printf("<tr><td>%d</td><td><a href=addEmployee.php>Add Employee</a></td></tr>\n",4);
printf("<tr><td>%d</td><td><a href=editEmployee.php>Edit Employee</a></td></tr>\n",5);
printf("<tr><td>%d</td><td><a href=exportAreas.php>Export Areas</a></td></tr>\n",6);
?>
</table>

<script language=Javascript>
function validate(theform) {
return true;
}
</script>
</body>
</html>