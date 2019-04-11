<?php
include_once 'partials/header.php';
?>
<!-- Navigation -->

<!-- Page Content -->
<div class="container container w-100 h-100">

    <div class="row justify-content-center">
        <div class="col-md-12 offset-sm-6">
            <h3>Add Student</h3>
            <div class="col-md-6 ">
                <form action="/add" method="post" class="justify-content-center">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="mode" value="students" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="active" value=1 required>
                    </div>
                    <div class="form-group">
                        <label for="">Student Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Student DOB:</label>
                        <input type="date" class="form-control" placeholder="Enter DOB" name="dob" required>
                    </div>
                    <div class="form-group">
                        <label for="">Qualification:</label>
                        <input type="text" class="form-control" placeholder="Enter Qualification"
                               name="qualification" required>
                    </div>
                    <div class="form-group">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" placeholder="Enter Address"
                               name="address" required>
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
                <th>Name</th>
                <th>DOB</th>
                <th>Qualification</th>
                <th>Address</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($students as $student) {
                echo '
                <tr>
                <td>' . $student["id"] . '</td>
                <td>' . $student["name"] . '</td>
                <td>' . $student["dob"] . '</td>
                <td>' . $student["qualification"] . '</td>
                <td>' . $student["address"] . '</td>
                <td>' . $student["active"] . '</td>
                <td><a href="/editView?id=' . $student["id"] . '&mode=students">Edit</a>&nbsp;<a onclick="return confirm(\'Are you sure?\')" href="/delete?id=' . $student["id"] . '&mode=students">Delete</a></td>
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