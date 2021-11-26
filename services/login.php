<?php
require('db-config.php');
session_start();
if(isset($_POST['uname']) && isset($_POST['psw'])) {
    $username = $_POST['uname'];
    $pwd = $_POST['psw'];
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$pwd'";
    $result = $conn->query($sql);
    if ($result->num_rows === 1) {
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = 'true';
        header("Location: ../index.php");
    } else {
        echo '<h3>Sorry! Invalid username or password</h3>';
    }
} else {
    echo 'Invalid request';
}
?>
