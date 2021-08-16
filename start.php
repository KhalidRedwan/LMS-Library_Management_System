<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Sign Up</title>
</head>
<body>

<input type="button" value="Librarian" id="l">
<script>
    var li = document.getElementById('l');
    li.addEventListener('click', lProcess);

    function lProcess() {
        window.location.assign('Lsignup.php');
    }
</script>

<br><br>

<input type="button" value="Student" id="s">
<script>
    var st = document.getElementById('s');
    st.addEventListener('click', sProcess);

    function sProcess() {
        window.location.assign('student.php');
    }
</script>

</body>
</html>