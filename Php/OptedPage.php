<?php 
    session_start();
    $break = $_GET['break'];
    $choosen = "";
    if($break == 0){
        $dinner = 1;
        $choosen = "Dinner";
    }else{
        $choosen = "Breakfast";
    }
    echo $_SESSION['optB'],$_SESSION['optS'];
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
    $sql = "Insert into opinion(id,Breakfast,Dinner) values($id,$break,$dinner)";
    if(mysqli_query($conn,$sql)){
        echo "Values are inserted successfully!!";
    }else{
        echo "Something Went Wrong";
    }
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./../CSS/opted.css">
    <title>Kaleyra_Assignment</title>
</head>

<body>
    <div class="container">
        <h1> Thank you for opting <?php echo $choosen?></h1>

        
    </div>
</body>

</html>
