<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Borrowers</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php' ?>

    <main class='searchDiv'>
        <div>
            <h3>Search Borrowers  Delete and Update</h3>
            <form method="GET" class="searchForm">
                <input type="search" placeholder="search by name or title" name="search" /><button><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
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
                        <th>Borrower Fullname</th>
                        <th>Phone number</th>
                        <th>Status</th>
                        <th>Action</th>

                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './util/connect.php';

                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];

                        $query = "SELECT * FROM borrowers WHERE CONCAT(Fullname, Title) LIKE '%$search%' ";
                        $qurey_run = mysqli_query($connect, $query);

                        if (mysqli_num_rows($qurey_run) > 0) {

                            foreach ($qurey_run as $item) {
                                echo '<tr>
                                    <td>' . $item['id'] . '</td>
                                    <td>' . $item['Title'] . '</td>
                                    <td>' . $item['Author'] . '</td>
                                    <td>' . $item['DOP'] . '</td>
                                    <td>' . $item['Publisher'] . '</td>
                                    <td>' . $item['ISBN'] . '</td>
                                    <td>' . $item['Pagination'] . '</td>
                                    <td>' . $item['Shelf'] . '</td>
                                    <td>' . $item['Fullname'] . '</td>
                                     <td>' . $item['Phone'] . '</td>
                                    <td>' . $item['Status'] . '</td>
                                    <td>
                                    <button class="update"><a href="borrowersUpdate.php?borrowersId=' . $item['id'] . '">Update</a></button>
                                    <button class="delete"><a href="borrowersDelete.php?borrowersId=' . $item['id'] . '">Delete</a></button>
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