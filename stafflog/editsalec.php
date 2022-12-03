<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>

<form class="form-label-left input_mask" enctype="multipart/form-data" action="updsalec.php" method="post">
    <div class="modal-content">

<?php
    $queryedit="select * from salecow where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>

    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Cow Sale</h4>
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
    <input type="date" class="form-control has-feedback-left" id="inputSuccess2" name="date" value="<?php echo $roww[1]; ?>">
    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
    </div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
    <?php
    $querycw = "select * from cow";
$cowss = mysqli_query($connect,$querycw);
?>
<select class="form-control has-feedback-left" name="cowNumber" id="inputSuccess2">
                        <option value="" >Select Cow</option>
                            <?php 
                                while ($coww = mysqli_fetch_array(
                                        $cowss,MYSQLI_ASSOC)):; 
                                if($coww["id"]==$roww[2]){
                            ?>
                                <option value="<?php echo $coww["id"];
                                ?>" selected >
                                <?php echo $coww["id"];
                            ?>
                                </option>
                            <?php 
                                }
                                else {
                                ?>
                                <option value="<?php echo $coww["id"];
                                ?>">
                                <?php echo $coww["id"];
                            
                                }
                                endwhile; 
                            ?>
                        </select>
</div>
    <input type="hidden" name="oldcow" value="<?php echo $roww[2]; ?>">
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="amount" value="<?php echo $roww[3]; ?>">
    <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
    </div>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="customer" value="<?php echo $roww[4]; ?>">
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    </div>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="contact" value="<?php echo $roww[5]; ?>">
    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
    </div>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="email" value="<?php echo $roww[6]; ?>">
    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
    </div>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="remarks" value="<?php echo $roww[7]; ?>">
    <span class="fa fa-pencil form-control-feedback left" aria-hidden="true"></span>
    </div>
    

</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
    </div>
    </div>
</form>