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
//
//                                if ($value == $row['scpe_grades_status'])
//                                    echo '<option value="'.$value.'" selected>'.$key.'</option>';
//                                else
//                                    echo '<option value="'.$value.'">'.$key.'</option>';
//                            }


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
</div>
</div>
</div>