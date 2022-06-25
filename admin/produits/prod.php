
<!doctype html>
<?php
session_start();
?>
<?php include '../../functions.php';
$products=getAllProducts();
if(isset($_GET['id'])){
 suppProd($_GET['id']);}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard Admin</title>

<link href="../../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">E-shop</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="deconnexion.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="prod.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../dashbord.php">
              <span data-feather="layers" class="align-text-bottom"></span>
              Profile
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
    <div class="ajout"></div>
   <?php if(isset($_GET['ajout']) && ($_GET['ajout']=="ok")){
print '<script>
function prodAjou(){
div=document.querySelector(".ajout");
divint=document.createElement("div");
divint.className="alert alert-success";
pint=document.createTextNode("Produit ajoute avec success");
divint.append(pint);
div.append(divint);
};
prodAjou();
</script>';}
?>
   <?php if(isset($_GET['delete']) && ($_GET['delete']=="ok")){
print '<script>
function prodAjou(){
div=document.querySelector(".ajout");
divint=document.createElement("div");
divint.className="alert alert-danger";
pint=document.createTextNode("Produit supprimee avec success");
divint.append(pint);
div.append(divint);
};
prodAjou();
</script>';}
?>
   <?php if(isset($_GET['modif']) && ($_GET['modif']=="ok")){
print '<script>
function prodAjou(){
div=document.querySelector(".ajout");
divint=document.createElement("div");
divint.className="alert alert-primary";
pint=document.createTextNode("Produit modifier avec success");
divint.append(pint);
div.append(divint);
};
prodAjou();
</script>';}
?>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produits</h1>
          <div>
            <button type="submit" name="modifNom" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter</button>
          </div>
      </div>
      <table class="table table-dark table-hover">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prod Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
    $id=1;
     while($row=mysqli_fetch_assoc($products)){
      print '<th scope="row">'.$id.'</th>
      <td>'.$row['name'].'</td>
      <td>'.$row['description'].'</td>
      <td>
      <a href="modifier.php" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal'.$row['id'].'">Modifier </a>
            <a href="prod.php?id='.$row['id'].'" name="supp" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>';
    $id++;}?>
  </tbody>
      </table>
      </div>
    </main>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="ajouter.php" method="post">
            <div class="form-group mt-1">
                <input type="text" name="nom" class="form-control" placeholder="Nom du produit">
            </div>
            <div class="form-group mt-1">
                <input type="number" name="prix" class="form-control" placeholder="prix du produit">
            </div>
            <div class="form-group mt-1">
                <input type="text" name="description" class="form-control" placeholder="Type de produit">
            </div>
            <div class="form-group mt-1">
                <textarea  name="longdesc" class="form-control" placeholder="Description du prduit"></textarea>
            </div>
            <div class="form-group mt-1">
                <input type="text" name="img" class="form-control" placeholder="url de l'image">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php foreach($products as $index =>$produit){?>

<div class="modal fade" id="editModal<?php echo $produit['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="modifier.php" method="post">
          <input type="hidden" value="<?php echo $produit['id']?>" name="id">
            <div class="form-group mt-1">
                <input type="text" name="nom" class="form-control" placeholder="<?php echo $produit['name']?>">
            </div>
            <div class="form-group mt-1">
                <input type="number" name="prix" class="form-control" placeholder="<?php echo $produit['prix']?>">
            </div>
            <div class="form-group mt-1">
                <input type="text" name="description" class="form-control" placeholder="<?php echo $produit['description']?>">
            </div>
            <div class="form-group mt-1">
                <textarea  name="longdesc" class="form-control" placeholder="<?php echo $produit['longDesc']?>"></textarea>
            </div>
            <div class="form-group mt-1">
                <input type="text" name="img" class="form-control" placeholder="<?php echo $produit['img']?>">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php }?>
    </body>
    <script src="../../js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1f19d273e8.js" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      <script>feather.replace();</script>
</html>