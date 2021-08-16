<?php
session_start();

if (isset($_SESSION['studentID']) && !empty($_SESSION['studentID'])) {
    $var9 = $_SESSION['studentID'];
    ?>
    <style>
        table, th, td {
            border: 1px solid red;
            text-align: center;
        }
        tr:hover{
            background-color: chartreuse;
        }
    </style>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Student Sign Up</title>
    </head>
    <body>

    <table>

        <thead>

        <tr>

            <th>Donation Id</th>
            <th>Book Name</th>
            <th>Image</th>
            <th>Writer Name</th>
            <th>Publication</th>
            <th>Edition</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Status</th>

        </tr>

        </thead>
        <tbody>

        <?php
        try {
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=testing;", "root", "");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "Select donationId, bookName, image, writterName, publication, edition, genre, description, quantity, status From bookdonation where studentsid = $var9";
            try {
                $return = $dbcon->query($query);
                $donationTable = $return->fetchAll();
                foreach ($donationTable as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['donationId'] ?></td>
                        <td><?php echo $row['bookName'] ?></td>
                        <td><img width="75" height="75" alt="Cover Page" src="<?php echo $row['image'] ?>"></td>
                        <td><?php echo $row['writterName'] ?></td>
                        <td><?php echo $row['publication'] ?></td>
                        <td><?php echo $row['edition'] ?></td>
                        <td><?php echo $row['genre'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['status'] ?></td>

                    </tr>
                    <?php
                }
            } catch (PDOException $ex) {
                ?>
                <tr>
                    <td colspan="10">DATA READ ERROR...</td>
                </tr>
                <?php
            }
        } catch (PDOException $ex) {
            ?>
            <tr>
                <td colspan="10">DATA READ ERROR...</td>
            </tr>
            <?php
        }

        ?>

        </tbody>

    </table>
    <br><br>
    <input type="button" value="BACK" id="hp">
    <script>
        var home = document.getElementById('hp');
        home.addEventListener('click', hpProcess);

        function hpProcess() {
            window.location.assign('studentHomePage.php');
        }
    </script>
    <br><br>
    <input type="button" value="LOGOUT" id="lo">
    <script>
        var log = document.getElementById('lo');
        log.addEventListener('click', loProcess);

        function loProcess() {
            window.location.assign('logoutsession.php');
        }
    </script>

    </body>
    </html>
    <?php

} else {
    ?>
    <script>window.location.assign('studentLoginPage.php')</script>
    <?php
}
?>











