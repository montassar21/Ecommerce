<?php
include '../functions.php';
session_start();
if (isset($_SESSION['nom'])){
  header('location:dashbord.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/"></script>
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<?php 
$admin=true;
if(isset($_POST['login'])){
  $admin=VerifierAdmin($_POST);
  if($admin==false){
    print "<script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'verifier vos donnés !',
      time:2000,
    })</script>";
  }
  else if(is_array($admin) && count($admin)>0){
$_SESSION['nom']=$admin['nom'];
$_SESSION['email']=$admin['email'];
$_SESSION['mp']=$admin['mp'];
header('location:dashbord.php');
}
}
?>
<div class="min-h-full flex items-center justify-center py-12 px-6 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-14">
    <div>
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
      <h1 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Espace Admin  : Login</h1>
    </div>
    <form class="mt-4 py-2 mb-4 space-y-10" action="login.php" method="post">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="email-address" class="sr-only">Email address</label>
          <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="mp" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
        </div>
      </div>
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
          <label for="remember-me" class="ml-3 block text-sm text-gray-900"> Remember me </label>
        </div>
      </div>

      <div>
        <button name="login" type="submit" class="group relative w-full flex justify-center py-3 px-5 border border-transparent text-sm font-medium rounded-md text-white bg-amber-900 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-indigo-50 group-hover:text-indigo-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Sign in
        </button>
      </div>
    </form>
  </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.all.min.js" integrity="sha512-YXld82fwBSmWdqBekCK0oFyquMBiHZGGQnvGjFMwwx4+uxTdHP7DSisFWoFQiZ+G/43mnAmrY/fMdXuDVDdAKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>