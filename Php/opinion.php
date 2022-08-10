<?php
    session_start();
    // if($_POST['optB'] == "Opted inB"){
    //     $_SESSION['optB'] = "Opted inB";
    // }if($POST['optB'] == "Opted outB"){
    //     $_SESSION['optB'] = "Opted outB";
    // }
    
    // if($_POST['optS'] == "Opted inS"){
    //     $_SESSION['optS'] = "Opted inS";
    // }if($POST['optS'] == "Opted outS"){
    //     $_SESSION['optS'] = "Opted outS";
    // }
    // $_SESSION['opt'] = $_POST['opt'];
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
    $sql = "select * from opinion where Breakfast = 1";
    $result1 = mysqli_query($conn,$sql);
    $result1 =mysqli_num_rows($result1); 
    $sql = "select * from opinion where Dinner = 1";
    $result2 = mysqli_query($conn,$sql);
    $resutl2 = mysqli_num_rows($result2)
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="./../CSS/opinion.css">
    <title>Kaleyra_Assignment</title>
</head>

<body>
    <marquee>Opt any one of the breakfast or dinner</marquee>   
    <div class="card-deck">
        
        <div class="card">
            <img class="card-img-top" src="./../Images/breakfast.jpg" alt="Card image cap">
                <label for="Opted in" >
                    <input type="radio" id="optB" name="optB" value="Opted inB"> Opt In</label>
                <label for="Opted out" >
                    <input type="radio" id="optB" name="optB" value="Opted outB"> Opted Out</label>
            <h4>Opted Count : <?php echo $result1?></h4>  
            <a href="./OptedPage.php">Submit</a>   
        </div>
        
        
            <div class="card">
                <img class="card-img-top" src="./../Images/dinner.jpg" alt="Card image cap">
                
                <form method = "POST">
                    <label for="html">
                    <input type="radio" id="optS" name="optS" value="Opted inS">
                    Opt In</label>
                    <label for="html">
                    <input type="radio" id="optS" name="optS" value="Opted outS">
                    Opt Out</label>
                    <h4>Opted Count : <?php echo $result1?></h4>
                    <a href="./OptedPage.php">Submit</a>
                </form>
            </div>
        
    </div> 
</body>
    <script>
        $('input[type=radio]').click(function(e){
            var gender = $(this).val(); 
            $('.optB').html(gender);
		
        });
    </script>
</html>