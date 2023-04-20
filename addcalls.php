<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
  $category=$_POST['category'];
  $subcat=$_POST['subcategory'];
  $mobile=$_POST['mobileno'];
  $name=$_POST['name'];
  $alterno=$_POST['alterno'];
  $email=$_POST['email'];
  $reason=$_POST['reason'];
  $subreason=$_POST['subreason'];
  $description=$_POST['description'];
$msg=mysqli_query($con,"insert into useradd(category,subcategory,mobileno,name,alterno,email,reason,subreason,description) values('$category','$subcat','$mobile','$name','$alterno','$email','$reason','$subreason','$description')");
if($msg)
{
    echo "<script>alert('Add-calls created successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'addcalls.php'; </script>";
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
              <li class="breadcrumb-item"><a href="#"></a></li>
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
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

<form method="post" >
  <div class="card-body">
      <div class="form-group">
<label for="CATEGORY-DROPDOWN">Category</label>
<select class="form-control" name="category" id="category-dropdown">
<option value="">Select Category</option>
<?php
include_once('includes/config.php');
$id = $_POST["id"];
$result = mysqli_query($con,"SELECT * FROM category");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["categoryName"];?></option>
<?php
} 
?>
</select>
</div>
<div class="form-group">
<label for="SUBCATEGORY">Sub Category</label>
<select class="form-control" name="subcategory" id="sub-category-dropdown">
</select>
</div>
 <div class="form-group">
         <label for="mobileno">Phone Number</label>
            <input class="form-control" id="mobileno" name="mobileno" type="text" value=""  required />
                </div>
 <div class="form-group">
         <label for="name">Name</label>
            <input class="form-control" id="name" name="name" type="text" value=""  required />
                </div>
<div class="form-group">
         <label for="alterno">alterno</label>
            <input class="form-control" id="alterno" name="alterno" type="text" value=""  required />
                </div>
<div class="form-group">
         <label for="email">Email</label>
            <input class="form-control" id="email" name="email" type="text" value=""  required />
                </div>
 <div class="form-group">
<label for="REASON-DROPDOWN">reason</label>
<select class="form-control" name="reason" id="reason-dropdown">
<option value="">Select reason</option>
<?php
require_once('includes/config.php');
$id = $_POST["id"];
$result = mysqli_query($con,"SELECT * FROM reason");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["reasonType"];?></option>
<?php
} 
?>
</select>
</div>
<div class="form-group">
<label for="SUBREASON">Sub Reason</label>
<select class="form-control"  name="subreason" id="sub-reason-dropdown">
</select>
</div>
<div class="form-group">
         <label for="description">Description</label>
            <input class="form-control" id="description" name="description" type="text" value=""  required />
                </div>


     
                </div>
                      
                <!-- /.card-body -->

                <div class="card-footer">                  
                <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
$('#category-dropdown').on('change', function() {
var categoryid = this.value;
$.ajax({
url: "fetch-subcategory-by-category.php",
type: "POST",
data: {
categoryid: categoryid
},
cache: false,
success: function(result){
$("#sub-category-dropdown").html(result);
}
});
});
});
</script>
<script>
$(document).ready(function() {
$('#reason-dropdown').on('change', function() {
var reasonid = this.value;
$.ajax({
url: "fetch-subreason.php",
type: "POST",
data: {
reasonid: reasonid
},
cache: false,
success: function(result){
$("#sub-reason-dropdown").html(result);
}
});
});
});
</script>
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>


