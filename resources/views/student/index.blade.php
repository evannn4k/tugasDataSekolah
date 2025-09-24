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
                <p class="font-medium text-2xl">All Student 😍😍😍</p>
                <a href="{{ route("student.create") }}" class="text-sm bg-blue-500 p-3 flex items-center gap-2 text-white rounded-xl duration-150 ease-in-out hover:scale-102 hover:bg-blue-500/90 active:scale-99"><i class="fa-solid fa-plus"></i> Add Student</a>
            </div>

            <div class="w-full grid grid-cols-4 gap-4">
                <div class="border border-gray-300 px-4 py-6 rounded-xl flex flex-col gap-2 shadow-md">
                    <p class="text-gray-500 font-medium">AKL class students</p>
                    <p class="font-semibold text-2xl">24 Students</p>
                </div>
                <div class="border border-gray-300 px-4 py-6 rounded-xl flex flex-col gap-2 shadow-md">
                    <p class="text-gray-500 font-medium">MPLB class students</p>
                    <p class="font-semibold text-2xl">26 Students</p>
                </div>
                <div class="border border-gray-300 px-4 py-6 rounded-xl flex flex-col gap-2 shadow-md">
                    <p class="text-gray-500 font-medium">PPLG class students</p>
                    <p class="font-semibold text-2xl">36 Students</p>
                </div>
                <div class="border border-gray-300 px-4 py-6 rounded-xl flex flex-col gap-2 shadow-md">
                    <p class="text-gray-500 font-medium">TB class students</p>
                    <p class="font-semibold text-2xl">1 Students</p>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <div class="w-full flex justify-between border-b border-gray-300">
                    <div class="flex">
                        <a href="" class="py-3 px-6 text-sm font-medium hover:bg-gray-100 border-b-2 border-blue-600">All</a>
                        <a href="" class="py-3 px-6 text-sm font-medium hover:bg-gray-100">AKL</a>
                        <a href="" class="py-3 px-6 text-sm font-medium hover:bg-gray-100">MPLB</a>
                        <a href="" class="py-3 px-6 text-sm font-medium hover:bg-gray-100">PPLG</a>
                        <a href="" class="py-3 px-6 text-sm font-medium hover:bg-gray-100">TB</a>
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
                                    <a href="" class="bg-cyan-100 text-cyan-600 py-1 px-3 rounded-full">PPLG</a>
                                </td>
                                <td class="px-2 py-3 flex gap-2 justify-center">
                                    <a href="" class="bg-green-500 text-white py-2 px-3 rounded-lg"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="bg-red-500 text-white py-2 px-3 rounded-lg"><i class="fa-solid fa-trash-can"></i></a>
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