<?php include "header.php";?>
<?php
if(isset($_GET['add'])){
if(isset($_SESSION['email'])){
addProdToPan($_GET['id'],$_GET['qte'],$_GET['size-choice']);
updatePanier();}
else{
  header('location:signin.php');
}
}
if(isset($_GET['idd'])){
  deleteFromPanier($_GET['idd']);
  updatePanier();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="w-fullcard row col-12"> 
<div class="w-full col-12 relative">
  <div class="relative bg-gray-900 bg-opacity-85 transition-opacity"></div>
  <div class="relative inset-0">
    <div class="relative inset-0">
      <div class="pointer-events-none inset-y-0  ">
        <div class="pointer-events-auto ms-4  max-w  py-6">
          <div class="flex h-ful flex-col  bg-white shadow-xl">
            <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
              <div class="flex items-start justify-between">
                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                <div class="ml-3 flex h-7 items-center">
                  <a href="shop.php" type="button" class="-m-2 p-2 text-blue-400 hover:text-gray-900">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
</a>
                </div>
              </div>
              <div class="mt-8">
                <div class="flow-root">
                  <ul role="list" class="-my-6 divide-y divide-gray-200">
                    <?php
                    if(isset($_SESSION['firstname'])){
                      $conn=connectS();
                     $req2="SELECT * FROM panier WHERE usermail='".$_SESSION['email']."'";
                     $sql2=mysqli_query($conn,$req2);
                     $sum=0;
                     while($row = mysqli_fetch_assoc($sql2))
                       {
                       print '<li class="flex py-6">
                       <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                         <img src="'.$row['img'].'" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                       </div>
   
                       <div class="ml-4 flex flex-1 flex-col">
                         <div>
                           <div class="flex justify-between text-base font-medium text-gray-900">
                             <h3>
                               <a href="#">'.$row['namee'].' </a>
                             </h3>
                             <p class="ml-4">'.$row['prix'].'</p>
                           </div>
                           <p class="mt-1 text-sm text-gray-500">'.$row['qte'].'</p>
                         </div>
                         <div class="flex flex-1 items-end justify-between text-sm">
                           <p class="text-gray-500">'.$row['taille'].'</p>
   
                           <div class="flex">
                           <form action="panier.php">
                             <a href="panier.php?idd='.$row['idd'].'" type="submit" name="remove" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</a>
                           </form>
                             </div>
                         </div>
                       </div>
                     </li>';
                     $sum+=$row['qte']*$row['prix'];
            
                     }}
                     else{
                      echo "Sign in with your account and checkh your store .";
                     }
                     ?>

                    <!-- More products... -->
                  </ul>
                </div>
              </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
              <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Subtotal</p>
                <p><?php if(isset($_SESSION['firstname'])) echo "$ ".$sum;
                else echo "$0";?></p>
              </div>
              <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
              <div class="mt-6">
                <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-amber-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-amber-700">Checkout</a>
              </div>
              <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                <p>
                  or <a href="index.php" type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                    </div>
</body>
</html>
<?php include "footer.php";?>
