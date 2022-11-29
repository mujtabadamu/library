<?php
include './util/connect.php';

$msg = '';

if (isset($_POST['submit'])) {
    $call = $_POST['Callnumber'];
    $title = $_POST['Title'];
    $author = $_POST['Author'];
    $DOP = $_POST['DOP'];
    $publisher = $_POST['Publisher'];
    $ISBN = $_POST['ISBN'];
    $pagination = $_POST['Pagination'];
    $shelf = $_POST['Shelf'];
    $fullname = $_POST['Fullname'];
    $reg = $_POST['Reg'];
    $phone = $_POST['Phone'];
    $status = $_POST['Status'];



    $sql = "INSERT INTO `borrowers` (`Callnumber`, `Title`, `Author`, `DOP`, `Publisher`, `ISBN`,`Pagination`, `Shelf`, `Fullname`, `Reg`, `Phone`, `Status`) 
    VALUES ('$call', '$title','$author','$DOP','$publisher','$ISBN', '$pagination', '$shelf', '$fullname', '$reg', '$phone', '$status')";

    if (mysqli_query($connect, $sql)) {
        $msg = "New Borrower Added Successfully";
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
    <title>Add borrowers</title>
</head>

<body>
    <?php include "navbar.php"; ?>

    <main>
        <div class="addStaff">
            <h2>Add New Borrower</h2>
            <h3 style="background:green; color:white; margin:4px 0px;"><?php echo $msg; ?></h3>

            <form method="post" class='borrowerForm'>
            <div>
                <div><label for="fn">Call Number: </label>
                    <input type="text" id="fn" class="input" placeholder="call number" name="Callnumber" />
                </div>
                <div><label for="fn">Book Title: </label>
                    <input type="text" id="fn" class="input" placeholder="Title" name="Title" />
                </div>
                <div><label for="ln">Author: </label>
                    <input id="ln" type="text" class="input" placeholder="Author" name="Author" />
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
            </div>
            <div>

                <div><label for="ph">Pagination: </label>
                    <input type="text" class="input" id="ph" placeholder="Pagination" name="Pagination" />
                </div>
                <div><label for="ph">Shelf: </label>
                    <input type="text" class="input" id="ph" placeholder="Shelf" name="Shelf" />
                </div>

                <div><label for="ph">Full Name: </label>
                    <input type="text" class="input" id="ph" placeholder="Full name" name="Fullname" />
                </div>

                <div><label for="ph">ID/STAFF Number: </label>
                    <input type="text" class="input" id="ph" placeholder="Id number" name="Reg" />
                </div>

                <div><label for="ph">Phone Number: </label>
                    <input type="text" class="input" id="ph" placeholder="080-xxx-xxx-xxx" name="Phone" />
                </div>
                <div style="display:none"><label for="gender">Status: </label>
                    <input type="radio" name="Status" value="Collect" checked />Collect
                    <!-- <input type="radio" name="Status" value="Return" />Return -->
                </div>

                <input type="submit" class="submit" name="submit" />
            </div>

            </form>
        </div>
    </main>
</body>

</html>