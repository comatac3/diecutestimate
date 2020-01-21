<?php
include('dbconnect.php');
print_r($_POST);

$sql = "INSERT INTO `paper` (`paper_name`, `paper_size_x` ,`paper_size_y`, `clipper` ,`paper_padding_A`, `paper_padding_B`, `paper_padding_C`,`raw_paper_id`, `raw_paper_num`) VALUES ('$_POST[paper_name]', '$_POST[paper_size_x]' ,'$_POST[paper_size_y]', '$_POST[clipper]' ,'$_POST[paper_padding_A]', '$_POST[paper_padding_B]', '$_POST[paper_padding_C]', '".json_encode($_POST[raw_paper_id])."', '".json_encode($_POST[raw_paper_num])."')";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>