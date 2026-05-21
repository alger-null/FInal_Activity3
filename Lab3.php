<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name">
    <br><br>
    Email: <input type="text" name="email">
    <br><br>
    <input type="submit">
</form>

<?php
    if(isset($_POST['name'])) {
        echo "<br>Hello, " . $_POST['name'];
    }
    if(isset($_POST['email'])) {
        echo "<br>Your email is: <br>" . $_POST['email'];
    }
?>

</body>
</html>
