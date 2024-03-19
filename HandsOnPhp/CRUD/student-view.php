<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student View</title>
 </head>
 <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Student View Details 
                <a href="index.php" class="btn btn-danger float-end">BACK</a>
              </h4>
            </div>
            <div class="card-body">
              <?php
              if(isset($_GET['id'])) {
                $student_id = mysqli_real_escape_string($con, $_GET['id']);
                $query = "SELECT * FROM students WHERE id='$student_id' ";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0) {
                 $student = mysqli_fetch_array($query_run);
                 ?>
                 <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="studentName">Student Name</label>
                          <input type="text" id="studentName" class="form-control form-control-lg" value="<?=$student['name'];?>" readonly />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="studentCourse">Course</label>
                          <input type="text" id="studentCourse" class="form-control form-control-lg" value="<?=$student['course'];?>" readonly />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="studentLocation">Location</label>
                          <input type="text" id="studentLocation" class="form-control form-control-lg" value="<?=$student['location'];?>" readonly />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="studentFeesPaid">Fees paid</label>
                          <input type="text" id="studentFeesPaid" class="form-control form-control-lg" value="<?=$student['feespaid'];?>" readonly />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="studentGuardianName">Guardian Name</label>
                          <input type="text" id="studentGuardianName" class="form-control form-control-lg" value="<?=$student['guardianname'];?>" readonly />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="studentPhone">Student Phone</label>
                          <input type="text" id="studentPhone" class="form-control form-control-lg" value="<?=$student['phone'];?>" readonly />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="studentEmail">Email</label>
                          <input type="email" id="studentEmail" class="form-control form-control-lg" value="<?=$student['email'];?>" readonly />
                        </div>
                      </div>
                    </div>
                 </form>
                 <?php
                } else {
                 echo "<h4>No Such Id Found</h4>";
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>
