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
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>registratio form</title>
        <link rel="stylesheet"href="cmc_reg_style.css">
    </head>
    <body>
        
        <div class ="form">
            <header class ="header">
                <div class="navbar">
                    <img src="images/cuet_logo.png" class="logo">
                    <nav>
                        <ul>
                           <li><a href="home.php">HOME</a></li> 
                          
                           <li><a href="user_login.php">LOG IN</a></li> 
                        </ul>
                    </nav>
               
                </header>
            <h2>Registration Form</h2>
            <form action="https://formsubmit.co/u1904122@student.cuet.ac.bd" method="POST">
                <input type="Text"name="Name"placeholder="Name"autocomplete="off"class="box"required>
                <input type="email"name="Email"placeholder="Email"autocomplete="off"class="box"required>
                <input type="text"name="ID"placeholder="ID"autocomplete="off"class="box"required>
                <input type="text"name="Password"placeholder="Password"autocomplete="off"class="box"required>
                <input type="text"name="Transactin ID"placeholder="Transaction ID"autocomplete="off"class="box"required>
                <input type="hidden"name="_captcha" value="false">
                <input type="hidden"name="_template" value="table">
                <button type="Submit"class="box"id="submit" name="submit">Submit</button>
            </form>
        </div>
        <?php
        
            if(isset($_POST['submit'])){
                header("location:home.php");
            }
        
        ?>
    </body>
</html>