<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($ditlantas->nama_kendaraan) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-row justify-between">
                        <h2 class="text-2xl font-extrabold">{{$ditlantas->nama_kendaraan}}</h2>
                        <a href="{{route('ditlantas.index')}}" class="text-decoration-none text-blue-500">Kembali</a>
                    </div>

                    <small class="text-gray-500">Dibuat
                        pada: {{$ditlantas->created_at->format('D, d M Y H:i')}}</small>

                    <div class="flex flex-col md:flex-row gap-4 justify-center">
                        <img src="{{asset('storage/' . $ditlantas->gambar1)}}" alt="Gambar Berita"
                             class="mt-4 w-[380px]">

                        @if($ditlantas->gambar2)
                            <img src="{{asset('storage/' . $ditlantas->gambar2)}}" alt="Gambar Berita"
                                 class="mt-4 w-[380px]">
                        @endif

                        @if($ditlantas->gambar3)
                            <img src="{{asset('storage/' . $ditlantas->gambar3)}}" alt="Gambar Berita"
                                 class="mt-4 w-[380px]">
                        @endif
                    </div>

                    <p class="mt-6 ">Daftar Barang Temuan: <span
                            class="font-bold">{{$ditlantas->category->kategori}}</span></p>
                    <p class="mt-6 ">Identitas Kendaraan: <span class="font-bold">{{$ditlantas->identitas_kendaraan}}</span></p>
                    <p class="mt-6 ">No. Surat Tilang: <span
                            class="font-bold">{{$ditlantas->no_surat_tilang}}</span></p>
                    <p class="mt-6 ">Penyidik: <span
                            class="font-bold">{{$ditlantas->penyidik}}</span></p>
                    <p class="mt-6 ">Kondisi: <span
                            class="font-bold">{{$ditlantas->kondisi}}</span></p>
                    <p class="mt-6 ">Nama Pemilik: <span class="font-bold">{{$ditlantas->nama_pemilik}}</span></p>
                    <p class="mt-6 ">Keterangan: {!! $ditlantas->keterangan !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
