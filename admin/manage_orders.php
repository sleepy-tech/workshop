<!-- <?php
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "jersey");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch all orders
        $sql = "SELECT id, name, email, address, size, ordered_at FROM orders";
        $result = mysqli_query($conn, $sql);
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Orders</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 ">

    <?php include './includes/navbar.php' ?>

    <div class="flex">

        <?php include './includes/sidebar.php' ?>


        <div class="  bg-white shadow-md rounded-lg p-6 mt-6 w-full mx-4">
            <h1 class="text-3xl font-bold text-red-600 mb-6">Manage Orders</h1>

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-700 border border-gray-300">
                    <thead class="text-xs uppercase bg-gray-200 text-gray-600">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Customer Name</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Address</th>
                            <th class="px-6 py-3">Size</th>
                            <th class="px-6 py-3">Ordered At</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- <?php while ($row = mysqli_fetch_assoc($result)): ?> -->
                        <tr>
                            <td class="px-6 py-4"><?= htmlspecialchars($row['id']) ?></td>
                            <td class="px-6 py-4"><?= htmlspecialchars($row['name']) ?></td>
                            <td class="px-6 py-4"><?= htmlspecialchars($row['email']) ?></td>
                            <td class="px-6 py-4"><?= htmlspecialchars($row['address']) ?></td>
                            <td class="px-6 py-4"><?= htmlspecialchars($row['size']) ?></td>
                            <td class="px-6 py-4"><?= htmlspecialchars($row['ordered_at']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

</body>

</html>

<?php
mysqli_close($conn);
?>