<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded shadow-md w-96">
    <h1 class="text-2xl font-semibold mb-4">Login</h1>
    <form action="validate.php" method="post" >
      <div class="mb-4">
        <label for="username" class="block font-medium text-gray-700">email</label>
        <input type="text" id="email" name="email" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-indigo-300" required>
      </div>
      <div class="mb-4 relative">
        <label for="password" class="block font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-indigo-300" required>
        <button type="button" id="togglePassword" class="absolute top-2 right-2 text-gray-600">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 8a15.963 15.963 0 0110-4.5 15.963 15.963 0 0110 4.5M6 9a9 9 0 007.5 9c2.55-.3 4.7-1.7 6-3.9M6 9c0 1.66.28 3.26.78 4.75M6 9a6 6 0 0110.92-3.06M12 21a10.008 10.008 0 008-9M12 21V3"/>
          </svg>
        </button>
      </div>
      <div class="mb-4 text-right">
        <a href="Reset.php" class="text-indigo-600 hover:underline">Forgot Password?</a>
      </div>
      <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">Login</button>
      <div class="mb-4 mt-2 text-right flex">
        <p>Don't have account? </p>
        <a href="reg.php" class="text-indigo-600 hover:underline">Create account</a>
      </div>
    </form>
  </div>
  <script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", () => {
      const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);
    });
  </script>
</body>
</html>
