<?php
require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = " select * from employee where employee_id='".$UserID."'";
    $result = mysqli_query($con,$query);
 
    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['employee_id'];
        $UserN = $row['name'];
        $Userpass = $row['password'];
        $UserName = $row['user_name'];
        $Userlevel = $row['user_level'];
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form</h3>
                        </div>
                        <div class="card-body">
 
                            <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" Employee id " name="id" value="<?php echo $UserID ?>">   
                                <input type="text" class="form-control mb-2" placeholder=" Name " name="name" value="<?php echo $UserN ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User password "  name="password" value="<?php echo $Userpass ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User name " name="user_name" value="<?php echo $UserName ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User level " name="user_level" value="<?php echo $Userlevel ?>">
                                   <button class="btn btn-primary" name="update">Update</button>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>