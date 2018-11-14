<?php
require_once 'sessionCheck.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inventory System</title>
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Oswald" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="container">

            <div id="title">
                <h1> Electronic Store Inventory System </h1>
                <a href="logout.php"> <p><b> Logout </b></p></a>
                <br><br>
                <hr>
            </div>
            
            <?php
            $_SESSION['searchQuery'] = "Select * from products";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['submit'])) {
                    $query2 = $_REQUEST['search'];
                    if ($_REQUEST['search'] == '') {
                        $_SESSION['searchQuery'] = "Select * from products";
                    }
                    elseif ($_REQUEST['search'] != '') {
                        $_SESSION['searchQuery'] = "Select * from products Where productID Like '$query2%' OR productMade Like '$query2%' ";
                    }
                }
            }
            ?>
            
            <div id="content">
                <a href="addProduct.php"> <p><b> Add Product </b></p></a>
                <br><br>
                <center> <p><b> PRODUCTS </b></p> </center>
                <?php
                require_once 'dbLogin.php';
                $query = $_SESSION['searchQuery'];
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    echo "<table id='productTable'>";
                    echo "<tr> <th> Product ID </th> <th> Product Information </th> <th> Product Made </th> <th> Product Model </th> </tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr> <td><center>" . $row['productID'] . "</center></td>" . "<td> <center>" . $row['productInfo'] . "</center></td>";
                        echo "<td><center>" . $row['productMade'] . "</center></td>" . "<td><center>" . $row['productModel'] . "</center></td></tr>";
                    }
                    echo "</table>";
                } else if(mysqli_num_rows($result) < 1){
                    echo "<script> alert('No match found! '); </script>";
                    $query = "Select * from products";
                    $result = mysqli_query($conn, $query);
                    echo "<table id='productTable'>";
                    echo "<tr> <th> Product ID </th> <th> Product Information </th> <th> Product Made </th> <th> Product Model </th> </tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr> <td><center>" . $row['productID'] . "</center></td>" . "<td> <center>" . $row['productInfo'] . "</center></td>";
                        echo "<td><center>" . $row['productMade'] . "</center></td>" . "<td><center>" . $row['productModel'] . "</center></td></tr>";
                    }
                    echo "</table>";
                }
                else {
                    echo "<script> alert('No match found! '); </script>";
                    $query = "Select * from products";
                    $result = mysqli_query($conn, $query);
                    echo "<table id='productTable'>";
                    echo "<tr> <th> Product ID </th> <th> Product Information </th> <th> Product Made </th> <th> Product Model </th> </tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr> <td><center>" . $row['productID'] . "</center></td>" . "<td> <center>" . $row['productInfo'] . "</center></td>";
                        echo "<td><center>" . $row['productMade'] . "</center></td>" . "<td><center>" . $row['productModel'] . "</center></td></tr>";
                    }
                    echo "</table>";
                }
                ?>

                <form action="" method="post">
                    <table>
                        <tr>
                            <td> Search: </td>
                            <td>  </td>
                            <td> <input type="text" name="search" id="search"> </td>
                        </tr>                
                    </table>
                    <center>
                        <input type="submit" name="submit" value="Search Product" id="search2">
                    </center>
                </form>
            </div>



            <div id="footer">
                <hr>
                <center> <p> &COPY;2018 Copyright </p> </center>
            </div>
        </div>

    </body>
</html>
