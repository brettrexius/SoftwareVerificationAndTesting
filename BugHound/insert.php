<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['id']) || empty($_POST['name']) || empty($_POST['password'])|| empty($_POST['user_name']) || empty($_POST['user_name']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserID = $_POST['id'];  
            $UserN = $_POST['name'];
            $Userpassword = $_POST['password'];    
            $UserName = $_POST['user_name'];
            $Userlevel = $_POST['user_level'];
           
            $query = " insert into employee (employee_id,name,password,user_name,user_level) values('$UserID','$UserN','$Userpassword','$UserName','$Userlevel')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>