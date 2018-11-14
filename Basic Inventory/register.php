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
                <a href="index.php"> <p><b> Login </b></p></a>
                <br><br>
                <hr>
            </div>

            <div id="content">
                <form action="addUser.php" method="post" id="register">
                    <table >
                        <br><br>
                        <tr>
                            <th colspan="2">
                                <h2> Register </h2><br>
                            </th>
                        <tr>
                            <td class="loginTable">Username:</td>
                            <td class="loginTable"> <input type="text" name="username" id="username"> </td>
                        </tr>
                        <tr>
                            <td class="loginTable"> Password:</td>
                            <td class="loginTable"> <input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td class="loginTable"> Re-enter Password:</td>
                            <td class="loginTable"> <input type="password" name="password2" id="password2"></td>
                        </tr>
                        <tr>
                            <th><br><input type="submit" value="Register" ></th>
                        </tr>
                    </table>  
                    <br><br>
                </form>
                <center>
                    
                <?php
                if (isset($_REQUEST['result'])) {
                    if ($_REQUEST['result'] == "userexists") {
                        echo "<script> alert('Username taken! Please try again'); </script>";
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
    <script src="javascript/script.js"> </script>
</html>
