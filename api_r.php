<?php
    header("Content-Type: application.json");

    include("servercon.php");

    $stat = $dbconnect->prepare("SELECT * FROM emp_tbl");

    $stat->execute();
    $result = $stat->get_result();
    $output = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($output);
?>