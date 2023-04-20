<?php
include_once('includes/config.php');
$categoryid = $_POST["categoryid"];
$result = mysqli_query($con,"SELECT * FROM subcategory where categoryid = $categoryid");
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["categoryid"];?>"><?php echo $row["subcategory"];?></option>
<?php
}
?>