<?php
if(isset($_POST['name'])){
    $servername="localhost";
    $username="root";
    $password="";
    
    
    $con = mysqli_connect($servername,$username,$password);
    
    //check db connect
    if(!$con){
        die("Connection Failed:".mysqli_connect_error());
    }
    echo "Connection Fuck";
    
    $name = $_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $address =$_POST['address'];
    $whereto =$_POST['location'];
    $howm =$_POST['guests'];
    $arrival =$_POST['arrivals'];
    $leaving =$_POST['leaving'];
    
    $sql ="INSERT INTO `users`.`book` (`name`, `email`, `phone`, `address`, `whereto`, `howm`, `arrival`, `leaving`, `date`)
     VALUES ('$name', '$email', '$phone', '$address', '$whereto', '$howm', '$arrival', '$leaving', current_timestamp());
    ";
    echo $sql;
    
    if($con->query($sql) == true){
       echo "Successfully Connected";
    }
    else{
       echo"ERROR: $sql <br> $con->error";
    }
    $con->close();
    }