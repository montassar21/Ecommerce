<?php 
session_start();
include '../../functions.php';
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$desc=$_POST['description'];
$longdesc=$_POST['longdesc'];
$img=$_POST['img'];
$conn=connectS();
$sql = "insert into products(name,prix,description,longDesc,img) value('$nom','$prix','$desc','$longdesc','$img')";
$res=mysqli_query($conn,$sql);
if($res){
    header('location:prod.php?ajout=ok');
}
?>