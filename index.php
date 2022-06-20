<?php require 'header.php';?>

      <div class="mainn" >
        <h2>Trade-In-Offer</h2>
        <h1>Super value deals<br> On all products</h1>
        <p>Save more with coupons & up to 50% off</p>
        <button class="btnS">Shop now</button>
      </div>
      <div class="f" >
      <div class="feat">
       <div class="slide">
        <img src="images/f1.png" alt="">
        <button class="btnS">Shipping now</button>
       </div>
       <div class="slide">
        <img src="images/f2.png" alt="">
        <button class="btnS">Online order</button>

       </div>
       <div class="slide">
        <img src="images/f3.png" alt="">
        <button class="btnS">Save money</button>

       </div>
       <div class="slide">
        <img src="images/f4.png" alt="">
        <button class="btnS">Promotions</button>

       </div>
       <div class="slide">
        <img src="images/f5.png" alt="">
        <button class="btnS">Happy sell</button>

       </div>
       <div class="slide">
        <img src="images/f6.png" alt="">
        <button class="btnS">F24/7 support</button>
       </div>
       <div class="slide">
        <img src="images/f2.png" alt="">
        <button class="btnS">Shipping now</button>
       </div>
       <div class="slide">
        <img src="images/f3.png" alt="">
        <button class="btnS">Online order</button>
       </div>
       <div class="slide">
        <img src="images/f4.png" alt="">
        <button class="btnS">Save money</button>
       </div>
       <div class="slide">
        <img src="images/f5.png" alt="">
        <button class="btnS">Promotions</button>
       </div>
       <div class="slide">
        <img src="images/f6.png" alt="">
        <button class="btnS">Happy Sell</button>
       </div>
       <div class="slide">
        <img src="images/f1.png" alt="">
        <button class="btnS">F24/7 support</button>
       </div>
    </div>
      </div>
      <div class="products">
        <h1>Featured Products</h1>
        <p>Summer collection New morden designs</p>
        <div class="row col-12 prod">
          <?php include 'connectsql.php';
          $req='SELECT * FROM products';
          $sql=mysqli_query($conn,$req);
          
          
          while($row = mysqli_fetch_assoc($sql))
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
          }
          ?>
        </div>
        <h3 class="more"><button>Show more >>></button></h3>
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

        <div class="row col-12 prod">
          <div id="ca2" class="card col-3" style="width: 18rem;">
            <img src="images/masaaki-komori-9ugEeqflo70-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Adidas</h5>
              <p class="card-text">Cartoon Astronaut T-shirts.</p>
              <h4>25$</h4>
              <a href="#" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
          </div>
          <div id="ca2" class="card col-3" style="width: 18rem;">
            <img src="images/sincerely-media-9ShY-Tq70Mc-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nike</h5>
              <p class="card-text">Cartoon Astronaut T-shirts.</p>
              <h4>25$</h4>
              <a href="#" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
          </div>
          <div id="ca2" class="card col-3" style="width: 18rem;">
            <img src="images/md-salman-tWOz2_EK5EQ-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dolce & Gabana</h5>
              <p class="card-text">Cartoon Astronaut T-shirts.</p>
              <h4>25$</h4>
              <a href="#" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
            </div>
          </div>
          <div id="ca2" class="card col-3" style="width: 18rem;">
            <img src="images/alex-haigh-fEt6Wd4t4j0-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dolce & Gabana</h5>
              <p class="card-text">Cartoon Astronaut T-shirts.</p>
              <h4>25$</h4>
              <a href="#" class="panier btn btn-primary" id="pan"><i class="fa-solid fa-cart-plus"></i></a>
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
        <center>
        <div class="cefb">
          <br><br><br>
        <div class="firstfb">
          <img src="images/jonas-kakaroto-KIPqvvTOC1s-unsplash.jpg" alt="fb">
          <i class="fa-solid fa-quote-left quote"></i>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet nesciunt porro dicta. Aperiam quo vel quae vero culpa debitis asperiores similique atque dolorem reiciendis molestiae aspernatur enim, corrupti at ipsa!</p>
       <h4>Jonnas kakaroto</h4>
        </div>
        </div>
        </center>
        <h3>Learn more >>></h3>
      </div>
      <div class=" col-12 sign">
        <div class="si col-6">
          <h3>Sign up for Newsletters</h3>
          <p>Get E-mail updates about our latest shop and<strong>special offers</strong> </p>
        </div>
          <input type="email" class="input">
          <button id="bti" type="button" class="btn btn-primary" id="sig"><a href="">Sign up</button>
      </div>
    <script src="index.js"></script>
<?php include"footer.php"?>
