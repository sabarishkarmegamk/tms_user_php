<?php

session_start();
require_once('includes/config.php');


/// update data
if(isset($_POST['reason']) && !empty($_GET['id'])){

    $fullName = $_POST['name'];
    $courseName = $_POST['category'];
       $reason=$_POST['reason']; $description=$_POST['description'];
    $editId = $_GET['id'];
    if(!empty($courseName)){
      $query = "UPDATE useradd

      SET name ='$fullName', 
       category ='$courseName' ,   reason='$reason',   description='$description'
                WHERE id ='$editId'";
      $result = $con->query($query);
      if($result){
          echo "<script>alert('Edit-allcalls updated!!');</script>";
       echo "<script type='text/javascript'> document.location = 'appoinment.php'; </script>";

      } 
    }
  }




if(isset($_GET['id']) && !empty($_GET['id'])){
    $editId= $_GET['id'];
    $query ="SELECT * FROM useradd WHERE id='$editId'";
    $result = $con->query($query);
    $editData=$result->fetch_assoc();
    $name= $editData['name'];
    $category= $editData['category'];
    $reason= $editData['reason'];
       $description= $editData['description'];

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

  <?php  
  $query = "SELECT * from useradd";
$result = $con->query($query);
$followingdata = $result->fetch_assoc()
                            ?>

<form action="" method="post">
 <div class="card-body">
 <div class="form-group">

        <div class="form-group">
             <label for="name"> Name</label>
<input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
</div>
 <div class="form-group">
             <label for="description"> Description</label>
<input type="text" class="form-control" name="description" value="<?php echo $description; ?>">
</div>

        <div class="form-group">
             <label> Category</label>
<select name="category" class="form-control">
    <option value="">Select Category</option>
    <?php 
    $query ="SELECT categoryName FROM category";
    $result = $con->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $opt =$optionData['categoryName'];
    ?>
    <?php
    if(!empty($category) && $category== $opt){
    ?>
    <option value="<?php echo $opt; ?>" selected><?php echo $opt; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $opt; ?>" ><?php echo $opt; ?> </option>
   <?php
    }}
    ?>
</select>
</div> 
<div class="form-group">
        <input type="submit" class="btn btn-primary" name="reason" value="Appointment">
        <input type="submit" class="btn btn-primary" name="reason" value="Follow Up">
        <input type="submit" class="btn btn-primary" name="reason" value="Call Backs">
        <input type="submit" class="btn btn-primary" name="reason" value="Not Picked"></div>
        <input type="submit" class="btn btn-primary" name="reason" value="Not Interest">
        <input type="submit" class="btn btn-primary" name="reason" value="Blocked">
         <input type="submit" class="btn btn-danger" name="reason" value="<?php echo $reason; ?>">
</div> 
</form>

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

