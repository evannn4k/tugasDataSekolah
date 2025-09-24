<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data sekolah</title>
    <link rel="shortcut icon" href="{{ asset("assets/images/logo-skamuhi.png") }}" type="image/x-icon">

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
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body class="font-[inter] fons-sans min-h-lvh flex flex-col">

    <header class="bg-white p-3 border-b border-gray-300">
        <div class="container mx-auto px-4">
            <p class="text-lg">SMK Muhammadiyah 1 Weleri</p>
        </div>
    </header>

    <nav class="w-full border-b bg-gray-100 border-gray-300">
        <div class="w-full flex justify-center gap-4">
            <a href="{{ route("index") }}" class="px-3 py-2 {{ request()->routeIs("index") ? "border-b-2 border-gray-900 font-semibold" : "" }}">Home</a>
            <a href="{{ route("student.index") }}" class="px-3 py-2 {{ request()->routeIs("student.index") ? "border-b-2 border-gray-900 font-semibold" : "" }}">Student</a>
            <a href="{{ route("teacher.index") }}" class="px-3 py-2 {{ request()->routeIs("teacher.index") ? "border-b-2 border-gray-900 font-semibold" : "" }}">Teacher</a>
        </div>
    </nav>

    <main class="flex-1 flex">
        @yield("content")
    </main>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session("success"))
    <script>
        Swal.fire({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
    @endif

    @if(session("error"))
    <script>
        Swal.fire({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error"
        });
    </script>
    @endif

    <!-- <script src="{{ asset("assets/bootstrap/js/bootstrap.bundle.min.js") }}"></script> -->
</body>

</html>