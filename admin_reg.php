<?php
                $_servername="localhost";
                $username="root";
                $password="";
                $db_name="cmc";
                $conn=new mysqli($_servername,$username,$password,$db_name,3306);
                if($conn->connect_error){
                   die("connection failed".$cond->connect_error);
               }
                echo "";
                if(!session_id()){
                    session_start();
                }
                $user=$_SESSION['id'];
                if($user==true){
                
                }
                else{
                    header("location:login.php");
                }
            ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Registration</title>
        <link rel="stylesheet" href="admin_reg_style.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la-accusoft"></span>Registration</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="index.php"><span class="las la-igloo"></span>
                        <span>Back</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="user-wrapper">
                <?php 
                       $sel="select * from adminlogin";
                       $query=mysqli_query($conn,$sel);
                       $result=mysqli_fetch_assoc($query);
                   ?>
                    <img src="images/profile.png" width="30px" height="30px" alt="">
                    <div>
                    <h4><?php echo $result['name'];?></h4>
                        <small>super admin</small>
                    </div>
                
                </div>
            </header>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>"name="form" method="POST">
            <div class="fromm"></div>
            <h2>Registration form</h2>
            <input type="text" name="id"placeholder="Enter student ID" class ="box" required>
            <input type="text" name="name"placeholder="Enter student Name" class ="box"required>
            
            <input type="text" name="password"placeholder="Enter student password" class ="box"required>
            <button type="Submit"class="boxx">Submit</button>
            </div>
        </form>
        <?php

            if($_SERVER["REQUEST_METHOD"]=="POST"){

                
                $id=$_POST['id'];
                $name=$_POST['name'];
                $password=$_POST['password'];
                $sql="select id from reg where id='$id'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $count=mysqli_num_rows($result);

                if($count==1){
                    echo '<script>
                              window.location.href="admin_reg.php";
                              alert("Successfully Registered")
                              </script>';
                }
                else{
                    
                    $qry="insert into reg (id,name,password)values('$id','$name','$password')";
                    $insert=mysqli_query($conn,$qry);
                    if(!$insert){
                         header("Location:admin_reg.php");
                         echo '<script>
                         window.location.href="login_p.php";
                         alert("Registration completed")
                         </script>';
                    }
                }
            }
            
        ?>
    </body>
</html>