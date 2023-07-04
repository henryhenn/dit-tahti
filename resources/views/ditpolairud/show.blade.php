<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($ditpolairud->nama_barang_bukti) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-row justify-between">
                        <h2 class="text-2xl font-extrabold">{{$ditpolairud->nama_barang_bukti}}</h2>
                        <a href="{{route('ditpolairud.index')}}" class="text-decoration-none text-blue-500">Kembali</a>
                    </div>

                    <small class="text-gray-500">Dibuat
                        pada: {{$ditpolairud->created_at->format('D, d M Y H:i')}}</small>

                    <div class="flex flex-col md:flex-row gap-4 justify-center">
                        <img src="{{asset('storage/' . $ditpolairud->gambar1)}}" alt="Gambar Berita"
                             class="mt-4 w-[380px]">

                        @if($ditpolairud->gambar2)
                            <img src="{{asset('storage/' . $ditpolairud->gambar2)}}" alt="Gambar Berita"
                                 class="mt-4 w-[380px]">
                        @endif

                        @if($ditpolairud->gambar3)
                            <img src="{{asset('storage/' . $ditpolairud->gambar3)}}" alt="Gambar Berita"
                                 class="mt-4 w-[380px]">
                        @endif
                    </div>

                    <p class="mt-6 ">Daftar Barang Temuan: <span
                            class="font-bold">{{$ditpolairud->category->kategori}}</span></p>
                    <p class="mt-6 ">Jumlah: <span class="font-bold">{{$ditpolairud->jumlah}}</span></p>
                    <p class="mt-6 ">Identitas barang bukti: <span class="font-bold">{{$ditpolairud->identitas_barang_bukti ?? "-"}}</span></p>
                    <p class="mt-6 ">No. Laporan Polisi: <span
                            class="font-bold">{{$ditpolairud->no_laporan_polisi}}</span></p>
                    <p class="mt-6 ">No. SP SITA: <span
                            class="font-bold">{{$ditpolairud->no_sp_sita}}</span></p>
                    <p class="mt-6 ">Penetapan Pengadilan: <span
                            class="font-bold">{{$ditpolairud->penetapan_pengadilan}}</span></p>
                    <p class="mt-6 ">Tempat Penyimpanan: <span
                            class="font-bold">{{$ditpolairud->tempat_penyimpanan}}</span></p>
                    <p class="mt-6 ">Penyidik: <span class="font-bold">{{$ditpolairud->penyidik}}</span></p>
                    <p class="mt-6 ">Kondisi: <span class="font-bold">{{$ditpolairud->kondisi}}</span></p>
                    <p class="mt-6 ">Nama Pemilik: <span class="font-bold">{{$ditpolairud->nama_pemilik}}</span></p>
                    <p class="mt-6 ">Keterangan: {!! $ditpolairud->keterangan !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
