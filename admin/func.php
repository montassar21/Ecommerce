<?php 

function suppProd($data){
    $conn=connectS();
    $sql="DELETE FROM products WHERE id='$data'";
    $res=mysqli_query($conn,$sql);
    if($res){
      header('location:prod.php');
    }
  
}
?>