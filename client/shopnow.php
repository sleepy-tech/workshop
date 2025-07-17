<?php
$conn = mysqli_connect("localhost", "root", "", "jersey");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shop Now - Jersey Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#c8102e',
            accent: '#fcb900',
            dark: '#111111'
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-50 text-dark">

  <!-- Navbar -->
  <nav class="bg-primary text-white shadow">
    <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
      <h1 class="text-2xl font-bold ">🏏 Jersey Store</h1>
      <div class="space-x-4">
        <a href="client_home.php" class="hover:underline">Home</a>
        <a href="cart.php" class="hover:underline">Cart</a>
      </div>
    </div>
  </nav>

  <!-- Hero Banner -->
  <section class="bg-white text-center py-12 shadow-md">
    <h2 class="text-4xl font-semiboldtext-primary mb-2 text-red-500  ">Shop Official Jerseys</h2>
    <p class="text-lg text-gray-600">Support your team in style. Get the latest jerseys now!</p>
  </section>

  <!-- Product Grid -->
  <section class="max-w-7xl mx-auto py-12 px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <!-- <?php while($row = mysqli_fetch_assoc($result)): ?> -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition transform hover:-translate-y-1 hover:shadow-xl">
          <div class="w-full h-52 bg-gray-100 flex items-center justify-center">
            <?php if (!empty($row['image'])): ?>
              <img src="<?= htmlspecialchars($row['image']) ?>" alt="Jersey" class="h-full object-cover">
            <?php else: ?>
              <span class="text-gray-400">No Image</span>
            <?php endif; ?>
          </div>
          <div class="p-4">
            <h3 class="text-xl font-bold mb-1"><?= htmlspecialchars($row['name']) ?></h3>
            <p class="text-sm text-gray-600 mb-1">Size: <?= htmlspecialchars($row['size']) ?></p>
            <p class="text-lg font-semibold text-primary mb-4">Rs. <?= htmlspecialchars($row['price']) ?></p>

            <form method="POST" action="add_to_cart.php">
              <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
              <button type="submit" class="w-full bg-accent text-black font-semibold py-2 rounded hover:bg-yellow-500 transition">
                Add to Cart 🛒
              </button>
            </form>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-4 mt-12">
    &copy; <?= date("Y") ?> Jersey Store. All rights reserved.
  </footer>

</body>
</html>

<?php mysqli_close($conn); ?>
