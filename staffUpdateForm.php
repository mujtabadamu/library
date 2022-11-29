<?php
include './util/connect.php';


$id = $_GET['staffId'];
$select = "SELECT * from `staff` where id=$id";
$find = mysqli_query($connect, $select);
$row = mysqli_fetch_assoc($find);
$fname = $row['Firstname'];
$lname = $row['Lastname'];
$mname = $row['Middlename'];
$DOB = $row['DOB'];
$Gender = $row['Gender'];
$Ph = $row['Phonenumber'];
$Status = $row['Status'];
$Add = $row['Address'];


if (isset($_POST['submit'])) {
    $fn = $_POST['Firstname'];
    $ln = $_POST['Lastname'];
    $mn = $_POST['Middlename'];
    $dob = $_POST['DOB'];
    $gender = $_POST['Gender'];
    $ph = $_POST['Phonenumber'];
    $status = $_POST['Status'];
    $add = $_POST['Address'];

    $sql = "UPDATE `staff` SET `id`='$id',`Firstname`='$fn',`Lastname`='$ln',`Middlename`='$mn',`Gender`='$gender',`DOB`='$dob',`Phonenumber`='$ph',`Status`='$status',`Address`='$add' WHERE id='$id' ";

    // echo $fn;
    $result =  mysqli_query($connect, $sql);
    if ($result) {
        // echo "Updated Successfully";
        header('Location:stafftable.php');
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
    <title>Staff Update</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!----------------Navigation Bar----------------->
    <?php include 'navbar.php'; ?>
    <!----------------End of Navigation bar--------->
    <main>
        <div class="addStaff">
            <div>
                <h2>Update <?php echo $fname; ?>  <?php echo $lname; ?> Record </h2>
                <form method="post">
                    <div>Firstname
                        <input type="text" class="input" placeholder="Firstname" value="<?php echo $fname ?>" name="Firstname" />
                    </div>
                    <div>Lastname
                        <input type="text" class="input" placeholder="Lastname" value="<?php echo $lname ?>" name="Lastname" />
                    </div>
                    <div>Middlename
                        <input type="text" class="input" placeholder="Middlename" value="<?php echo $mname ?>" name="Middlename" />
                    </div>
                    <div>Gender:
                        <input type="radio" placeholder="Gender" name="Gender" value="Male" <?php if ($Gender == 'Male') echo 'checked="checked" ' ?> />Male
                        <input type="radio" placeholder="Gender" name="Gender" value="Female" <?php if ($Gender == 'Female') echo 'checked="checked" ' ?> />Female
                    </div>
                    <div><label>Date of Birth</label>
                        <input type="date" class="input" placeholder="DOB" name="DOB" value="<?php echo $DOB ?>" />
                    </div>
                    <div>Phone number 
                        <input type="text" class="input" placeholder="Phonenumber" name="Phonenumber" value="<?php echo $Ph ?>" />
                    </div>
                    <div>Status:
                        <input type="radio" name="Status" value="Single" <?php if ($Status == 'Single') echo 'checked="checked" ' ?> />Single
                        <input type="radio" name="Status" value="Married" <?php if ($Status == 'Married') echo 'checked="checked" ' ?> />Married
                    </div>
                    <div>Address
                        <textarea name="Address" class="input" placeholder="Address"><?php echo $Add ?></textarea>
                    </div>
                    <button class="submit" name="submit">Update</button>
                </form>
            </div>


        </div>

    </main>



</body>

</html>