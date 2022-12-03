<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>

<form class="form-label-left input_mask" enctype="multipart/form-data" action="updfeedstock.php" method="post">
    <div class="modal-content">

<?php
    $queryedit="select * from foodstock where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>
    
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Feed Stock</h4>
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
    <input type="text" class="form-control has-feedback-left" name="foodItem" value="<?php echo $roww[1]; ?>" id="inputSuccess4" >
    <span class="fa fa-paw form-control-feedback left" aria-hidden="true"></span>
    </div>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="number" min=0 class="form-control has-feedback-left" name="quantity" value="<?php echo $roww[2]; ?>" id="inputSuccess4" placeholder="Quantity">
    <span class="fa fa-paw form-control-feedback left" aria-hidden="true"></span>
    </div>
</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
    </div>
    </div>
</form>