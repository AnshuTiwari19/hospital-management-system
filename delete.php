<?php
include "db_conn.php";
?>
<?php
$sql = "DELETE FROM `doctor` WHERE doctor_id = $doctor_id";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result));
if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>