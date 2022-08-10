<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "kaleyra_assignment";
    $conn = mysqli_connect($host,$user,$password,$db);
    if(!$conn){
        echo "<img src = './../images/serverError.png' alt = 'This is an image' style = 'margin:50px 300px150px 0px 0px 50px'>";
        echo "Connection failed : ".mysqli_connect_error();
        die();
    }

    if(isset($_POST["login-btn"])){
        $email = $_POST["email"];
        $_SESSION['email'] = $email;
        $psw = $_POST["psw"];
        $sql = "select * from user_details where email = '".$email." 'AND Password = '".$psw."'limit 1";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1){
            header("Refresh:0;url=pricing.php");
        }else{
            echo "<h1 style ='color:red;text-align:center;display:block;margin: 10px 0px 10px 0px;'>Invalid Credentials</h1>";
            echo "<img src = './../images/401-Unauthorized-t.jpg' alt = 'This is an image' style ='width:105%;height:699px;margin: 0px 0px 0px -9px;'>";
            header("Refresh:5;url=Login.php");
        }
    }
?>
