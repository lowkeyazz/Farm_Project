<head>
    <script type="text/javascript">
      document.getElementById("lakaka").addEventListener("change", function(){
  //Update this to your logic...
  if(document.getElementById("lakaka").value === "Healthy"){
    document.getElementById("teest").disabled = false;
  }
});
</script>
  </head>
<?php
require '../connexion.php';
//print_r($_POST);

$q = $_GET['q'];
?>

<form class="form-label-left input_mask" enctype="multipart/form-data" action="updcow.php" method="post">
    <div class="modal-content">
    <?php
    $queryedit="select * from cow where id=$q";
    $rowws= mysqli_query($connect,$queryedit);
    $roww=mysqli_fetch_row($rowws);
    ?>
    <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Edit Cow</h4>
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
    <input type="text" class="form-control has-feedback-left" name="cowType" value="<?php echo $roww[1]; ?>" id="inputSuccess4" >
    <span class="fa fa-paw form-control-feedback left" aria-hidden="true"></span>
    </div>
    
    <div class="col-md-12 col-sm-6  form-group has-feedback" style="margin-top: -1%">
    <p>Date of Birth</p>
    <input type="date" class="form-control" id="inputSuccess5" name="dateOfBirth" value="<?php echo $roww[2]; ?>" style="margin-top: -3%">
    </div>
    <div class="custom-file mb-3">
<input type="file" class="custom-file-input" id="customFile" name="image">
<label class="custom-file-label" for="customFile">Change Cow Image</label>
</div>


</div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="margin-right: 69%" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
    </div>
    </div>
</form>
<div class="modal fade add" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
    </div>
    </div>


