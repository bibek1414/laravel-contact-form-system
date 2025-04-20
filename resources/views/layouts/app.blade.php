<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>
    <!-- Use Tailwind directly from CDN instead of Vite -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <div class="flex items-center py-5 px-2">
                        <span class="font-bold text-xl text-gray-700">Contact App</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <a href="{{ route('contact') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">Contact Form</a>
                        <a href="{{ route('messages') }}" class="py-5 px-3 text-gray-700 hover:text-gray-900">View Messages</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto mt-8 px-4">
        @yield('content')
    </div>
</body>
</html>