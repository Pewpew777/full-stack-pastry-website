<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-beige-200 flex items-center justify-center min-h-screen" style="background-color: #f5f5dc;">
    <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-6">Admin Login</h1>
        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
            @csrf
            <input type="text" name="email" placeholder="Email" required 
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            
            <input type="password" name="password" placeholder="Password" required 
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            
            <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                Login
            </button>
        </form>
    </div>
</body>
</html>
