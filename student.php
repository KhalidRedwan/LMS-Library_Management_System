<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Sign Up</title>
</head>
<body>

<form action="registerStudent.php" method="post">
    ID: <input type="number" name="sId"><br><br>
    Name: <input type="text" name="sName"><br><br>
    Mobile Number: <input type="number" name="sNumber"><br><br>
    Email: <input type="email" name="sEmail">
    <p>Address: </p>
    <textarea name = "sAddress" >
         </textarea><br><br>
    Password: <input type="password" name="sPass"><br><br>
    Confirm password: <input type="password" name="sCPass"><br><br>

    <input type="submit" value="REGISTER">
</form>
<br>
<input type="button" value="SIGN IN" id="signIn">
<script>
    var si = document.getElementById('signIn');
    si.addEventListener('click', signInProcess);

    function signInProcess() {
        window.location.assign('studentLoginPage.php');
    }
</script>
</body>
</html>