<?php
include('dbconnect.php');
print_r($_POST);

$sql = "INSERT INTO `process` (`process_name`, `paper_id`) VALUES ('$_POST[process_name]','".json_encode($_POST[paper_id])."')";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>