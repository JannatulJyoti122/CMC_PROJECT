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
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="index_style.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="sidebar">






            <div class="sidebar-brand">
                <h2><span class="lab la-accusoft"></span>CUET MEDICAL CENTRE</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    
                <li><a href="admin_reg.php"><span class="las la-igloo"></span>
                        <span> Registration</span></a>
                    </li>
                    <li><a href="admin_id.php"><span class="las la-igloo"></span>
                        <span>Update Prescribtion</span></a>
                    </li>
                    <li><a href="logout.php"><span class="las la-igloo"></span>
                        <span>Logout</span></a>
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
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <a href="admin_doctor.php">
                            <span>Doctor Roster</span></a>
                        </div>
                        <div>
                            <span class="las la-users1"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <a href="admin_ambulance.php">
                            <span>Ambulance</span></a>
                        </div>
                        <div>
                            <span class="las la-users2"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            
                        </div>
                        <div>
                            <a href="admin_medicine.php">
                            <span class="las_la_users3">Medicine info</span></a>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <a href="admin_service.php">
                            <span>Services</span></a>
                        </div>
                        <div>
                            <span class="las la-users4"></span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>