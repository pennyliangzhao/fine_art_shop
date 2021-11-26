<?php
$_POST = json_decode(file_get_contents('php://input'), true);
include ('db-config.php');
$username = $_POST['username'];
$item = $_POST['item'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
if(!is_null($username)) {
    //Get the avaiable qty from the products table, SELECT QUERY
    //Check the request qty is larger than the avaialble qty
    //if === true execute the below code
    // else show error
    //Update the products table with remaining qty, UPDATE query
    $total_price = $price * $quantity; //Calculate the total price of the order
    $sql = "INSERT INTO orders (username, item, quantity, price) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssid", $username, $item, $quantity, $total_price);
    $stmt->execute();
    $result['result'] = 'success';
    $result['message'] = 'order-added-successfully';
    $stmt->close();
    $conn->close();
} else {
    $result['result'] = 'failed';
    $result['message'] = 'please-login-first';
}
echo json_encode($result);
