<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>

<form class="form-label-left input_mask" enctype="multipart/form-data" action="upddead.php" method="post">
    <div class="modal-content">

    <?php
    $queryedit="select * from dead where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>

    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Death</h4>
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
<?php
    $querycw = "select * from cow";
$cowss = mysqli_query($connect,$querycw);
?>
<select class="form-control has-feedback-left" name="cowNumber" id="inputSuccess2">
                        <option value="" >Select Cow</option>
                            <?php 
                                while ($coww = mysqli_fetch_array(
                                        $cowss,MYSQLI_ASSOC)):; 
                                if($coww["id"]==$roww[1]){
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
<input type="hidden" name="oldcow" value="<?php echo $roww[1]; ?>">
    <div class="col-md-12 col-sm-6  form-group has-feedback" style="margin-top: -1%">
    <p>Death Date</p>
    <input type="date" class="form-control" id="inputSuccess5" name="date" value="<?php echo $roww[2]; ?>" style="margin-top: -3%">
    </div>
    <div class="col-md-12 col-sm-12  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" name="causes" value="<?php echo $roww[3]; ?>">
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