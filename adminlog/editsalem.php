
<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>

<form class="form-label-left input_mask" enctype="multipart/form-data" action="updsalem.php" method="post">
    <div class="modal-content">

    <?php
    $queryedit="select * from salemilk where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>

    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Milk Sale</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="x_content">
<br />
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="id" value="<?php echo $roww[0]; ?>" readonly >
    <span class="fa fa-list form-control-feedback left" aria-hidden="true"></span>
    </div>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="customer" value="<?php echo $roww[1]; ?>">
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    </div>
<p>&nbsp;&nbsp;&nbsp;Liters</p>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="number" class="form-control has-feedback-left" id="inputSuccess4" name="liters" value="<?php echo $roww[2]; ?>">
    <span class="fa fa-pencil form-control-feedback left" aria-hidden="true"></span>
    </div>
    <input type="hidden" name="oldliters" value="<?php echo $roww[2]; ?>">
    <p>Price</p>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="price" value="<?php echo $roww[3]; ?>">
    <span class="fa fa-pencil form-control-feedback left" aria-hidden="true"></span>
    </div>
    <div class="col-md-12 col-sm-3  form-group has-feedback">
    <p>Sale Date</p>
    <input type="date" class="form-control" id="inputSuccess5" name="date" value="<?php echo $roww[5]; ?>" >
    </div>
</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
    </div>
    </div>
</form>