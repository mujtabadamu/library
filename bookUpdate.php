<?php
include './util/connect.php';


$id = $_GET['bookId'];
$select = "SELECT * from `book` where id=$id";
$find = mysqli_query($connect, $select);
$row = mysqli_fetch_assoc($find);
$title = $row['Title'];
$author = $row['Author'];
$DOP = $row['DOP'];
$publisher = $row['Publisher'];
$ISBN = $row['ISBN'];
$pagination = $row['Pagination'];
$shelf = $row['Shelf'];

if (isset($_POST['submit'])) {
    $title = $_POST['Title'];
    $author = $_POST['Author'];
    $DOP = $_POST['DOP'];
    $publisher = $_POST['Publisher'];
    $ISBN = $_POST['ISBN'];
    $pagination = $_POST['Pagination'];
    $shelf = $_POST['Shelf'];

    $sql = "UPDATE `book` SET `id`='$id',`Title`='$title',`Author`='$author',`DOP`='$DOP',`Publisher`='$publisher',`ISBN`='$ISBN',`Pagination`='$pagination',`Shelf`='$shelf' WHERE id='$id' ";

    // echo $fn;
    $result =  mysqli_query($connect, $sql);
    if ($result) {
        echo "Updated Successfully";
        header('Location:bookRecord.php');
    } else {
        die(mysqli_error($connect));
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Update</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!----------------Navigation Bar----------------->
    <?php include 'navbar.php'; ?>
    <!----------------End of Navigation bar--------->
    <main>
        <div class="addStaff">
           
            <div>

                <form method="post">
                    <div>Title
                        <input type="text" class="input" placeholder="Title" value="<?php echo $title ?>" name="Title" />
                    </div>
                    <div>Author
                        <input type="text" class="input" placeholder="Author" value="<?php echo $author ?>" name="Author" />
                    </div>
                    <div>Date of Publication
                        <input type="date" class="input" placeholder="Date of publication" value="<?php echo $DOP ?>" name="DOP" />
                    </div>

                    <div>Publication
                        <input type="text" class="input" placeholder="Publisher" name="Publisher" value="<?php echo $publisher ?>" />
                    </div>
                    <div>ISBN
                        <input type="text" class="input" placeholder="ISBN" name="ISBN" value="<?php echo $ISBN ?>" />
                    </div>
                    <div>Pagination
                        <textarea name="Pagination" class="input" placeholder="Pagination"><?php echo $pagination ?></textarea>
                    </div>
                    <div><label for="ph">Shelf: </label>
                        <input type="text" class="input" id="ph" placeholder="Shelf" name="Shelf" value="<?php echo $shelf; ?>" />
                    </div>


                    <button class="submit" name="submit">Update</button>
                </form>
            </div>


        </div>

    </main>

    <footer>
        <h1>Footer ele</h1>
    </footer>

</body>

</html>