<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>

<form class="form-label-left input_mask" enctype="multipart/form-data" action="updcavs.php" method="post">
<div class="modal-content">

<?php
    $queryedit="select * from calff where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>

<div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Edit Calf</h4>
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
    if($roww[1]=="MALE"){ ?>
<select class="form-control" name="gender">
    <option>Select Gender</option>
    <option value="MALE" selected>Male</option>
    <option value="FEMALE">Female</option>
    </select>
    <?php 
    }
    elseif ($roww[1]=="FEMALE") { ?>
    <select class="form-control" name="gender">
    <option>Select Gender</option>
    <option value="MALE">Male</option>
    <option value="FEMALE" selected>Female</option>
    </select>
    <?php
    }
    ?>
</div>

<div class="col-md-6 col-sm-6  form-group has-feedback">
    <?php
    $queryins = "select * from insamination";
$inss = mysqli_query($connect,$queryins);
?>
<select class="form-control has-feedback-left" name="insNumber" id="inputSuccess2">
                        <option value="" >Insamination No</option>
                            <?php 
                                while ($ins = mysqli_fetch_array(
                                        $inss,MYSQLI_ASSOC)):; 
                                if($ins["id"]==$roww[2]){
                            ?>
                                <option value="<?php echo $ins["id"];
                                ?>" selected >
                                <?php echo $ins["id"];
                            ?>
                                </option>
                            <?php 
                                }
                                else {
                                ?>
                                <option value="<?php echo $ins["id"];
                                ?>">
                                <?php echo $ins["id"];
                            
                                }
                                endwhile; 
                            ?>
                        </select>
</div>
<div class="col-md-6 col-sm-6  form-group has-feedback">
<input type="text" class="form-control has-feedback-left" name="vet" id="inputSuccess4" value="<?php echo $roww[6]; ?>">
<span class="fa fa-paw form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-12 col-sm-6  form-group has-feedback" style="margin-top: -1%">
<p>Date of Birth</p>
<input type="date" class="form-control" id="inputSuccess5" name="date" value="<?php echo $roww[5]; ?>" style="margin-top: -3%">
</div>
<div class="custom-file mb-3">
<input type="file" class="custom-file-input" id="customFile" name="image">
<label class="custom-file-label" for="customFile">Change Calf Image</label>
</div>
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save </button>
</div>
</div>
</form>