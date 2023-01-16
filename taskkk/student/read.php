<?php
include '../general/env.php';
include '../general/func.php';
include '../share/header.php';
include '../share/footer.php';
?>


<?php

$select="SELECT * FROM `concate`";
$row=mysqli_query($conn,$select);


?>

</table>

<div >
<table class="table table-dark">

<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>EMAIL</td>
    <td>PHONE</td>
    <td>COUNTRY</td>
    <td>COURSE</td>
    <td>ACTION</td>
</tr>
<?php foreach($row as $data){ ?>
<tr>
  
    <td><?=$data["stud_id"]?></td>
    <td><?=$data["stud_name"]?></td>
    <td><?=$data["email"]?></td>
    <td><?=$data["phone"]?></td>
    <td><?=$data["coun_name"]?></td>
    <td><?=$data["course_name"]?></td>
    <td>

      <a class="btn btn-danger" href="/taskkk/student/delete.php?delete=<?=$data['id']?>">DELETE</a>
      <a class="btn btn-success"  href="/taskkk/student/update.php?edit=<?=$data['id']?>"> UPDATE </a>

  
    </td>

</tr>
<?php } ?>

</table>
