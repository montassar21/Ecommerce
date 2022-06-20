<?php
function connectS(){
  $localhost='localhost';
  $username='root';
  $password='';
  $db_name='eshop';
  $conn = new mysqli($localhost, $username, $password,$db_name) or die("Connect failed: %s\n". $conn -> error);
  return $conn;
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

?>