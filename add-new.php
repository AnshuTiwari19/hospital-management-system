<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $doctor_id = $_POST['doctor_id'];
   $name = $_POST['name'];
   $specialization = $_POST['specialization'];
   $license_no = $_POST['license_no'];

   $sql = "INSERT INTO `doctor`(`doctor_id`, `name`, `specialization`, `license_no`, ) VALUES ('$doctor_id','$name','$specialization','$license_no')";
   $sql = "SELECT * FROM doctor";
   $result = mysqli_query($conn, $sql);
 
   if ($result) {
     // Check if there are rows returned
     if (mysqli_num_rows($result) > 0) {
       // Fetch a single row
       $row = mysqli_fetch_assoc($result);
 
       // Check if a row was fetched
       if ($row) {
         echo "<table>";
         echo "<tr>
                 <th>Doctor ID</th>
                 <th>Name</th>
                 <th>Specialization</th>
                 <th>License Number</th>
               </tr>";
         
         // Display the data in the table
         echo "<tr>
                 <td>" . $row["doctor_id"] . "</td>
                 <td>" . $row["name"] . "</td>
                 <td>" . $row["specialization"] . "</td>
                 <td>" . $row["license_no"] . "</td>
               </tr>";
         
         echo "</table>";
       } else {
         echo "No data found in the 'hms' table.";
       }
     } else {
       echo "No rows found in the 'hms' table.";
     }
   } else {
     // Display an error message if the query fails
     echo "Failed: " . mysqli_error($conn);
   }
   ?>
 
<?php
   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>HOSPITAL MANAGEMENT SYSTEM</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      HOSPITAL MANAGEMENT SYSTEM
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User</h3>
         <p class="text-muted">Complete the form below to add a new doctor</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">doctor_id</label>
                  <input type="number" class="form-control" name="doctor_id" placeholder="please enter the doctor_id">
               </div>

               <div class="col">
                  <label class="form-label">name:</label>
                  <input type="text" class="form-control" name="name" placeholder="please enter the doctor name">
               </div>
            </div>

            <div class="col">
               <label class="form-label">specialization:</label>
               <input type="text" class="form-control" name="specialization" placeholder="enter the doctor specialization">
            </div>

            <div class="col">
                  <label class="form-label">license_no:</label>
                  <input type="number" class="form-control" name="license_no" placeholder="please enter the license_no">
               </div>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>