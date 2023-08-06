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



<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=design-width, initial-scale=1.0">
        <title>CUET Medical Center</title>
        <link rel="stylesheet" href="home.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:weight@400;700&display=swap"rel="stylesheet">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  
	    
    </head>
    <body>
        <div class="containr">
            

            <header class="header">
                <img src="images/cuet_logo.png" class="logo">
                <div class="header-link">
                    <a class="link" href="home.php">HOME</a> 
                    
                    <a class="link" href="cmc_reg.php">REGISTRATION</a> 
                    <a class="link" href="user_login.php">LOG IN</a>
                </div>

            </header>
              
            <div class="title">
                 <h1>CUET Medical Center</h1><br>
            <p>we will write later thank u!!</p>
            </div>
           <div class="content">

            <h1> Stay Safe, Stay Healthy!!!!!</h1>
           </div>
          </div>
            <!--home section end-->
            <!--services section start-->
            <div class="hed">
                
                <h2>Available Services</h2>
            </div>

                <div class ="Services"  >
                <div class="card">
                    
                    <i class="fas fa-medical icon"></i>
                    <h5>Services</h5>
                    <p>available services.</p>
                    <a href="service.php">
                    <button>Learn more<i class="fas fa-chevron-right"></i></button></a>
                </div>
                <div class="card">
                    <i class="fas fa-medical icon"></i>
                    <h5>ambulance</h5>
                    <p>available services.</p>
                    <a href="ambulance.php">
                    <button>Learn more<i class="fas fa-chevron-right"></i></button></a>
                    <a href="ambulance-section"></a>
                </div>
                <div class="card">
                    <i class="fas fa-medical icon"></i>
                    <h5>Doctor roster</h5>
                    <p>available doctor.</p>
                    <a href="doctor.php">
                    <button>Learn more<i class="fas fa-chevron-right"></i></button></a>
                </div>
                <div class="card">
                    <i class="fas fa-medical icon"></i>
                    <h5>Medicines</h5>
                    <p>available medicine.</p>
                    <a href="medicine.php">
                    <button>Learn more<i class="fas fa-chevron-right"></i></button></a>
                </div>
            </div>
        
           <!--about us design----->
 <div class="about-section">
    <h1 class="aboutus">About us</h1>
    <div class="about">
    <div class="about-left">
        <img src="images/CUETMedical.jpg" alt="">
    </div>
    <div class ="about-right">
        <h2>Information of CUET Medical Center</h2><br/><br/>
        <p>CUET is situated in the district of Chittagong under Chittagong Division. It is in the Pahartali union under Raozan sub-district, by the north side of the Chittagong-Kaptai road about 20 kilometers from the center of Chittagong. The 420 Megawatt Raozan Thermal Power Plant is situated opposite to the campus. Karnaphuli Hydroelectric Power Station, the largest source of hydroelectricity of the country, is situated in Kaptai, about 25 kilometers from CUET.<br/>
            <br/>The University Medical Center is equipped for primary care, quarantine, sickbed exam appearance, few diagnostics but serious cases are referred to a local hospital 10 kilometers away or to the city hospital. As present, construction of a new building for the medical center is underway.  
        </p>
    </div>

    </div>

 </div>
 
 

<div class="footer-section"> 
    <h1>CUET Medical Center</h1>
    <div class="container">
        <div class="box">
            <h3>quick links</h3>
            <div class="icon">
                <a href=""><i class="fas fa-chevron-right"></i></i>HOME</a>
              
                <a href=""><i class="fas fa-chevron-right"></i>REGISTER</a>
                <a href=""><i class="fas fa-chevron-right"></i>LOGIN</a>
            </div>
        </div>
        <div class="box">
            <h3>OUR services</h3>
            <div class="icon">
                <a href=""><i class="fas fa-chevron-right"></i>Doctor Roaster</a>
                <a href=""><i class="fas fa-chevron-right"></i>Ambulance Services</a>
                <a href=""><i class="fas fa-chevron-right"></i>Medicines</a>
                <a href=""><i class="fas fa-chevron-right"></i>Disease Services</a>
            </div>
        </div>
        <div class="box">
            <h3>Contact Info</h3>
            <div class="icon">


<a href=""><i class="fa-solid fa-phone"></i>+06341266578</a>
                <a href=""><i class="fa-solid fa-phone"></i>+111345754</a>
                <a href=""><i class="fa-solid fa-envelope"></i>cuetmedicalcenter@gmail.com</a>
                <a href=""><i class="fa-solid fa-envelope"></i>emailcmcgamil.com</a>
                <a href=""><i class="fa-solid fa-location-dot"></i></i>cuet-1266578</a>
            </div>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <div class="icon">
                <a href=""><i class="fab fa-facebook-fa" style="color: #151df4;">facebook</i></a> 
                <a href=""><i class="fab fa-twitter"></i>twiter</a>
                <a href=""><i class="fab fa-instagram"></i>instagram</a>
                <a href=""><i class="fab fa-linkedin-in"></i>linkedin</a>
            </div>
        </div>
    </div>
    

</div>
</body>
</html>