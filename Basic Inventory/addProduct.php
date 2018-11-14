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

            <div id="content">
                <a href="products.php"> <p><b> Products </b></p></a>
                <br>
                <center> <p><b> Add Product </b></p> </center>
                <br>
                <form action="insert.php" method="post" id="insertProduct2">
                    <table id="insertTable">
                        <tr>
                            <td><center> Product Information: </center></td>
                        <td> <input type="text" name="prodInfo" id="prodInfo" class="textWidth"> </td>
                        </tr>
                        <tr>
                            <td><center> Product Made: </center></td>
                        <td> <input type="text" name="prodMade" id="prodMade" class="textWidth"> </td>
                        </tr>
                        <tr>
                            <td><center> Product Model: </center></td>
                        <td> <input type="text" name="prodModel" class="textWidth"> </td>
                        </tr>
                    </table>
                    <center> <input type="submit" name="submit" value="Insert Product" id="insertProduct"> </center>
                </form>

                <?php
                if (isset($_REQUEST['result'])) {
                    if ($_REQUEST['result'] == "fail") {
                        echo "<script> alert('Failed! Please fill up all the fields!'); </script>";
                    } else {
                        echo "<script> alert('Product successfully inserted!'); </script>";
                    }
                }
                ?>

            </div>



            <div id="footer">
                <hr>
                <center> <p> &COPY;2018 Copyright </p> </center>
            </div>
        </div>
    </body>
    <script src="javascript/insertScript.js"> </script>
</html>
