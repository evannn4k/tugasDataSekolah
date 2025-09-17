@extends("layout.app")

@section("content")
<div class="w-full bg-gray-200">
    <div class="container mx-auto px-4">
        <div class="my-6">
            <h1 class="font-medium text-2xl">Siswa</h1>
            <p>Halaman ni menampilkan seluruh data siswa</p>
        </div>
        <div class="bg-white rounded-xl">
            <div class="w-full flex justify-between items-center p-3 border-b border-gray-300">
                <form action="" method="POST" class="relative">
                    @csrf
                    <input type="text" name="" id="" class="w-3xs h-8 px-2 border border-gray-300 rounded-lg text-sm" placeholder="Search...">
                    <button class="absolute right-0 px-2 h-full rounded-lg"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="flex gap-3">
                    <button class="text-gray-500 px-3 py-1 bg-gray-50 border border-gray-500 rounded-lg"><i class="fa-solid fa-arrow-down-short-wide"></i> Short</button>
                    <button class="text-gray-500 px-3 py-1 bg-gray-50 border border-gray-500 rounded-lg"><i class="fa-solid fa-filter"></i> Filter</button>
                    <a href="{{ route("student.create") }}" class="bg-blue-600 py-2 px-3 text-sm rounded-lg text-white"><i class="fa-solid fa-user-plus"></i> Add Student</a>
                </div>
            </div>
            <div class="p-3">
                <table class="w-full">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-2 py-1 text-gray-700 font-semibold" align="center" width="35px">No</th>
                            <th class="px-2 py-1 text-gray-700 font-semibold">Photo</th>
                            <th class="px-2 py-1 text-gray-700 font-semibold">Name</th>
                            <th class="px-2 py-1 text-gray-700 font-semibold">NISN</th>
                            <th class="px-2 py-1 text-gray-700 font-semibold">Major</th>
                            <th class="px-2 py-1 text-gray-700 font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-300">
                            <td class="p-2 text-gray-600" align="center">1</td>
                            <td class="p-2 text-gray-600">test aja bang</td>
                            <td class="p-2 text-gray-600">test aja bang</td>
                            <td class="p-2 text-gray-600">test aja bang</td>
                            <td class="p-2 text-gray-600">test aja bang</td>
                            <td class="p-2 text-gray-600 flex justify-center gap-2">
                                <a href="" class="bg-green-500 text-sm text-white py-1 px-2 rounded-full"><i class="fa-solid fa-pen-to-square"></i> Update</a>
                                <a href="" class="bg-red-500 text-sm text-white py-1 px-2 rounded-full"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection