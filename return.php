<?php
session_start();

if (isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
    </head>
    <body>

    <form action="returnprocess.php" method="post" enctype="multipart/form-data">

        BOOK ID: <input type="text" name="bk"><br><br>
        STUDENT ID: <input type="int" name="sid"><br><br>
        RETURN DATE: <input type="date" name="rd"><br><br>
        
       

        <input type="submit" value="SAVE">
    </form>
    </body>
    </html>
    <?php
} else {
    ?>
    <script>window.location.assign('Llogin.php')</script>
    <?php
}


?>
