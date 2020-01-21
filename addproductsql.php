<?php
include('dbconnect.php');
print_r($_POST);

$sql = "INSERT INTO `product` (`product_name`, `process_id`) VALUES ('$_POST[product_name]', '".json_encode($_POST[process_id])."')";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>