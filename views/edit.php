<?php
include_once 'partials/header.php';
?>
<!-- Navigation -->

<!-- Page Content -->
<div class="container container w-100 h-100">

    <div class="row justify-content-center">
        <div class="col-md-12 offset-sm-6">
            <div class="col-md-6 ">
                <form action="edit" method="post" class="justify-content-center">
                    <div class="form-group">
                        <input type="hidden" class="form-control" value="<?php echo $mode ?>" name="mode" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" value="<?php echo $id ?>" name="id" required>
                    </div>

                    <?php
                    foreach ($data as $key => $value) {
                        echo '
                     <div class="form-group">
                        <label for="">' . ucfirst($key) . '</label>
                        <input type="text" class="form-control" placeholder="Enter ' . strtoupper($key) . '" name="' . $key . '" value="' . $value . '" required>
                     </div>
            ';
                    }
                    ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <br></div>
    <hr>

</div>
</div>
</div>