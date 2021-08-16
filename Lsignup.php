<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Sign Up</title>
</head>
<body>

<form action="Lregisteradmin.php" method="post">
    ID: <input type="number" name="LId"><br><br>
    Name: <input type="text" name="LName"><br><br>
    Mobile Number: <input type="number" name="LNumber"><br><br>
    Email: <input type="email" name="LEmail">
    <p>Address: </p>
    <textarea name = "LAddress" >
         </textarea><br><br>
    Password: <input type="password" name="LPass"><br><br>
    Confirm password: <input type="password" name="LCPass"><br><br>

    <input type="submit" value="REGISTER">


</form>
<br>
<input type="button" value="SIGN IN" id="LsignIn">
<script>
    var L = document.getElementById('LsignIn');
    L.addEventListener('click', LsignInProcess);

    function LsignInProcess() {
        window.location.assign('Llogin.php');
    }
</script>
</body>
</html>