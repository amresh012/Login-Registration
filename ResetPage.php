<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <?php 
    if(isset($_SESSION['status']))
    {
        ?>
        <div class="">
            <h5><?=$_SESSION['status'];?></h5>
        </div>
        <?php
        unset($_SESSION['status']);
    }
    ?>
        <div class="w-96 bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold mb-4">Password Reset</h1>
            <form action="passwordreset.php" method="post">
                <div class="mb-4">
                    <label for="email" class="block font-medium">Email:</label>
                    <input type="email" name="email" id="email" class="w-full border rounded-md py-2 px-3 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <div class="flex items-center justify-end">
                    <button type="submit" name="password_rest_link" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">Reset Password</button>
                </div>
            </form>
        </div>
</body>
</html>
