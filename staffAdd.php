<?php
include './util/connect.php';

$msg = '';

if (isset($_POST['submit'])) {
    $fn = $_POST['Firstname'];
    $ln = $_POST['Lastname'];
    $mn = $_POST['Middlename'];
    $dob = $_POST['DOB'];
    $gender = $_POST['Gender'];
    $ph = $_POST['Phonenumber'];
    $status = $_POST['Status'];
    $add = $_POST['Address'];

    $sql = "INSERT INTO `staff` (`Firstname`, `Lastname`, `Middlename`, `Gender`, `DOB`,`Phonenumber`, `Status`, `Address`) 
    VALUES ('$fn','$ln','$mn','$gender','$dob', '$ph', '$status', '$add')";

    if (mysqli_query($connect, $sql)) {
        $msg = "New Staff Added Successfully";
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
    <title>Add staff</title>
</head>

<body>
    <?php include "navbar.php"; ?>

    <main>
        <div class="addStaff">
            <h2>Add New Staff</h2>
            <h3 style="background:green; color:#fff"><?php echo $msg; ?></h3>

            <form method="post">
                <div><label for="fn">Firstname: </label>
                    <input type="text" id="fn" class="input" placeholder="Firstname" name="Firstname" />
                </div>
                <div><label for="ln">Lastname: </label>
                    <input id="ln" type="text" class="input" placeholder="Lastname" name="Lastname" />
                </div>
                <div><label for="mn">Middle name: </label>
                    <input type="text" class="input" placeholder="Middlename" name="Middlename" />
                </div>
                <div><label for="gender">Gender: </label>
                    <input type="radio" placeholder="Gender" name="Gender" value="Male" />Male
                    <input type="radio" placeholder="Gender" name="Gender" value="Female" />Female
                </div>
                <div><label for="dob">Date of Birth</label>
                    <input type="date" class="input" placeholder="DOB" name="DOB" />
                </div>
                <div><label for="ph">Phone number: </label>
                    <input type="text" class="input" id="ph" placeholder="Phonenumber" name="Phonenumber" />
                </div>
                <div><label for="status">Marital status: </label>
                    <input type="radio" placeholder="Gender" name="Status" value="Single" />Single
                    <input type="radio" placeholder="Gender" name="Status" value="Married" />Married
                </div>
                <div><label for="add">Address: </label>
                    <textarea name="Address" class="input" placeholder="Address"></textarea>
                </div>
                <input type="submit" class="submit" name="submit" />
            </form>
        </div>
    </main>
</body>

</html>