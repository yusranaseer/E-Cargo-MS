<?php
$mysqli = new mysqli('localhost', 'root', '', 'ecargoms') or die(mysqli_error($mysqli));

session_start();

// Save Order To Table
if (isset($_POST['saveOrderRequest'])) {
    $userID = 1;
    $selectedBoxID = $_POST['selctedBoxId'];
    $collectLoc = $_POST['collectLocationSelect'];
    $deliveryLoc = $_POST['deliveryLocationSelect'];
    $deliveryMethod = $_POST['DeliveryMethodSelect'];
    $messageOnContainer = $_POST['messageOnBox'];

$_SESSION['message'] = "Request Created Succcessfully..";

    $mysqli->query("INSERT INTO order_details (user_id,box_TypeNo,collectLoc,deliveryLoc,delivery_Method,message_on_container) VALUES ('$userID','$selectedBoxID','$collectLoc','$deliveryLoc','$deliveryMethod','$messageOnContainer')") or
        die($mysqli->error);

    header("location: Create-Order-Request_Page.php #messages");
}
