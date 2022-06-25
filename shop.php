
<?php include "header.php";?>
<center>
<div class="products">
<h1>Featured Products</h1>
<p>Summer collection New morden designs</p>
<div class="row col-12 prod">
<?php
$products=getAllProducts();
  while($row=mysqli_fetch_assoc($products))
    {
    print '<div id="ca" class="card col-3" style="width: 18rem;">
    <img src="'.$row['img'].'" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">'.$row['name'].'</h5>
      <p class="card-text">'.$row['description'].'</p>
      <br>
      <h4>'.$row['prix'].'$</h4>
      <a href="product.php?id='.$row['id'].'" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
    </div>
  </div>    ';
  }?>
  </div>
</div>
</center>
<?php include "footer.php";?>
