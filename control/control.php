<?php
function login() {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

    $query = "SELECT * FROM user WHERE userName == $username AND password == $password";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) return true;
}
?>