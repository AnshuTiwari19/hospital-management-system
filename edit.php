<?php
include "db_conn.php";
$doctor_id = $_GET["doctor_id"];

if (isset($_POST["submit"])) {
    $doctor_id = $_POST['doctor_id'];
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $license_no = $_POST['license_no'];

    $sql = "UPDATE `hms` SET `doctor_id`='$doctor_id', `name`='$name', `specialization`='$specialization', `license_no`='$license_no' WHERE id = $doctor_id";

    $result = $connection->query($sql);

    if ($result) {
        header("Location: index.php?msg=Data updated successfully");
        exit();
    } else {
        echo "Failed: " . $connection->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (your head section remains unchanged) ... -->
</head>

<body>
    <!-- ... (your body section remains unchanged) ... -->

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit User Information</h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM `hms` WHERE id = $doctor_id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Doctor ID:</label>
                        <input type="text" class="form-control" name="doctor_id" value="<?php echo $row['doctor_id'] ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Specialization:</label>
                    <input type="text" class="form-control" name="specialization" value="<?php echo $row['specialization'] ?>">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">License Number:</label>
                    <input type="text" class="form-control" name="license_no" value="<?php echo $row['license_no'] ?>">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
