
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
                
                $user=$_SESSION['std_id'];
                if($user==true){
                
                }
                else{
                    header("location:user_login.php");
                }

            ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="user_pres.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la-accusoft"></span>PRESCRIBTION</h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="logout.php"><span class="las la-igloo"></span>
                        <span>Log OUT</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="user-wrapper">
                
                    <img src="images/Prescribtion.svg" width="30px" height="30px" alt="">
                    <div>
                    <h4><?php    if(isset($_SESSION['std_id'])){
                        echo ( $_SESSION['std_id']);
                        $std=$_SESSION['std_id'];
                        $sql="select * from prescription  where student_id='$std' order by id desc";
                        $result=mysqli_query($conn,$sql);
                        

                        
                       
                    }
                        ?></h4>
                        <h4>Student</h4>
                    </div>
                
                </div>
            </header>
            
        </div>
        <table>
            <div class="card-body">
                <thread>
                    <tr>
                        
                        <th>Medicine Name</th>
                        <th>Days</th>
                        <th>Dose</th>
                        <th>Date</th>
                        <th>Prescribed by</th>
                    </tr>
                </thread>
                <tbody>
                <?php    while($row = mysqli_fetch_array($result)){    ?>
                    <tr>
                    
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['days'];?></td>
                        <td><?php echo $row['dose'];?></td>
                        <td><?php echo $row['date'];?></td>
                        <td><?php echo $row['pres'];?></td>
                        
                    </tr>
                    <?php }?>
                  
                </tbody>
            </div>
        </table>
    </body>
</html>