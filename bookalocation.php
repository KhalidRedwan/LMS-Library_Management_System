<?php
session_start();

if(isset($_SESSION['adminId']) && !empty($_SESSION['adminId'])){
    ?>
    ADMIN HOME <br>
    <br>
    <input type="button" value="BORROW" id="bkebtnbr">

    <script>
        var e1br = document.getElementById('bkebtnbr');
        e1br.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('borrow.php');
        }
    </script>



    <br>
    <br>
    <input type="button" value="RETURN" id="bkebtnbar">

    <script>
        var e1bar = document.getElementById('bkebtnbar');
        e1bar.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('return.php');
        }
    </script>



    <br>
    <br>
    <input type="button" value="HOME" id="bkebtnbd">

    <script>
        var e1bd = document.getElementById('bkebtnbd');
        e1bd.addEventListener('click', processlogout);

        function processlogout() {
            window.location.assign('LHomePage.php');
        }
    </script>







    <?php
}
else{
    ///session doesn't contain any valid user email
    ?>
    <script>
        window.location.assign('login.php');
    </script>
    <?php
}
?>