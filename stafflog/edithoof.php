<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>


<form class="form-label-left input_mask" enctype="multipart/form-data" action="updhoof.php" method="post">
    <div class="modal-content">
<?php
    $queryedit="select * from hoof where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    $queryst = "select * from staff";
    $stt = mysqli_query($connect,$queryst);
    ?>

    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Triming</h4>
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
<select class="form-control has-feedback-left" name="doneBy" id="inputSuccess2">
                        <option value="" >Select Staff Member</option>
                            <?php 
                                while ($stfff = mysqli_fetch_array(
                                        $stt,MYSQLI_ASSOC)):; 
                                if($stfff["id"]==$roww[1]){
                            ?>
                                <option value="<?php echo $stfff["id"];
                                ?>" selected >
                                <?php echo $stfff["name"];
                            ?>
                                </option>
                            <?php 
                                }
                                else {
                                ?>
                                <option value="<?php echo $stfff["id"];
                                ?>">
                                <?php echo $stfff["name"];
                            
                                }
                                endwhile; 
                            ?>
                        </select>
</div>

    <div class="col-md-6 col-sm-6  form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" name="cowGroup" id="inputSuccess4" value="<?php echo $roww[2]; ?>">
    <span class="fa fa-paw form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-12 col-sm-6  form-group has-feedback" style="margin-top: -1%">
    <p>Date</p>
    <input type="date" class="form-control" id="inputSuccess5" name="date" value="<?php echo $roww[3]; ?>" style="margin-top: -3%">
    </div>
    
</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
    </div>
    </div>
</form>