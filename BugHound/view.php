<?php 
 
    require_once("connection.php");
    $query = " select * from employee ";
    $result = mysqli_query($con,$query);
 
?>
 
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Employee </title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                    <table class="table table-bordered">
                            <tr>
                                <td> Employee ID </td>
                                <td>  Name </td>
                                <td> User Password </td>
                                <td> Username  </td>
                                <td> Userlevel  </td>
                                <td> Edit  </td>
                                
                            </tr> 
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['employee_id'];
                                        $UserN = $row['name'];
                                        $Userpass = $row['password'];
                                        $UserName = $row['user_name'];
                                        $Userlevel = $row['user_level'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserN ?></td>
                                        <td><?php echo $Userpass ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $Userlevel ?></td>
                                        
                                        <td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                       
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   
 
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>