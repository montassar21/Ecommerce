<?php 
include 'connectsql.php';

if($_POST['id']<=17){
$sql="SELECT * FROM products WHERE id > '".$_POST['id']."' ORDER BY id LIMIT 4";
$data=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($data))
{
print '<div id="ca" class="card col-3" style="width: 18rem;">
<img src="'.$row['img'].'" class="card-img-top" alt="..." style="height:35vh;max-width:100%;">
<div class="card-body">
  <h5 class="card-title">'.$row['name'].'</h5>
  <p class="card-text">'.$row['description'].'</p>
  <br>
  <h4>'.$row['prix'].'$</h4>
  <a href="product.php?id='.$row['id'].'" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
</div></div>';
$id= $row['id'];}
print'<h3 class="more"><button id="load_more"  data-id="'.$id.'">Show more>>></button></h3>';}
else{
  print'<h3 class="more"><button >Show more>>></button></h3>';}

?>