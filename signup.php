<?php
if(isset($_SESSION['firstname'])){
  header('location:profile.php');
}?>
<?php include "header.php";?>
 <?php
include 'functions.php';
if(isset($_POST['submit'])){
  AddUser($_POST);
} 
  
?>
<div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign Up to your account</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Or
        <a href="signin.php" class="font-medium text-amber-900 hover:text-amber-500"> Sign in if you have account ? </a>
      </p>
    </div>
<div class="mt-5 md:mt-0 md:col-span-2">
      <form action="signup.php" method="post">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                <input type="text" name="name" id="first-name" autocomplete="given-name" class="py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                <input type="text" name="lname" id="last-name" autocomplete="family-name" class="py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                <input required type="text" name="email" id="email-address" autocomplete="email" class="py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input required type="password" name="password" id="password" autocomplete="password" class="py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <select id="country" name="country" autocomplete="country-name" class="py-2 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option>Tunisia</option>
                  <option>Algeria</option>
                  <option>Libye</option>
                  <option>Egypt</option>
                  <option>Maroc</option>
                </select>
              </div>

              <div class="col-span-6">
                <label for="streetadd" class="block text-sm font-medium text-gray-700">Street address</label>
                <input type="text" name="street" id="street-address" autocomplete="street-address" class="py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <input type="text" name="city" id="city" autocomplete="address-level2" class="py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                <input type="text" name="phone" id="region" autocomplete="address-level1" class="py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                <input type="text" name="postal" id="postal-code" autocomplete="postal-code" class="mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>
            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-amber-900 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.all.min.js" integrity="sha512-YXld82fwBSmWdqBekCK0oFyquMBiHZGGQnvGjFMwwx4+uxTdHP7DSisFWoFQiZ+G/43mnAmrY/fMdXuDVDdAKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include "footer.php";?>
