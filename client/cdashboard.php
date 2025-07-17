<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jersey Store - Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#c8102e',
            secondary: '#111111',
            accent: '#fcb900',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50 text-secondary">

  <!-- Navbar -->
  <nav class="bg-primary text-white p-4 shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold">Jersey Store</h1>
      <div class="space-x-4">
        <a href="#" class="hover:underline">Home</a>
        <a href="client_auth.php" class="hover:underline">Login</a>
        <a href="client_auth.php" class="hover:underline">Register</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="text-center py-16 px-6 bg-accent">
    <h2 class="text-4xl font-semibold  text-primary mb-4">Welcome to the Official Jersey Store</h2>
    <p class="text-lg text-secondary mb-6">Buy your favorite team jerseys with confidence.</p>
    <a href="client_auth.php" class="bg-primary text-white px-6 py-3 rounded hover:bg-red-700">Shop Now</a>
  </section>

  <!-- Features -->
  <section class="max-w-6xl mx-auto py-12 grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-xl font-semibold text-primary mb-2">Premium Quality</h3>
      <p>All jerseys are made with high-quality fabric and durability in mind.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-xl font-semibold text-primary mb-2">Fast Delivery</h3>
      <p>Get your jerseys delivered across Nepal within 3-5 working days.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-xl font-semibold text-primary mb-2">Secure Payment</h3>
      <p>Safe and secure payment options for worry-free transactions.</p>
    </div>
  </section>

  

</body>
</html>
