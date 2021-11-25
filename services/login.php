<?php
require('db-config.php');

if(isset($_POST['uname']) && isset($_POST['psw'])) {
    echo 'Success';
} else {
    echo 'Invalid request';
}

?>
