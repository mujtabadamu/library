<?php
include './util/connect.php';


$id = $_GET['borrowersId'];
$select = "SELECT * from `borrowers` where id=$id";
$find = mysqli_query($connect, $select);
$row = mysqli_fetch_assoc($find);
$id = $row['id'];
$call = $row['Callnumber'];
$title = $row['Title'];
$author = $row['Author'];
$dop = $row['DOP'];
$publisher = $row['Publisher'];
$isbn = $row['ISBN'];
$page = $row['Pagination'];
$shelf = $row['Shelf'];
$fullname = $row['Fullname'];
$Reg = $row['Reg'];
$phone = $row['Phone'];
$status = $row['Status'];


if (isset($_POST['submit'])) {

    $call = $_POST['Callnumber'];
    $title = $_POST['Title'];
    $author = $_POST['Author'];
    $dop = $_POST['DOP'];
    $publisher = $_POST['Publisher'];
    $isbn = $_POST['ISBN'];
    $page = $_POST['Pagination'];
    $shelf = $_POST['Shelf'];
    $fullname = $_POST['Fullname'];
    $Reg = $_POST['Reg'];
    $phone = $_POST['Phone'];
    $status = $_POST['Status'];

    $sql = "UPDATE `borrowers` SET `id`='$id',`Callnumber`='$call',`Title`='$title',`Author`='$author',`DOP`='$dop',`Publisher`='$publisher',`ISBN`='$isbn',`Pagination`='$page', `Shelf`='$shelf', `Fullname`='$fullname', `Reg`='$Reg',`Phone`='$phone', `Status`='$status' WHERE id='$id' ";

    // echo $fn;
    $result =  mysqli_query($connect, $sql);
    if ($result) {
        // echo "Updated Successfully";
        header('Location:borrowersRecord.php');
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
    <title>Update borrowers</title>
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
                    <div>Call number
                        <input type="text" class="input" placeholder="Call number" value="<?php echo $call ?>" name="Callnumber" />
                    </div>
                    <div>Title
                        <input type="text" class="input" placeholder="Title" value="<?php echo $title ?>" name="Title" />
                    </div>
                    <div>Author
                        <input type="text" class="input" placeholder="Author" value="<?php echo $author ?>" name="Author" />
                    </div>
                    <div><label>Date of Publication</label>
                    <input type="date" class="input" placeholder="DOP" name="DOP" value="<?php echo $dop ?>" />
                </div>
                <div>Publisher
                        <input type="text" class="input" placeholder="Publisher" name="Publisher" value="<?php echo $publisher ?>" />
                    </div>
                    <div>ISBN
                        <input type="text" class="input" placeholder="ISBN" name="ISBN" value="<?php echo $isbn ?>" />
                    </div>
                    <div>Pagination
                        <input type="text" class="input" placeholder="Pagination" name="Pagination" value="<?php echo $page ?>" />
                    </div>
                    <div>Shelf
                        <input type="text" class="input" placeholder="Shelf" name="Shelf" value="<?php echo $shelf ?>" />
                    </div>
                    <div>Full name
                        <input type="text" class="input" placeholder="Fullname" name="Fullname" value="<?php echo $fullname ?>" />
                    </div>
                    <div>Registration id
                        <input type="text" class="input" placeholder="reg" name="Reg" value="<?php echo $Reg ?>" />
                    </div>
                    <div>Phone number
                        <input type="text" class="input" placeholder="Phone number" name="Phone" value="<?php echo $phone   ?>" />
                    </div>
                    <div>Status:
                        <input type="radio" name="Status" value="Collect" <?php if ($status == 'Collect') echo 'checked="checked" ' ?> />Collect
                        <input type="radio" name="Status" value="Return" <?php if ($status == 'Return') echo 'checked="checked" ' ?> />Return
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