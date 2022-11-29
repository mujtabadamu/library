<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!----------------Navigation Bar----------------->
    <?php include 'navbar.php'; ?>
    <!----------------End of Navigation bar--------->
    <main class='booksCont'>
        <div class="mainStaff">
            <div>
                <a href="bookAdd.php"><i class="fa fa-book fa-5x" aria-hidden="true"></i>
                <p>Add book</p>
                </a>
            </div>
            <div>
                <a href="bookRecord.php"><i class="fa fa-list-alt fa-5x" aria-hidden="true"></i>
                <p>View all</p>
                </a>
            </div>
            <div>
                <a href="bookSearch.php"><i class="fa fa-search fa-5x" aria-hidden="true"></i>
                <p>Search book</p>
                </a>
            </div>
        </div>
    </main>
</body>
</html>