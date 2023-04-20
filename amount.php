<?php session_start();
require_once('includes/config.php');
 $sql = "SELECT * FROM `useradd`";
    $all_categories = mysqli_query($con,$sql);

//Code for Registration 
if(isset($_POST['submit']))
{
  $cost=$_POST['cost'];
  $advance=$_POST['advance'];
  $pending=$_POST['pending'];
  $notify=$_POST['notify'];
  $description=$_POST['description'];
  $name=$_POST['name'];
  $id=$_GET['id'];
$msg=mysqli_query($con,"insert into amount(cost,advance,pending,notify,description,uid) values('$cost','$advance','$pending','$notify','$description','$name')");

if($msg)
{
    echo "<script>alert('Project Amount Added!!');</script>";
    echo "<script type='text/javascript'> document.location = 'appoinment.php'; </script>";
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
$id=$_GET['id'];
$query=mysqli_query($con,"select * from useradd where id='$id'");
while($result=mysqli_fetch_array($query))
{?>
      
                                 <form method="post" >
                             <div class="card-body">
       <div class="form-group">
             <label for="name"> Name</label>
             <input class="form-control" id="name" name="name" type="text" value="<?php echo $result['name'];?>" required />
               </div>                        
        <div class="form-group">
             <label for="">Project Cost</label>
   <input class="form-control" id="Enter project cost" name="cost" type="text" value="" required />  </div>
   
         <div class="form-group">
             <label for="">Project advance</label>
   <input class="form-control" id="Enter project advance" name="advance" type="text" value="" required />  </div>
    <div class="form-group">
             <label for="">Project pending</label>
   <input class="form-control" id="Enter project pending" name="pending" type="text" value="" required />  </div>
    <div class="form-group">
             <label for="">Project notify</label>
   <input class="form-control" id="Enter project notify" name="notify" type="text" value="" required />  </div>
    <div class="form-group">
             <label for="">Project Des</label>
   <input class="form-control" id="Enter project Description" name="description" type="text" value="" required />  </div> 
   
        
        
        
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

  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
               
                             <thead>
                                        <tr>
                                          <th>#</th>
                      <th>name</th>
                      <th>project cost</th>
                      
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                       <th>name</th>
                      <th>project cost</th>
                      
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                             <?php 
$ret=mysqli_query($con,"select * from  amount");


                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                      <td><?php echo $cnt;?></td>
                      <td><?php echo $row['cost'];?></td>
                      <td><?php echo $row['uid'];?></td>
                          </tr>
                              <?php $cnt=$cnt+1; }?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</section>
</div>


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
<?php } ?>

