<?php
include_once 'partials/header.php';
?>
<!-- Navigation -->

<!-- Page Content -->
<div class="container container w-100 h-100">

    <div class="row justify-content-center">
        <div class="col-md-12 offset-sm-6">
            <h3>Register Student</h3>
            <div class="col-md-6 ">
                <form action="/add" method="post" class="justify-content-center">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="mode" value="registrations" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="active" value=1 required>
                    </div>
                    <div class="form-group">
                        <label for="student">Student Name:</label>
                        <select class="form-control" name="student_id" id="student_id">
                            <?php
                            foreach ($students as $student) {
                                echo '
              <option value="' . $student['id'] . '">' . $student['id'] . ' (' . $student['name'] . ' )</option>
            ';
                            }
                            ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="student">Course Name:</label>
                        <select class="form-control" name="course_id" id="course_id">
                            <?php
                            foreach ($courses as $course) {
                                echo '
              <option value="' . $course['id'] . '">' . $course['name'] . ' </option>
            ';
                            }
                            ?>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <br></div>
    <hr>
    <div class="col-md-12  justify-content-center">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Course Duration</th>
                <th>Course Fee</th>
                <th>Course Staff</th>
                <th>Student Name</th>
                <th>Student DOB</th>
                <th>Student Qualification</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($registrations as $registration) {
                echo '
                <tr>
                <td>' . $registration["id"] . '</td>
                <td>' . $registration["course_name"] . '</td>
                <td>' . $registration["duration"] . '</td>
                <td>' . $registration["fee"] . '</td>
                <td>' . $registration["staff"] . '</td>
                <td>' . $registration["student_name"] . '</td>
                <td>' . $registration["dob"] . '</td>
                <td>' . $registration["qualification"] . '</td>
                <td>' . $registration["active"] . '</td>
            </tr>
            ';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>