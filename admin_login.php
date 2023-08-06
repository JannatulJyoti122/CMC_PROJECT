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

            ?>




<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=design-width, initial-scale=1.0">
        <title>CUET Medical Center</title>
        <link rel="stylesheet" href="login.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:weight@400;700&display=swap"rel="stylesheet">
    </head>
    <body>
        <div class="containr">
            

            <header class="header">
                <img src="images/cuet_logo.png" class="logo">
                <div class="header-link">
                    <a class="link" href="home.php">HOME</a> 
                    
                    <a class="link" href="cmc_reg.php">REGISTRATION</a> 
                  
                </div>

            </header>
           <div class="center">
       
      
            

            
        


                <h1>Login</h1>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>"name="form" method="POST">
    
                    <div class="text_field">
                        
                        <input type="text" id="id" class="form-control"name="id" >
                        <label>ID</label>
                    </div>
    
    
                    <div class="text_field">
                       <span class="icon"><ion-icon name="lock-closed"name="Password"></ion-icon></span>
                       <input type="password" id="password" class="form-control"name="password" >
                       <label>Password</label>
                    </div>
    
    
                   <input type="submit" id="btn"value="login" name="login">
    
                </form>
    
            </div>
                
        </div>
        <?php
   

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $id=$_POST['id'];
            $password=$_POST['password'];
            $sql="select * from adminlogin where id='$id' and pass='$password'";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $count=mysqli_num_rows($result);
                    $_SESSION['id']=$_POST['id'];
                    if($count==1){
                        
                        header("Location:index.php");
                    }
                    else{
                        echo '<script>
                              window.location.href="login.php";
                              alert("Login failed.Invalid email or password!!")
                              </script>';
                              
                    }
        }



        ?>
    </body>
</html>