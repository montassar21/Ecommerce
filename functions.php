<?php
function connectS(){
  $localhost='localhost';
  $username='root';
  $password='';
  $db_name='eshop';
  $conn = new mysqli($localhost, $username, $password,$db_name) or die("Connect failed: %s\n". $conn -> error);
  return $conn;
}
function getAllProducts(){
  $conn=connectS();
  include 'connectsql.php';
  $sql='SELECT * FROM products';
  $res=mysqli_query($conn,$sql);
  return $res;
  
}
 function AddUser($data){
    $conn=connectS();
  $sql="SELECT * FROM users WHERE email='".$data['email']."'";
  $res=mysqli_query($conn,$sql);
  $user=mysqli_fetch_assoc($res);
  if($user){
    if($user['email']===$data['email']){
        print "<script>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!',
        })</script>";
      
      return false;
      
        }}
      $mp=md5($data['password']);
      $sql1="INSERT INTO users(firstname,lastname,email,passwordd,country,addres,city,phone,postal) VALUES('".$data['name']."','".$data['lname']."','".$data['email']."','$mp','".$data['country']."','".$data['street']."','".$data['city']."','".$data['phone']."','".$data['postal']."')";
      $res1=mysqli_query($conn,$sql1);
        print "<script>
        Swal.fire(
          'Success!',
          'Registered have been succeed!',
          'success'
        )
       </script>";
    
      return true;
  }
  function VerifierUser($data){
    $conn=connectS();
    $email=$data['email'];
   $mp=md5($data['password']);
  $sql="SELECT * FROM users WHERE email='$email' AND passwordd='$mp'";
  $res=mysqli_query($conn,$sql);
  $user=mysqli_fetch_assoc($res);
  if($user==NULL){
    $user=false;
  }
  return $user;
}
function addProdToPan($id,$qte,$size){
  $conn=connectS();
  if(isset($_SESSION['email'])){
    $sql="SELECT * FROM products WHERE id='$id'";
    $res=mysqli_query($conn,$sql);
  $prod=mysqli_fetch_assoc($res);
  $req1="INSERT INTO panier(namee,prix,descc,qte,taille,usermail,img) VALUES('".$prod['name']."','".$prod['prix']."','".$prod['description']."','.$qte.','.$size.','".$_SESSION['email']."','".$prod['img']."')";
  $sql1=mysqli_query($conn,$req1);
  }
}
function deleteFromPanier($data){
  $conn=connectS();
  $sql2="DELETE FROM panier WHERE idd='$data'";
  $res2=mysqli_query($conn,$sql2); 
}
function updatePanier(){
  if(isset($_SESSION['email'])){
  $conn=connectS();
    $sql="SELECT COUNT(*) FROM panier WHERE usermail='".$_SESSION['email']."'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res);
    $r=$row["COUNT(*)"];
    echo '<script>document.getElementById("upd").innerHTML='.$r.';</script>';}
  

else{
  echo '<script>document.getElementById("upd").innerHTML=0;</script>';
}}
function VerifierAdmin($data){
  $conn=connectS();
  $email=$data['email'];
 $mp=md5($data['mp']);
$sql="SELECT * FROM administrator WHERE email='$email' AND mp='$mp'";
$res=mysqli_query($conn,$sql);
$admin=mysqli_fetch_assoc($res);
if($admin==NULL){
  $admin=false;
}
return $admin;
}

function suppProd($data){
  $conn=connectS();
  $sql="DELETE FROM products WHERE id='$data'";
  $res=mysqli_query($conn,$sql);
  if($res){
    header('location:prod.php?delete=ok');
  }

}
?>