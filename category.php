<?php
require_once('includes/config.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
    $editId= $_GET['id'];
    $query ="SELECT * FROM category WHERE id='$editId'";
    $result = $con->query($query);
    $editData=$result->fetch_assoc();
    $categoryName= $editData['categoryName'];
}

?>