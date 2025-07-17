<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Client Login/Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-md rounded-xl w-full max-w-md p-8">
    <h2 class="text-3xl  text-center text-red-600 mb-6 font-semibold ">Welcome to Jersey Store</h2>

    <div class="flex justify-center space-x-4 mb-6">
      <button onclick="showForm('login')" class="px-4 py-2 bg-red-500 text-white rounded-md">Login</button>
      <button onclick="showForm('register')" class="px-4 py-2 bg-red-500 text-white rounded-md">Register</button>
    </div>

    <!-- Login Form -->
    <form id="login-form" method="POST" action="client_login.php" class="">
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Email</label>
        <input type="email" name="email" required class="w-full border rounded px-3 py-2">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Password</label>
        <input type="password" name="password" required class="w-full border rounded px-3 py-2">
      </div>
      <button type="submit" class="w-full bg-red-500 text-white py-2 rounded hover:bg-blue-500">Login</button>
    </form>

    <!-- Register Form -->
    <form id="register-form" method="POST" action="clogin.php" class="hidden">
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Full Name</label>
        <input type="text" name="name" required class="w-full border rounded px-3 py-2">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Email</label>
        <input type="email" name="email" required class="w-full border rounded px-3 py-2">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Password</label>
        <input type="password" name="password" required class="w-full border rounded px-3 py-2">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Address</label>
        <input type="text" name="address" required class="w-full border rounded px-3 py-2">
      </div>
      <button type="submit" class="w-full bg-red-500 text-white py-2 rounded hover:bg-blue-500">Register</button>
    </form>

  </div>

  <script>
    function showForm(form) {
      document.getElementById('login-form').classList.add('hidden');
      document.getElementById('register-form').classList.add('hidden');
      document.getElementById(form + '-form').classList.remove('hidden');
    }
  </script>
</body>
</html>
