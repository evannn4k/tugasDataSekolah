<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data sekolah</title>

    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}"> -->

    <!-- tailwind -->
    <!-- @vite('resources/css/app.css') -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset("assets/fontawesome/css/all.min.css") }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="font-[Montserrat] fons-sans min-h-lvh flex flex-col">

    <header class="bg-gray-100 p-3 border-b border-gray-300">
        <div class="container mx-auto px-4">
            <p class="text-lg">SMK Muhammadiyah 1 Weleri</p>
        </div>
    </header>

    <nav class="w-full p-3 border-b border-gray-300">
        <div class="w-full flex justify-center gap-4">
            <a href="{{ route("index") }}" class="px-3 py-1 {{ request()->routeIs("index") ? "font-medium" : "" }}">Home</a>
            <a href="{{ route("student-index") }}" class="px-3 py-1 {{ request()->routeIs("student-index") ? "font-medium" : "" }}">Student</a>
            <a href="{{ route("teacher-index") }}" class="px-3 py-1 {{ request()->routeIs("teacher-index") ? "font-medium" : "" }}">Teacher</a>
        </div>
    </nav>

    <main class="flex-1 flex">
        @yield("content")
    </main>

    <!-- <script src="{{ asset("assets/bootstrap/js/bootstrap.bundle.min.js") }}"></script> -->
</body>

</html>