<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'sideBar.php' ?>

    <main>
        <h3>Staff Table Record</h3>
        <table border="1px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date of Publication</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>Pagination</th>
                    <th>Shelf</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './util/connect.php';
                $sql = "SELECT * from `book` ";
                $result = mysqli_query($connect, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $fn = $row['Title'];
                        $ln = $row['Author'];
                        $mn = $row['DOP'];
                        $dob = $row['Publisher'];
                        $gender = $row['ISBN'];
                        $ph = $row['Pagination'];
                        $status = $row['Shelf'];

                        echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $fn . '</td>
                        <td>' . $ln . '</td>
                        <td>' . $mn . '</td>
                        <td>' . $dob . '</td>
                        <td>' . $gender . '</td>
                        <td>' . $ph . '</td>
                        <td>' . $status . '</td>
                      
                        <td>
                        <button class="update"><a href="bookUpdate.php?bookId=' . $id . '">Update</a></button>
                        <button class="delete"><a href="delete.php?staffid=' . $id . '">Delete</a></button>
                    </td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
        </div>

        <div id="Paris" class="tabcontent">


        </div>

        <div id="Tokyo" class="tabcontent">

        </div>
        </div>



    </main>

</body>

</html>