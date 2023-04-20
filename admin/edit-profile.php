<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
  $id=$_GET['uid'];
    $msg=mysqli_query($con,"update users set fname='$fname',lname='$lname',contactno='$contact' where id='$id'");

if($msg)
{
    echo "<script>alert('user updated!!');</script>";
       echo "<script type='text/javascript'> document.location = 'users.php'; </script>";
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
              <li class="breadcrumb-item active">Profile Update</li>
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
              <div class="card-header">
                <h3 class="card-title">Profile update</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

                <form method="post">
<?php 
  $id=$_GET['uid'];
$query=mysqli_query($con,"select * from users where id='$id'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['fname'];?>'s Profile</h1>
                        
                     <form method="post">
                        <div class="card-body">
        <div class="form-group">
             <label for="fname">First Name</label>
             <input class="form-control" id="fname" name="fname" type="text" value="<?php echo $result['fname'];?>" required />
               </div>
    <div class="form-group">
     <label for="lname">Last Name</label>
             <input class="form-control" id="lname" name="lname" type="text" value="<?php echo $result['lname'];?>"  required />
              </div>
    <div class="form-group">
        <label for="contact">Contact No</label>
         <input class="form-control" id="contact" name="contact" type="text" value="<?php echo $result['contactno'];?>"  pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required /></div>
    <div class="form-group">
        <label for="email">Email</label>
        <?php echo $result['email'];?>
 </div>
    <div class="form-group">
        <label for="email">Posting Date</label>
        <?php echo $result['posting_date'];?>
</div>
</div>
                <!-- /.card-body -->

                <div class="card-footer">                        
        <button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>
 </div>
              </form>
            </div>
<?php } ?>



<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

<?php } ?>
