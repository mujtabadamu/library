<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowers Record</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'navbar.php' ?>

    <main class='records'>
        <h3>Borrowers Record</h3>
        <table border="1px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Call Number</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date of Publication</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>Pagination</th>
                    <th>Shelf</th>
                    <th>Full name</th>
                    <th>Reg</th>
                    <th>Phone number</th>
                    <th>Status</th>
                
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './util/connect.php';
                $sql = "SELECT * from `borrowers` ";
                $result = mysqli_query($connect, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
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

                      
                        echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $call . '</td>
                        <td>' . $title . '</td>
                        <td>' . $author . '</td>
                        <td>' . $dop . '</td>
                        <td>' . $publisher . '</td>
                        <td>' . $isbn . '</td>
                        <td>' . $page . '</td>
                        <td>' . $shelf . '</td>
                        <td>' . $fullname . '</td>
                        <td>' . $Reg . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $status . '</td>
                      
                        <td>
                        <button class="update"><a href="borrowersUpdate.php?borrowersId=' . $id . '">Update</a></button>
                        <button class="delete"><a href="borrowersDelete.php?borrowersId=' . $id . '">Delete</a></button>
                    </td>
                    </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
     
    </main>

</body>

</html>