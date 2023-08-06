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
    if(isset($_POST['delete']))
    {
        $id=$_POST['id'];
        $query="DELETE FROM medicine WHERE id='$id'";
        $query_run=mysqli_query($conn,$query);
        if($query_run)
        {
            echo '<script>
                              window.location.href="admin_medicine.php";
                              alert("Successfully deleted")
                              </script>';
        }
    }
?>
