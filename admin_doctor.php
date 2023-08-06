

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
    $sql="select * from doctor_upload";
    $all_doctor=$conn->query($sql);
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
        <link rel="stylesheet" href="admin_doctor.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la-accusoft"></span>CUET MEDICAL CENTRE</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                <li><a href="upload.php"><span class="las la-igloo"></span>
                        <span>Add New Doctor</span></a>
                    <li><a href="index.php"><span class="las la-igloo"></span>
                        <span>back</span></a>
    
                    

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
                <?php
                    while($row=mysqli_fetch_assoc($all_doctor)){
                
                
                ?>
                <div class="card">
                    <div class ="image">
                        <img src="./image/<?php echo $row['image']; ?>" alt="">
                    </div>
                    <div calss ="caption">
                        <p class="name">Name:<?php echo $row["name"];?></p>
                        <p class="phone">phone:<?php echo $row["phone"];?></p>
                        <p class="designation">designation:<?php echo $row["designation"];?></p>
                        <p class="Name">schedule:<?php echo $row["schedule"];?></p>
                        <form action="edit_doctor.php" method ="POST">
                            <input type="hidden"name="id" value="<?php  echo $row['id']    ?>">
                            <input type="submit" name="edit" class="edit"value="EDIT"></input>
                        </form>
                        <form action="delete_doctor.php" method ="POST">
                            <input type="hidden"name="id" value="<?php  echo $row['id']    ?>">
                            <input type="submit" name="delete" class="delete"value="DELETE"></input>
                        </form>
                        
                    </div>
                </div>
                <?php } ?>
            </main>
        </div>
    </body>
</html>