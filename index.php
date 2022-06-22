<?php require 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <div class="mainn" >
        <h2>Trade-In-Offer</h2>
        <h1>Super value deals<br> On all products</h1>
        <p>Save more with coupons & up to 50% off</p>
        <button class="btnS">Shop now</button>
      </div>
      <div class="f" >
      <div class="feat">
       <div class="slide">
        <img src="images/f1-min.png" alt="">
        <button class="btnS">Shipping now</button>
       </div>
       <div class="slide">
        <img src="images/f2-min.png" alt="">
        <button class="btnS">Online order</button>

       </div>
       <div class="slide">
        <img src="images/f3-min.png" alt="">
        <button class="btnS">Save money</button>

       </div>
       <div class="slide">
        <img src="images/f4-min.png" alt="">
        <button class="btnS">Promotions</button>

       </div>
       <div class="slide">
        <img src="images/f5-min.png" alt="">
        <button class="btnS">Happy sell</button>

       </div>
       <div class="slide">
        <img src="images/f6-min.png" alt="">
        <button class="btnS">F24/7 support</button>
       </div>
       <div class="slide">
        <img src="images/f2-min.png" alt="">
        <button class="btnS">Shipping now</button>
       </div>
       <div class="slide">
        <img src="images/f3-min.png" alt="">
        <button class="btnS">Online order</button>
       </div>
       <div class="slide">
        <img src="images/f4-min.png" alt="">
        <button class="btnS">Save money</button>
       </div>
       <div class="slide">
        <img src="images/f5-min.png" alt="">
        <button class="btnS">Promotions</button>
       </div>
       <div class="slide">
        <img src="images/f6-min.png" alt="">
        <button class="btnS">Happy Sell</button>
       </div>
       <div class="slide">
        <img src="images/f1-min.png" alt="">
        <button class="btnS">F24/7 support</button>
       </div>
    </div>
      </div>
      <div class="products">
        <h1>Featured Products</h1>
        <p>Summer collection New morden designs</p>
        <div class="row col-12 prod">
          <?php include 'connectsql.php';
          $req="SELECT * FROM products ORDER BY id LIMIT 8";
          $sql=mysqli_query($conn,$req);
          while($row = mysqli_fetch_assoc($sql))
            {
            print '<div id="ca" class="card col-3" style="width: 18rem;">
            <img src="'.$row['img'].'" class="card-img-top" alt="..." style="height:35vh;max-width:100%;">
            <div class="card-body">
              <h5 class="card-title">'.$row['name'].'</h5>
              <p class="card-text">'.$row['description'].'</p>
              <br>
              <h4>'.$row['prix'].'$</h4>
              <a href="product.php?id='.$row['id'].'" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
          </div>';
          $id=$row['id'];
          }
          ?>
        </div>
        <h3 class="more"><button id="load_more"  data-id="<?php echo $id?>">Show more >>></button></h3>
      </div>
      <div class="row -col-12" id="stat">
        <div class=" st col-3" >
          <h3>Clients</h3>
          <div class="progres">
          <h4>+</h4><h4 class="pro">40</h4>
        </div>
        </div>
        <div class="st col-3" >
          <h3>Products</h3>
          <div class="progres">
            <h4>+</h4>
          <h4 class="pro">60</h4>
          </div>
        </div>
        <div class="st col-3" >
          <h3>Likes</h3>
          <div class="progres">  <h4 >+</h4><h4 class="pro">80</h4></div>
        </div>
        <div class="st col-3">
          
          <h3>Clients</h3>
          <div class="progres">  <h4 >+</h4><h4 class="pro" >30</h4></div>   
             </div>
      </div>
      <div class="new">
        <h1>
          New Arrival
        </h1>
        <p>Summer collection New morden designs</p>

        <div class="row col-12" id="prods">
          <div id="ca2" class="card col-3" style="width: 18rem;">
            <img src="images/masaaki-komori-9ugEeqflo70-unsplash-min.jpg" class="card-img-top" alt="..." style="height:35vh;max-width:100%;">
            <div class="card-body">
              <h5 class="card-title">Adidas</h5>
              <p class="card-text">Cartoon Astronaut T-shirts.</p>
              <h4>25$</h4>
              <a href="product.php" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
          </div>
          <div id="ca2" class="card col-3" style="width: 18rem;">
            <img src="images/sincerely-media-9ShY-Tq70Mc-unsplash-min.jpg" class="card-img-top" alt="..." style="height:35vh;max-width:100%;">
            <div class="card-body">
              <h5 class="card-title">Nike</h5>
              <p class="card-text">Cartoon Astronaut T-shirts.</p>
              <h4>25$</h4>
              <a href="product.php" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
          </div>
          <div id="ca2" class="card col-3" style="width: 18rem;">
            <img src="images/md-salman-tWOz2_EK5EQ-unsplash-min.jpg" class="card-img-top" alt="..." style="height:35vh;max-width:100%;">
            <div class="card-body">
              <h5 class="card-title">Dolce & Gabana</h5>
              <p class="card-text">Cartoon Astronaut T-shirts.</p>
              <h4>25$</h4>
              <a href="product.php" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
          </div>
          <div id="ca2" class="card col-3" style="width: 18rem;">
            <img src="images/alex-haigh-fEt6Wd4t4j0-unsplash-min.jpg" class="card-img-top" alt="..." style="height:35vh;max-width:100%;">
            <div class="card-body">
              <h5 class="card-title">Dolce & Gabana</h5>
              <p class="card-text">Cartoon Astronaut T-shirts.</p>
              <h4>25$</h4>
              <a href="product.php" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
          </div>
       </div>
          
        <div class="col-12 news">
            <div class="col-6" id="imgS1">
              <div>
                <h4>Crazy deals</h4>
                <h1>buy 1 get 1 free</h1>
                <button type="button" class="btn btn-danger" id="Lear">Learn more</button>
              </div>
            </div>
            <div class="col-6" id="imgS2">
              <div>
                <h4>Crazy deals</h4>
                <h1>buy 1 get 1 free</h1>
                <button type="button" class="btn btn-danger" id="coll">Collection</button>
              </div>
            </div>
            <div class="col-4" id="imgTS1">
              <div>
              <h4>Crazy deals</h4>
              <h2>buy 1 get 1 free</h2>
            </div>
            </div>
            <div class="col-4" id="imgTS2">
              <div>
                <h4>Crazy deals</h4>
                <h2>buy 1 get 1 free</h2>
              </div>
            </div>
            <div class="col-4" id="imgTS3">
              <div>
                <h4>Crazy deals</h4>
                <h2>buy 1 get 1 free</h2>
              </div>
            </div>

        </div>
      </div>
      <div class="feedbacks">
      <h1>Our coummunity <strong class="feed">Feedbacks</strong></h1>
      <div id="fb" class="row col-12">
       <div id="fb2"  class="row col-5">
          <img src="images/jonas-kakaroto-KIPqvvTOC1s-unsplash-min.jpg" alt="fb">
        </div>
        <div id="firstfb" class="col-7">
          <i class="fa-solid fa-quote-left" id="quote"></i>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet nesciunt porro dicta. Aperiam quo vel quae vero culpa debitis asperiores similique atque dolorem reiciendis molestiae aspernatur enim, corrupti at ipsa!</p>
     <h4>Jonnas kakaroto</h4>
        </div>
        </div>
        </div>
        <h3 class="moree">Learn more>>></h3>
      </div>
</body>
<script src="index1.js"></script>
<script src="https://kit.fontawesome.com/1f19d273e8.js" crossorigin="anonymous"></script>

</html>  
<?php include"footer.php"?>
