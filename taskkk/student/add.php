<?php
include '../general/env.php';
include '../share/header.php';
include '../share/footer.php';
?>
<?php
$select="SELECT * FROM country";
$country=mysqli_query($conn,$select);


$select="SELECT * FROM course";
$course=mysqli_query($conn,$select);



if(isset($_POST["go"])){
 $name=$_POST["name"];
 $emai=$_POST["email"];
 $phone=$_POST["phone"];
 $city=$_POST["city"];
 $cours=$_POST["course"];

$insert="INSERT INTO student VALUES (null,'$name','$emai','$phone')";
mysqli_query($conn,$insert);

$select="SELECT*FROM student WHERE phone='$phone'";
$student=mysqli_query($conn,$select);
$student=mysqli_fetch_assoc($student);
$id=$student["id"];
//echo $student["id"];

$insert="INSERT INTO share VALUES ($id, $city, $cours)";
mysqli_query($conn,$insert);
}





?>



<div class="form">

<div  class="container col-6">
    
    <form method="POST" >
      <div class="form-group ">
      <label for="" >Name</label>
        <input type="text" class="form-control" name="name" >
      </div>
      <div class="form-group">
      <label for="">Email</label>
        <input type="text" class="form-control" name ="email">
      </div>
      <div class="form-group">
      <label for="">Phone</label>
        <input type="text" class="form-control"  name ="phone">
      </div>



      <div class="form-group">
        <label for="">Country</label>
     <select name="city" id="">
      <?php foreach($country as $data){?>
        <option value="<?=$data["id"]?>"><?=$data["name"]?></option>
     <?php }?>
    
     </select>
      </div >


      <div class="form-group">
        <label for="">Cource Name</label>
     <select name="course" id="">
      <?php foreach($course as $data){?>
        <option value="<?=$data["id"]?>"><?=$data["name"]?></option>
     <?php }?>
    
     </select>
      </div >
     

    
     
      <button type="submit" class="btn btn-primary " name="go">Submit</button>
    </form>
    
    </div>
    
  
    
    </div>
    </div>
