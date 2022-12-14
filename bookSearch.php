<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Books</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
    <script defer src="script.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <main class='searchDiv'>
        <div>
            <h3>Search Books Delete or Update</h3>
            <form method="GET" class="searchForm">
                <input type="search" placeholder="search by title and author" name="search" /><button><i class="fa fa-search" aria-hidden="true"></i></button>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './util/connect.php';
                   
                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];

                        $query = "SELECT * FROM book WHERE CONCAT(Title, Author) LIKE '%$search%' ";
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
                                    <td>
                                    <button class="update"><a href="bookUpdate.php?bookId=' . $item['id'] . '">Update</a></button>
                                    <button class="delete"><a href="delete.php?bookId=' . $item['id'] . '">Delete</a></button>
                                </td>
                                    
                                   </tr>';
                            }
                        } else {
                            echo '<tr>
                                    <td colspan="12" style="background:red; color:#fff"><center>No Record Found 
                                    <button 
                                    style="background: #103910; padding:5px 10px; cursor:pointer; color:#fff";
                                    onclick="SendMail()">Notify Admin</button></center></td>
                                </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
<script>
(function() {
emailjs.init("user_o93ItRazAkbIMdUv2ZItA");
})();
    function SendMail(){
        console.log('I was press <?php echo $search ;?>');
        var tempParams = {
        from_name:  'Mautech Admin Library',
        to_name:    'Mujtaba',
        message:    '<?php echo $search ;?>',
    }
    emailjs.send('service_mifbi5o', 'template_ev5tx0g', tempParams)
    .then(function(res){
        console.log(tempParams);
        alert('Email Sent successfully')
    });
    }
</script>
</html>