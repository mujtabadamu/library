<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!----------------Navigation Bar----------------->
    <?php include 'navbar.php'; ?>
    <!----------------End of Navigation bar--------->
    <main class='home'> 
        <div class="container">
            <h2>Web base Cataloging System </h2>
            <p>It is an online web application designed by the researcher to
                manage library operations. It is a program designed with HTML, CSS and JavaScript for
                the front-end and PHP programming language for the back-end development
            </p>
            <ul>
                <li> <a href='book.php'>Books</a> </li>
                <li> <a href='staff.php'>Staff</a> </li>
                <li> <a href='borrowers.php'>Borrowers</a> </li>
            </ul>
        </div>
        <div>
            <img src="images/we.svg" width="100%" alt="images" />
        </div>
    </main>
</body>
</html>