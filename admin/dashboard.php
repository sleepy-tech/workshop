<?php
session_start();
$is_LoggedIn = $_SESSION['is_loggedin'] ?? false;
if (!$is_LoggedIn) {
    header("Location: login.php");
    exit();
}
$path = $_GET['path'] ?? null;

?>

<!-- rest of dashboard HTML code -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Local Jersey Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    

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

        <!-- Main Content -->
        <main class="w-4/5 p-6">
            <h2 class="text-xl font-bold text-red-600 mb-4 text-center ">Jersey List</h2>

            <div class="bg-white rounded shadow p-4">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                        
                            <th class="px-4 py-2 text-left">Jersey Name</th>
                            <th class="px-4 py-2 text-left">Jersey_image</th>
                            <th class="px-4 py-2 text-left">Size</th>
                            <th class="px-4 py-2 text-left">Price</th>

                            
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamic data from DB goes here -->
                        <?php
                        // Example for future use:
                        // while ($row = mysqli_fetch_assoc($jerseys)) {
                        //     echo "<tr class='border-b'>";
                        //     echo "<td class='px-4 py-2'>{$row['id']}</td>";
                        //     echo "<td class='px-4 py-2'>{$row['name']}</td>";
                        //     echo "<td class='px-4 py-2'>{$row['size']}</td>";
                        //     echo "<td class='px-4 py-2'>Rs. {$row['price']}</td>";
                        //     echo "<td class='px-4 py-2 space-x-2'>
                        //             <a href='edit.php?id={$row['id']}' class='text-red-600 hover:underline'>Edit</a>
                        //             <a href='delete.php?id={$row['id']}' class='text-red-600 hover:underline'>Delete</a>
                        //           </td>";
                        //     echo "</tr>";
                        // }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
