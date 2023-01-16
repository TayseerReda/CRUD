<?php
include '../general/env.php';
?>
<?php
$id=$_GET['delete'];

$delete="DELETE FROM share WHERE stud_id = $id ";
mysqli_query($conn,$delete);

$del="DELETE FROM student WHERE id= $id ";
mysqli_query($conn,$del);



header('Location:read.php');
?>