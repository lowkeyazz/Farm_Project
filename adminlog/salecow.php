 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dairy Farm Management System</title>

    <!-- Bootstrap -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script>
      function fct(str) {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("formed").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET","editsalec.php?q="+str,true);
          xmlhttp.send();
        }
</script>
  </head>

<?php
require '../connexion.php';
session_start();
if(!isset($_SESSION['user'])){
    header('Location: ../auth.php');
}
$query= "select * from salecow where 1";
$result = mysqli_query($connect,$query);

$querycow = "select * from cow where status='Healthy' || status='Sick'";
$cowss = mysqli_query($connect,$querycow);
?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-paw"></i> <span>  Dairy Farm</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../adminlog/image/<?php echo $_SESSION['imagee']; ?>.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo "".$_SESSION['name']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-list-alt"></i> Information <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li ><a href="staffinfo.php">Staff</a></li>
                      <li><a href="cavs.php">Calves</a></li>
                      <li><a href="cowinfo.php">Cow</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Monitoring <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="insamination.php">Insamination</a></li>
                      <li><a href="hoofing.php">Hoof Triming</a></li>
                      <li><a href="feed.php">Feed</a></li>
                      <li><a href="milking.php">Milking</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Health <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="vaccine.php">Vaccine</a></li>
                      <li><a href="treatment.php">Treatment</a></li>
                      <li><a href="dead.php">Dead</a></li>
                    </ul>
                  </li>
                  <li class="active"><a><i class="fa fa-shopping-cart"></i> Sale <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="salemilk.php">Milk</a></li>
                      <li class="active"><a href="salecow.php">Cow</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-money"></i> Stock <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="milkstock.php">Milk</a></li>
                      <li><a href="feedstock.php">Feed</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="../deconnexion.php" class="user-profile dropdown-toggle" id="navbarDropdown" >
                      <img src="../adminlog/image/<?php echo $_SESSION['imagee']; ?>.jpg" alt=""><?php echo "".$_SESSION['name']; ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>                  
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cow Sale <small>Table</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <button class="btn btn-success btn-sm" data-toggle="modal" data-target=".add"> Add </button>
                      <div class="modal fade add" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                    <form class="form-label-left input_mask" enctype="multipart/form-data" action="addsalecow.php" method="post">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel">Add Cow Sale</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="x_content">
                    <br />

                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="date" class="form-control has-feedback-left" id="inputSuccess2" name="date" placeholder="Date">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <select class="form-control" name="cowNumber">
                            <option value="" >Select Cow</option>
                            <?php 
                                while ($cow = mysqli_fetch_array(
                                        $cowss,MYSQLI_ASSOC)):; 
                            ?>
                                <option value="<?php echo $cow["id"];
                                ?>">
                                <?php echo $cow["id"];
                            ?>
                                </option>
                            <?php 
                                endwhile; 
                            ?>
                          </select>
                      </div>
                       <div class="col-md-6 col-sm-6  form-group has-feedback">
                       <input type="number" min=0 class="form-control has-feedback-left" name="amount" id="inputSuccess2" placeholder="Amount">
                        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                       <input type="text" class="form-control has-feedback-left" name="customer" id="inputSuccess2" placeholder="Customer Name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                       <input type="text" class="form-control has-feedback-left" name="contact" id="inputSuccess2" placeholder="Customer Contact">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                       <input type="email" class="form-control has-feedback-left" name="email" id="inputSuccess2" placeholder="Customer Email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                       <input type="text" class="form-control has-feedback-left" name="remarks" id="inputSuccess2" placeholder="Remarks">
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
                    </div>
                  </div>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Invoice No.</th>
                          <th>Date</th>
                          <th>Cow No.</th>
                          <th>Amount</th>
                          <th>Customer Name</th>
                          <th>Contact</th>
                          <th>Email</th>
                          <th>Remarks</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                        while ($stf=mysqli_fetch_row($result)) {
                      ?>
                        <tr>
                          <td><b style="color:green;"><?php echo $stf[0]; ?></b></td>
                          <td><?php echo $stf[1]; ?></td>
                          <td><?php echo $stf[2]; ?></td>
                          <td><?php echo $stf[3]; ?></td>
                          <td><?php echo $stf[4]; ?></td>
                          <td><?php echo $stf[5]; ?></td>
                          <td><?php echo $stf[6]; ?></td>
                          <td><?php echo $stf[7]; ?></td>
                          <td><button onclick="fct('<?php echo $stf[0]; ?>')" class="btn btn-info btn-sm"  data-toggle="modal" data-target=".edit"><i class="fa fa-pencil"></i></button> <button onclick="if(confirm('Are you sure?')) window.location.href='delcowsale.php?id=<?php echo $stf[0] ?>&cow=<?php echo $stf[2] ?>';" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </button></td>
                        </tr>
                        <?php }
                        ?>
                      </tbody>
                    </table>
                    <div class="modal fade edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div id="formed" class="modal-dialog modal-md">
                    
                    </div>
                  </div>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

              

              
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Dairy Farm Management System - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>




















