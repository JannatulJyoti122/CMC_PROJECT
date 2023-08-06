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
        <title>Admin Id</title>
        <link rel="stylesheet" href="admin_prescription.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la-accusoft"></span>PRESCRIBTION</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
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
                    </li>
                    <li><a href="index.php"><span class="las la-igloo"></span>
                        <span>Back</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="user-wrapper">
                    <img src="images/Prescribtion.svg" width="30px" height="30px" alt="">
                    <div>
                    <h4><?php
                    if(isset($_SESSION['id'])){
                        echo ($_SESSION['id']);
                    }
                    ?></h4>
                        <small>Student</small>
                    </div>
                
                </div>
            </header>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>"name="form" method="POST">
        <div class="form">
            <h2>Prescribtion form</h2>
            <input type="text" name="name"placeholder="Enter Medicine Name" class ="box" required>
            <input type="text" name="dose"placeholder="Enter Dose" class ="box" required>
            <input type="text" name="days"placeholder="Enter days" class ="box" required>
            <button type="Submit"class="boxx">Submit</button>
        </div>
</form>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    
    $student_id=$_SESSION['id'];
    $name=$_POST['name'];
    $days=$_POST['days'];
    $dose=$_POST['dose'];
    $date=$_SESSION['date'];
    $pres=$_SESSION['by'];

        $qry="insert into prescription (student_id,name,days,dose,date,pres)values('$student_id','$name','$days','$dose','$date','$pres')";
        $insert=mysqli_query($conn,$qry);
        if(!$insert){
             echo '<script>
             window.location.href="admin_prescription.php";
             alert("Registration completed")
             </script>';
        }
}

?>
    </body>
</html>