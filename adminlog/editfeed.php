
<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>

<form class="form-label-left input_mask" enctype="multipart/form-data" action="updfeed.php" method="post">
    <div class="modal-content">
    
    <?php
    $queryedit="select * from feed where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>


    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit</h4>
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
    $querystk = "select * from foodstock";
    $stk = mysqli_query($connect,$querystk);
?>
<select class="form-control has-feedback-left" name="foodItem" id="inputSuccess2">
                        <option value="" >Food Item</option>
                            <?php 
                                while ($syk = mysqli_fetch_array(
                                        $stk,MYSQLI_ASSOC)):; 
                                if($syk["id"]==$roww[1]){
                            ?>
                                <option value="<?php echo $syk["id"];
                                ?>" selected >
                                <?php echo $syk["foodItem"];
                            ?>
                                </option>
                            <?php 
                                }
                                else {
                                ?>
                                <option value="<?php echo $syk["id"];
                                ?>">
                                <?php echo $syk["foodItem"];
                            
                                }
                                endwhile; 
                            ?>
                        </select>
</div>

    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="inputSuccess4" name="remarks" value="<?php echo $roww[2]; ?>">
    <span class="fa fa-edit form-control-feedback left" aria-hidden="true"></span>
    </div>
    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="number" class="form-control has-feedback-left" name="quantity" id="inputSuccess2" value="<?php echo $roww[3]; ?>">
    <span class="fa fa-search form-control-feedback left" aria-hidden="true"></span>
    </div>
    <input type="hidden" name="oldquantity" value="<?php echo $roww[3]; ?>">
    <div class="col-md-12 col-sm-6  form-group has-feedback" style="margin-top: -1%">
    <p>Date</p>
    <input type="date" class="form-control" id="inputSuccess5" name="date" value="<?php echo $roww[4]; ?>"  style="margin-top: -3%">
    </div>
    <div class="col-md-4 col-sm-3  form-group has-feedback" style="margin-top: -1%">
    <p>Feeding Time</p>
    <input type="time" class="form-control" id="inputSuccess5" name="time" value="<?php echo $roww[5]; ?>" style="margin-top: -3%">
    </div>
</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
    </div>
    </div>
</form>