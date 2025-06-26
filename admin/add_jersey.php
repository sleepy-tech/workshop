
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
     <!-- Navbar -->
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-red-600 mb-4   text-center" > More Sell More Profit</h1>
        <a href="logout.php" class="bg-red-300 text-white px-4 py-2 rounded hover:bg-red-600">Logout</a>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white border-r p-4 space-y-4 min-h-screen">
            <a href="dashboard.php" class="block font-semibold text-gray-700 hover:text-red-600">Dashboard</a>
            <a href="add_jersey.php" class="block font-semibold text-gray-700 hover:text-red-600">Add Jersey</a>
            <a href="manage_orders.php" class="block font-semibold text-gray-700 hover:text-red-600">Manage Orders</a>
        </aside>
    
<form class="max-w-sm mx-auto">
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">jersey_name</label>
    <input type="text" id="email" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
  </div>
  <div class="mb-5">
    <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> jersey_image</label>
    <input type="file" accept="images/*" id="file" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
  </div>
  <div class="mb-5">
    <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">size</label>
    <input type="text" id="size" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
  </div>
   <div class="mb-5">
    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">price</label>
    <input type="text" id="price" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />

  </div>
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Add
</button>
   
</form>

</body>
</html>