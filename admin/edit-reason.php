<?php session_start();
include_once('../includes/config.php');

//Code for Updation 
if(isset($_POST['update']))
{
  $reason=$_POST['reasonType'];
  $id=intval($_GET['id']);
$msg=mysqli_query($con,"update reason set reasonType='$reason' where id='$id'");

if($msg)
{
    echo "<script>alert('Reason-Type Updated !!');</script>";
       echo "<script type='text/javascript'> document.location = 'reason.php'; </script>";
}
}


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

    
          <?php include_once('includes/sidebar.php');?>
                        

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

                        
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

                <form method="post">
 <?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from reason where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>
     <div class="card-body">
       
    <div class="form-group">
     <label for="reasonType">Reason Type</label>
       
<input type="text" class="form-control" placeholder="Enter Reason Type"  name="reasonType" value="<?php echo  htmlentities($row['reasonType']);?>" class="span8 tip" required>

                      
          </div>
          </div>
                <!-- /.card-body -->

                <div class="card-footer">                        
                                       <button type="submit" class="btn btn-primary btn-block" name="update">Update</button>
                </div>
              </form>
            </div>
<?php } ?>



<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

