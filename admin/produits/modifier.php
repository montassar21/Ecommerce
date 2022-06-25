<?php
include '../../functions.php';
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$desc=$_POST['description'];
$longdesc=$_POST['longdesc'];
$img=$_POST['img'];
$id=$_POST['id'];
$conn=connectS();
$sql = "update products set name='$nom',prix='$prix',description='$desc',longDesc='$longdesc',img='$img' WHERE id='$id'";
$res=mysqli_query($conn,$sql);
if($res){
    header('location:prod.php?modif=ok');
}
?>