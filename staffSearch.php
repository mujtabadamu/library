<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Staff Records</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php' ?>

    <main class='searchDiv'>
        <div>
            <h3>Search and Delete Staff</h3>
            <form method="GET" class="searchForm">
                <input type="search" placeholder="search by first or lastname" name="search" /><button><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <table border="1px">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Middlename</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Address</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './util/connect.php';

                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];

                        $query = "SELECT * FROM staff WHERE CONCAT(Firstname, Lastname) LIKE '%$search%' ";
                        $qurey_run = mysqli_query($connect, $query);

                        if (mysqli_num_rows($qurey_run) > 0) {

                            foreach ($qurey_run as $item) {
                                echo '<tr>
                                    <td>' . $item['id'] . '</td>
                                    <td>' . $item['Firstname'] . '</td>
                                    <td>' . $item['Lastname'] . '</td>
                                    <td>' . $item['Middlename'] . '</td>
                                    <td>' . $item['DOB'] . '</td>
                                    <td>' . $item['Gender'] . '</td>
                                    <td>' . $item['Phonenumber'] . '</td>
                                    <td>' . $item['Status'] . '</td>
                                    <td>' . $item['Address'] . '</td>
                                    <td>
                                    <button class="update"><a href="staffUpdateForm.php?staffId=' . $item['id'] . '">Update</a></button>
                                    <button class="delete"><a href="delete.php?staffid=' . $item['id'] . '">Delete</a></button>
                                </td>
                                    
                                   </tr>';
                            }
                        } else {
                            echo '<tr>
                            <td colspan="12" style="background:red; color:#fff"><center>No Record Found</center></td>
                                </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>