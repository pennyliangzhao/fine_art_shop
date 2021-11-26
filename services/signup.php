<?php
require('db-config.php');

if(isset($_POST['username'])&&isset($_POST['psw'])) {
    $username = $_POST['username'];
    $pwd = $_POST['psw'];

    //Check whether the user already exists
    $sql_verify = "SELECT * FROM login WHERE username=?";
    $stmt_verify = $conn->prepare($sql_verify);
    $stmt_verify->bind_param("s", $username);
    $stmt_verify->execute();
    $result_verify = $stmt_verify->get_result();
    if($result_verify->num_rows > 0) {
        $stmt_verify->close();
        echo 'Sorry username already exists.';
    } else {
        $sql = "INSERT INTO login (username, password) values (?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $pwd);
        $stmt->execute();
        header("Location: ../index.php");
        $stmt->close();
    }
    $conn->close();
} else {
    echo 'Invalid request';
}
?>
