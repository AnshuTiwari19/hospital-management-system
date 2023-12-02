<?php
include "db_conn.php";

if (isset($_GET["doctor_id"])) {
    $doctor_id = $_GET["doctor_id"];

    $sql = "DELETE FROM `doctor` WHERE doctor_id = $doctor_id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Data deleted successfully");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
} else {
    echo "Doctor ID not provided.";
}
?>
