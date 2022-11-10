<?php
include './util/connect.php';

$msg = '';

if (isset($_POST['submit'])) {
    $title = $_POST['Title'];
    $author = $_POST['Author'];
    $DOP = $_POST['DOP'];
    $publisher = $_POST['Publisher'];
    $ISBN = $_POST['ISBN'];
    $pagination = $_POST['Pagination'];
    $shelf = $_POST['Shelf'];


    $sql = "INSERT INTO `book` (`Title`, `Author`, `DOP`, `Publisher`, `ISBN`,`Pagination`, `Shelf`) 
    VALUES ('$title','$author','$DOP','$publisher','$ISBN', '$pagination', '$shelf')";

    if (mysqli_query($connect, $sql)) {
        $msg = "New Book Added Successfully";
    } else {
        echo 'Error: ' . mysqli_error($connect);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "navbar.php"; ?>

    <main>
        <div class="addStaff">
            <h2>Add New Book</h2>
            <h3 style="background:green; color:white"><?php echo $msg; ?></h3>

            <form method="post">
                <div><label for="fn">Title: </label>
                    <input type="'text" id="fn" class="input" placeholder="Title" name="Title" />
                </div>
                <div><label for="ln">Author: </label>
                    <input id="ln" type="'text" class="input" placeholder="Author" name="Author" />
                </div>
                <div><label for="dob">Date of Publication</label>
                    <input type="date" class="input" placeholder="DOP" name="DOP" />
                </div>
                <div><label for="mn">Publisher: </label>
                    <input type="text" class="input" placeholder="Publisher" name="Publisher" />
                </div>
                <div><label for="isbn">ISBN: </label>
                    <input type="text" class="input" id="isbn" placeholder="ISBN" name="ISBN" />
                </div>

                <div><label for="ph">Pagination: </label>
                    <input type="number" class="input" id="ph" placeholder="Pagination" name="Pagination" />
                </div>
                <div><label for="ph">Shelf: </label>
                    <input type="text" class="input" id="ph" placeholder="Shelf" name="Shelf" />
                </div>


                <input type="submit" class="submit" name="submit" />
            </form>
        </div>
    </main>
</body>

</html>