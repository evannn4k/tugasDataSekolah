@extends("layout.app")

@section("content")
<div class="flex-1 flex bg-[url({{ asset("assets/images/bg.jpg") }})] bg-cover bg-no-repeat bg-center">
    <div class="flex-1 flex justify-center items-center bg-gradient-to-r from-white from-30% to-white/50 to-80%">
        <div class="container mx-auto px-4">
            <div class="w-full flex items-center">
                <div class="w-3/5 flex flex-col gap-5 px-12">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-gray-700 text-4xl font-semibold">List of</h1>
                        <h1 class="text-gray-700 text-4xl font-semibold">
                            <label class="text-white bg-red-500 px-2">Students</label>
                            and
                            <label class="text-white bg-red-500 px-2">Teachers</label>
                        </h1>
                        <h1 class="text-gray-700 text-4xl font-semibold">of SMK Muhi</h1>
                    </div>
                    <p>This website functions to display a list of students and teachers at Muhammadiyah 1 Weleri Vocational School. This website is designed to facilitate access to information for the entire academic community of Muhammadiyah 1 Weleri Vocational School.</p>
                    <div class="flex gap-2">
                        <a href="{{ route("student.index") }}" class="border-2 border-red-600 bg-red-600 text-sm font-semibold flex items-center text-white py-2 px-4 rounded-full hover:bg-red-500 duration-150 ease-in-out hover:scale-102 active:scale-99">Student</a>
                        <a href="{{ route("teacher.index") }}" class="border-2 border-red-600 text-sm font-semibold flex items-center text-red-600 py-2 px-4 rounded-full hover:bg-red-600/10 duration-150 ease-in-out hover:scale-102 active:scale-99">Teacher</a>
                    </div>

                </div>
                <div class="w-2/5 flex justify-center">
                    <img src="{{ asset("assets/images/logo-skamuhi.png") }}" alt="" class="w-xs">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection