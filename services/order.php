<?php
$_POST = json_decode(file_get_contents('php://input'), true);
include ('db-config.php');
$username = $_POST['username'];
$item = $_POST['item'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
if(!is_null($username)) {
    //Get the available qty from the products table, SELECT QUERY
    //Check the request qty is larger than the available qty
    //if === true execute the below code
    $sql = "SELECT * FROM products WHERE item=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $item);
    $stmt->execute();
    $result_row = $stmt->get_result();
    $row = $result_row->fetch_assoc();
    if($row['quantity'] > $quantity) {
        // else show error
        //Update the products table with remaining qty, UPDATE query
        $total_price = $price * $quantity; //Calculate the total price of the order
        $sql = "INSERT INTO orders (username, item, quantity, price) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssid", $username, $item, $quantity, $total_price);
        $stmt->execute();
        $result['result'] = 'success';
        $result['message'] = 'order-added-successfully';

    }else {
        $result['result'] = 'failed';
        $result['message'] = 'quantity-exceeds';
    }
    $stmt->close();
    $conn->close();
} else {
    $result['result'] = 'failed';
    $result['message'] = 'please-login-first';
}

echo json_encode($result);
