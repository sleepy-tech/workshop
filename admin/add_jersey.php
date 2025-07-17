<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="src/output.css">
</head>

<body>

  <?php include './includes/navbar.php' ?>

  <div class="flex">

    <?php include './includes/sidebar.php' ?>
  <div class="  bg-white shadow-md rounded-lg p-6 mt-6 w-full ">
    <form class="max-w-sm mx-auto mx">
      <div class="mb-5">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">jersey_name</label>
        <input type="text" id="text" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
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
      <button class="bg-red-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Add
      </button>

    </form>
    </div>
</div>
</body>

</html>