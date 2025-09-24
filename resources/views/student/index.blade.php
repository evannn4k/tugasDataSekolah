@extends("layout.app")

@section("content")
<div class="w-full bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="my-6">
            <h1 class="font-medium text-xl">Student</h1>
            <p>This page displays all student data</p>
        </div>
        <div class="bg-white rounded-2xl p-4 flex flex-col gap-4">

            <div class="w-full flex justify-between items-center">
                <p class="font-medium text-2xl">All Student</p>
                <a href="{{ route("student.create") }}" class="text-sm bg-blue-500 p-3 flex items-center gap-2 text-white rounded-xl duration-150 ease-in-out hover:scale-102 hover:bg-blue-500/90 active:scale-99"><i class="fa-solid fa-plus"></i> Add Student</a>
            </div>

            <div class="w-full grid grid-cols-4 gap-4">
                <a href="{{ route("student.major", "AKL") }}" class="border border-green-500 shadow-sm shadow-green-500 rounded-xl fle bg-gradient-to-r from-green-500/10 to-green-500/60">
                    <div class="flex-1 flex flex-col gap-2 px-4 pb-8 py-6 bg-[url({{ asset("assets/images/circle.png") }})] bg-no-repeat bg-right bg-contain">
                        <p class="text-black/60 font-medium">AKL class students</p>
                        <p class="font-semibold text-2xl text-green-    /80">{{ $aklCount }} Students</p>
                    </div>
                </a>
                <a href="{{ route("student.major", "MPLB") }}" class="border border-yellow-500 shadow-sm shadow-yellow-500 rounded-xl fle bg-gradient-to-r from-yellow-500/10 to-yellow-500/60">
                    <div class="flex-1 flex flex-col gap-2 px-4 pb-8 py-6 bg-[url({{ asset("assets/images/circle.png") }})] bg-no-repeat bg-right bg-contain">
                        <p class="text-black/60 font-medium">MPLB class students</p>
                        <p class="font-semibold text-2xl text-black/80">{{ $mplbCount }} Students</p>
                    </div>
                </a>
                <a href="{{ route("student.major", "PPLG") }}" class="border border-sky-500 shadow-sm shadow-sky-500 rounded-xl fle bg-gradient-to-r from-sky-500/10 to-sky-500/60">
                    <div class="flex-1 flex flex-col gap-2 px-4 pb-8 py-6 bg-[url({{ asset("assets/images/circle.png") }})] bg-no-repeat bg-right bg-contain">
                        <p class="text-black/60 font-medium">PPLG class students</p>
                        <p class="font-semibold text-2xl text-black/80">{{ $pplgCount }} Students</p>
                    </div>
                </a>
                <a href="{{ route("student.major", "TB") }}" class="border border-pink-500 shadow-sm shadow-pink-500 rounded-xl fle bg-gradient-to-r from-pink-500/10 to-pink-500/60">
                    <div class="flex-1 flex flex-col gap-2 px-4 pb-8 py-6 bg-[url({{ asset("assets/images/circle.png") }})] bg-no-repeat bg-right bg-contain">
                        <p class="text-black/60 font-medium">TB class students</p>
                        <p class="font-semibold text-2xl text-black/80">{{ $tbCount }} Students</p>
                    </div>
                </a>
                
            </div>

            <div class="flex flex-col gap-2">
                <div class="w-full flex justify-between border-b border-gray-300">
                    <div class="flex">
                        <a href="{{ route("student.index") }}" class="py-3 px-6 text-sm font-medium hover:bg-gray-100 {{ request()->routeIs("student.index") ? "border-b-2 border-blue-600" : "" }}">All</a>
                        <a href="{{ route("student.major", "AKL") }}" class="py-3 px-6 text-sm font-medium hover:bg-gray-100 {{ request()->route('major') == "AKL" ? "border-b-2 border-blue-600" : "" }}">AKL</a>
                        <a href="{{ route("student.major", "MPLB") }}" class="py-3 px-6 text-sm font-medium hover:bg-gray-100 {{ request()->route('major') == "MPLB" ? "border-b-2 border-blue-600" : "" }}">MPLB</a>
                        <a href="{{ route("student.major", "PPLG") }}" class="py-3 px-6 text-sm font-medium hover:bg-gray-100 {{ request()->route('major') == "PPLG" ? "border-b-2 border-blue-600" : "" }}">PPLG</a>
                        <a href="{{ route("student.major", "TB") }}" class="py-3 px-6 text-sm font-medium hover:bg-gray-100 {{ request()->route('major') == "TB" ? "border-b-2 border-blue-600" : "" }}">TB</a>
                    </div>
                    <div class="flex">
                        <button class="py-3 px-4 text-sm font-medium">Short By <i class="fa-solid fa-angle-down"></i></button>
                    </div>
                </div>

                <div class="">
                    <table class="w-full text-sm">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="p-2 text-gray-700 font-medium text-left w-5">No</th>
                                <th class="p-2 text-gray-700 font-medium text-left">Picture</thc>
                                <th class="p-2 text-gray-700 font-medium text-left">Name</thc>
                                <th class="p-2 text-gray-700 font-medium text-left">NISN</thc>
                                <th class="p-2 text-gray-700 font-medium text-left">Email</thc>
                                <th class="p-2 text-gray-700 font-medium text-left">Major</thc>
                                <th class="p-2 text-gray-700 font-medium text-center">Action</thc>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            ?>
                            @foreach ($students as $student)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="px-2 py-auto text-center">{{ $no++ }}</td>
                                <td class="px-2 py-2">
                                    <img src="{{ asset('storage/images') ."/". $student->photo }}" alt="" class="h-10">
                                </td>
                                <td class="px-2 py-auto">{{ $student->name }}</td>
                                <td class="px-2 py-auto">{{ $student->nisn }}</td>
                                <td class="px-2 py-auto">{{ $student->email }}</td>
                                <td class="px-2 py-auto">
                                    <div class="flex">
                                        <a href="{{ route("student.major", $student->major) }}" class="
                                        @if ($student->major == "AKL")
                                            bg-green-100 text-green-600
                                            @elseif($student->major == "MPLB")
                                            bg-yellow-100 text-yellow-600
                                            @elseif($student->major == "PPLG")
                                            bg-sky-100 text-sky-600
                                            @elseif($student->major == "TB")
                                            bg-pink-100 text-pink-600
                                            @endif
                                            w-17 py-1 text-center rounded-full">{{ $student->major }}</a>
                                    </div>
                                </td>
                                <td class="px-2 py-3 flex gap-2 justify-center">
                                    <a href="{{ route("student.edit", $student->id) }}" class="bg-green-500 text-white py-2 px-3 rounded-lg"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route("student.destroy", $student->id) }}" class="bg-red-500 text-white py-2 px-3 rounded-lg"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection