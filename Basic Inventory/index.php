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
                <a href="register.php"> <p><b> Register </b></p></a>
                <br><br>
                <hr>
            </div>

            <div id="content">
                <form action="login.php" method="post">
                    <table >
                        <br><br>
                        <tr>
                            <th colspan="2">
                                <h2> Login </h2><br>
                            </th>
                        <tr>
                            <td class="loginTable">Username:</td>
                            <td class="loginTable"> <input type="text" name="username"> </td>
                        </tr>
                        <tr>
                            <td class="loginTable"> Password:</td>
                            <td class="loginTable"> <input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <th><br><input type="submit" value="Login" id="submit"></th>
                        </tr>
                    </table>  
                    <br><br>
                </form>
                
                <center>
                <?php
                if (isset($_REQUEST['result'])) {
                    if ($_REQUEST['result'] == "fail") {
                        echo "<script> alert('Login failed Please try again'); </script>";
                    }
                }
                if (isset($_REQUEST['result2'])) {
                    if ($_REQUEST['result2'] == "success") {
                        echo "<script> alert('Registration successful! You may login now'); </script>";
                    }
                }
                ?>
                </center>

            </div>



            <div id="footer">
                <hr>
                <center> <p> &COPY;2018 Copyright </p> </center>
            </div>
        </div>

    </body>
</html>
