<?php
include_once 'partials/header.php';
?>
<!-- Navigation -->

<!-- Page Content -->
<div class="container container w-100 h-100">

    <div class="row justify-content-center">
        <div class="col-md-12 offset-sm-6">
            <h3>Add Course</h3>
            <div class="col-md-6 ">
                <form action="/add" method="post" class="justify-content-center">
                    <div class="form-group">
                        <label for="">Course Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="mode" value="courses" required>
                    </div> <div class="form-group">
                        <input type="hidden" class="form-control" name="active" value=1 required>
                    </div>
                    <div class="form-group">
                        <label for="">Course Fee:</label>
                        <input type="number" class="form-control" placeholder="Enter Fee" name="fee" required>
                    </div>
                    <div class="form-group">
                        <label for="">Duration:</label>
                        <input type="number" class="form-control" placeholder="Enter Duration"
                               name="duration" required>
                    </div>
                    <div class="form-group">
                        <label for="">Staff:</label>
                        <input type="text" class="form-control" placeholder="Enter Staff"
                               name="staff" required>
                    </div>
                    <div class="form-group">
                        <label for="">Description:</label>
                        <input type="text" class="form-control" placeholder="Enter Description"
                               name="description" required>
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
                <th>Fee</th>
                <th>Duration</th>
                <th>Staff</th>
                <th>Description</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($courses as $course) {
                echo '
                <tr>
                <td>' . $course["id"] . '</td>
                <td>' . $course["name"] . '</td>
                <td>' . $course["fee"] . '</td>
                <td>' . $course["duration"] . '</td>
                <td>' . $course["staff"] . '</td>
                <td>' . $course["description"] . '</td>
                <td>' . $course["active"] . '</td>
                <td><a href="/editView?id=' . $course["id"] . '&mode=courses">Edit</a>&nbsp;<a onclick="return confirm(\'Are you sure?\')" href="/delete?id=' . $course["id"] . '&mode=courses">Delete</a></td>
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