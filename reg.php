<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded shadow-md w-96">
  <h2 class="text-2xl font-semibold mb-4">Registration Form</h2>
  <form action="registration.php" method="post" >
    <div class="mb-4">
      <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
      <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md">
    </div>
    <div class="mb-4">
      <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
      <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
    </div>
    <div class="mb-4">
      <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
      <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
      <button type="button" id="togglePassword" class="relative left-[18vw] top-[-4vw]">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 8a15.963 15.963 0 0110-4.5 15.963 15.963 0 0110 4.5M6 9a9 9 0 007.5 9c2.55-.3 4.7-1.7 6-3.9M6 9c0 1.66.28 3.26.78 4.75M6 9a6 6 0 0110.92-3.06M12 21a10.008 10.008 0 008-9M12 21V3"/>
          </svg>
        </button>
    </div>
    <div class="mb-4">
      <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
      <input type="password" id="confirm-password" name="confirm-password" class="mt-1 p-2 w-full border rounded-md">
    </div>
    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600" onclick="password_verify()">Register</button>
    <div class="mb-4 mt-2 text-right flex">
      <p>Already Have Account?</p>
        <a href="Login.php" class="text-indigo-600 hover:underline">Login</a>
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