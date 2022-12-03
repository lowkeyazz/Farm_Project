<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>

<form class="form-label-left input_mask" enctype="multipart/form-data" action="updvaccine.php" method="post">
    <div class="modal-content">

    <?php
    $queryedit="select * from vaccine where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>

    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Vaccine</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="x_content">
<br />
    <div class="col-md-12 col-sm-12  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="id" id="inputSuccess2" value="<?php echo $roww[0]; ?>" readonly>
    <span class="fa fa-edit form-control-feedback right" aria-hidden="true"></span>
    </div>
    <div class="col-md-12 col-sm-12  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="cowGroup" id="inputSuccess2" value="<?php echo $roww[1]; ?>">
    <span class="fa fa-paw form-control-feedback right" aria-hidden="true"></span>
    </div>
    <div class="col-md-12 col-sm-6  form-group has-feedback" style="margin-top: -1%">
    <p>Vaccine Date</p>
    <input type="date" class="form-control" id="inputSuccess5" name="date" value="<?php echo $roww[2]; ?>" style="margin-top: -3%">
    </div>
    <div class="col-md-12 col-sm-12  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" name="vet" value="<?php echo $roww[3]; ?>">
    <span class="fa fa-edit form-control-feedback right" aria-hidden="true"></span>
    </div>
</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 46%" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
    </div>
    </div>
</form>