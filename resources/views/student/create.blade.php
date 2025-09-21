@extends("layout.app")

@section("content")
<div class="bg-gray-200 w-full">
    <div class="container mx-auto px-4">
        <div class="flex justify-center items-center">
            <div class="w-1/2 bg-white p-4 rounded-xl m-6 shadow-xl">
                <form action="" method="POST">
                @csrf
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-semibold">Added New Students</h1>
                        <a href="{{ route("student.index") }}" class="text-red-600 text-3xl"><i class="fa-solid fa-circle-arrow-left"></i></a>
                    </div>
                    <div class="flex flex-col gap-1 my-4">
                        <label for="name" class="text-base font-medium">Name</label>
                        <input type="text" name="name" id="name" class="border border-gray-300 rounded-lg text-sm py-1 px-2" placeholder="Enter Name">
                    </div>
                    <div class="flex flex-col gap-1 my-4">
                        <label for="nisn" class="text-base font-medium">NISN</label>
                        <input type="number" name="nisn" id="nisn" class="border border-gray-300 rounded-lg text-sm py-1 px-2" placeholder="Enter NISN">
                    </div>
                    <div class="flex flex-col gap-1 my-4">
                        <label for="email" class="text-base font-medium">Email</label>
                        <input type="email" name="email" id="email" class="border border-gray-300 rounded-lg text-sm py-1 px-2" placeholder="Enter Email">
                    </div>
                    <div class="flex flex-col gap-1 my-4">
                        <label for="Name" class="text-base font-medium">Name</label>
                        <select name="" id="" class="border border-gray-300 rounded-lg text-sm py-1 px-2">
                            <option value="" disabled selected>Choose a major</option>
                        </select>                        
                    </div>
                    <div class="flex flex-col gap-1 my-4">
                        <label for="photo" class="text-base font-medium">Photo</label>
                        <input type="file" name="photo" id="photo" class="border border-gray-300 rounded-lg text-sm py-1 px-2">
                    </div>
                    <div class="flex flex-col gap-1 my-4">
                        <button class="w-full bg-green-600 rounded-full py-1 text-semibold text-white duration-150 ease-in-out hover:bg-green-500 hover:scale-101 active:scale-99">Kirim</button>    
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection