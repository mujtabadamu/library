<?php
include './util/connect.php';
$msg = "";
if(isset($_POST['submit'])){
    $uname =$_POST['uname'];
    $password = $_POST['password'];
    $sql = "SELECT * from login where username ='$uname' AND password='$password' limit 1";
    $qurey_run = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($qurey_run);
    if($count == 1 ){
            header('Location:home.php');
         }else{    $msg =  "Invalid username or password"; }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!----------------Navigation Bar----------------->
    <nav>
        <div class="container"> 
            <input type="checkbox" id="bar">
            <label for="bar">
        <div class="bar">
            <div class="bars"></div>
            <div class="bars"></div>
            <div class="bars"></div>
        </div>
        </label>

            <div class="nav">
            <ul>
                <a href="index.php" ><li>Home</li></a>
                <a href="book.php" ><li>Book</li></a>
                <a href="staff.php"><li>Staff</li></a>
                <a href="borrowers.php"><li>Borrowers</li></a>
                <a href=""><li>About</li></a>  
              
            </ul>
            
        </div>
            
            </div>
    
    </nav>
    <!----------------End of Navigation bar--------->
    <main class=''> 
        <div class="loginForm">
        <form method="POST">
            <input name="uname" required type="text" placeholder="username" />
            <input name="password" required type="password" placeholder="password" />
            <button name="submit">Submit</button> 
            <p class='errorMsg'><?php echo $msg; ?></p>   
        </form>  
        </div>
    </main>
</body>
</html>