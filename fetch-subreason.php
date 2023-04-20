<?php
require_once('includes/config.php');
$reasonid = $_POST["reasonid"];
$result = mysqli_query($con,"SELECT * FROM subreason where reasonid = $reasonid");
?>
<option value="">Select SubReason</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["reasonid"];?>"><?php echo $row["subreason"];?></option>
<?php
}
?>