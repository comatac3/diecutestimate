<?php
include('dbconnect.php');
//print_r($_POST);

$sql = "INSERT INTO `raw_paper` (`paper_name`, `paper_size_x` ,`paper_size_y`) VALUES ('$_POST[paper_name]', '$_POST[paper_size_x]' ,'$_POST[paper_size_y]')";
//echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo $conn->error;
}

$conn->close();
