@extends("layout.app")

@section("content")
<div class="flex-1 flex bg-[url({{ asset("assets/images/bg.jpg") }})] bg-cover bg-no-repeat bg-center">
    <div class="flex-1 flex justify-center items-center bg-gradient-to-r from-gray-900 from-45% to-gray-900/20 to-70%">
        <div class="container mx-auto px-4">
            <div class="w-full flex items-center">
                <div class="w-3/5">
                    <p class="text-white">Daftar Siswa Dan Guru SMK Muhi</p>
                </div>
                <div class="w-2/5 flex justify-center">
                    <img src="{{ asset("assets/images/logo-skamuhi.png") }}" alt="" class="w-sm">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection