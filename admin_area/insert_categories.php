<?php
  include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
  $category_title=$_POST['cat_title'];
$insert_query="insert into `categories`( category_title ) values ('$category_title')";
$_result=mysqli_query($con,$insert_query);
if($_result){
  echo "<script>alert('category has been inserted successfully')</script>";
}

}

?>

<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-rece"></i></span>
  <input type="text" class="form-control"name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class=" bg-info border-0 p-2"name="insert_cat" value="Insert categories">
</div>
</form>