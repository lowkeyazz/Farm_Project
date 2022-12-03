<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>
<form class="form-label-left input_mask" enctype="multipart/form-data" action="updstaff.php" method="post">
    <div class="modal-content">
    <?php
    $queryedit="select * from staff where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Staff</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="x_content">
<br />
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="id" id="inputSuccess2" value="<?php echo $roww[0]; ?>" readonly>
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="name" id="inputSuccess2" value="<?php echo $roww[1]; ?>">
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="email" class="form-control" name="email" id="inputSuccess3" value="<?php echo $roww[2]; ?>">
    <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
    </div>

    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="number" id="inputSuccess4" value="<?php echo $roww[3]; ?>" >
    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control" name="designation" id="inputSuccess5" value="<?php echo $roww[4]; ?>">
    <span class="fa fa-institution form-control-feedback right" aria-hidden="true"></span>
    </div>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="username" id="inputSuccess2" value="<?php echo $roww[6]; ?>">
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="password" class="form-control" name="password" id="inputSuccess3" value="<?php echo $roww[5]; ?>">
    <span class="fa fa-lock form-control-feedback right" aria-hidden="true"></span>
    </div>
    <div class="custom-file mb-3">
<input type="file" class="custom-file-input" accept="image/*" id="customFile" name="image">
<label class="custom-file-label" for="customFile">Choose Profile Image</label>
</div>
</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
    </div>
    </div>
</form>
<?php
mysqli_close($connect);
?>