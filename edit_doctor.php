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
    if(isset($_POST['upload'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $designation=$_POST['designation'];
        $schedule=$_POST['schedule'];
     
        $id =$_POST['id'];
     
        mysqli_query($conn,"UPDATE doctor_upload SET name='$name', phone='$phone',designation='$designation',schedule='$schedule' WHERE id='$id'");
        echo "";
       
       
        
    }
    if(isset($_POST['edit'])){
        $id =$_POST['id'];
        $resultt =mysqli_query($conn,"SELECT * FROM doctor_upload WHERE id= '".$_POST['id']."'   ");
        $row=mysqli_fetch_assoc($resultt);
    
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Animated Login Form</title>
        <link rel="stylesheet" href="upload.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        
    </head>
    <body>
    <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la-accusoft"></span>CUET MEDICAL CENTRE</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    
                    <li><a href="admin_doctor.php"><span class="las la-igloo"></span>
                        <span>back</span></a>
                        <li><a href="index.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                    

                </ul>
            </div>
        </div>
        <header>
            <div class="user-wrapper">
            <?php 
                       $sel="select * from adminlogin";
                       $query=mysqli_query($conn,$sel);
                       $result=mysqli_fetch_assoc($query);
                   ?>
                <img src="Admin pannel/assets/image/profile.png" width="30px" height="30px" alt="">
                <div>
                <h4><?php echo $result['name'];?></h4>
                    <small>super admin</small>
                </div>
            
            </div>
        </header>
        <section id="upload_container">

            <form action="" method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="id" id="id"  value="<?php echo $row['id'] ;   ?>">
                <input type="text" name="name" id="name"  value="<?php echo $row['name'] ;   ?>">
                <input type="text" name="phone" id="phone"value="<?php echo $row['phone'] ;   ?>" >
                <input type="text" name="designation" id="designation"value="<?php echo $row['designation'] ;   ?>" >
                <input type="text" name="schedule" id="schedule"value="<?php echo $row['schedule'] ;   ?>" >
               
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
                <?php   } else{
                    echo '<script>
                    window.location.href="admin_doctor.php";
                    alert("Successfully updated")
                    </script>';
                }  ?>
</form>
</section>
</body>
</html>

