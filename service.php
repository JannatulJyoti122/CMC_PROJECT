

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
    $sql="select * from service";
    $all_doctor=$conn->query($sql);
//    

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
                <li><a href="home.php"><span class="las la-igloo"></span>
                        <span>HOME</span></a>
                    <li><a href="index.php"><span class="las la-igloo"></span>
                        <span>REGISTRATION</span></a>
                        <li><a href="user_login.php"><span class="las la-igloo"></span>
                        <span>LOGIN</span></a>
                    

                </ul>
            </div>
        </div>
        <div class="main-content">
           
            <main>
                <?php
                    while($row=mysqli_fetch_assoc($all_doctor)){
                
                
                ?>
                <div class="card">
                    <div class ="image">
                        <img src="./service/<?php echo $row['image']; ?>" alt="">
                    </div>
                    <div calss ="caption">
                        <p class="Name">Service:<?php echo $row["name"];?></pp>
                        <p class="propertices">propertices:<?php echo $row["properties"];?></p>
                        
                        
                    </div>
                </div>
                <?php } ?>
            </main>
        </div>
    </body>
</html>