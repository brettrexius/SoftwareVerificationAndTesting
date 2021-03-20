<?php 
 
    require_once("connection.php");
 
    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserN = $_POST['name'];
        $Userpassword = $_POST['password'];
        $UserName = $_POST['user_name'];
        $Userlevel = $_POST['user_level'];
        $query = " update employee set name = '".$UserN."', password='".$Userpassword."',user_name='".$UserName."',user_level='".$Userlevel."' where employee_id='".$UserID."'";
        $result = mysqli_query($con,$query);
 
        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }
 
 
?>