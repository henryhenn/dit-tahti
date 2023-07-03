<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($ditresnarkoba->nama_barang_bukti) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-row justify-between">
                        <h2 class="text-2xl font-extrabold">{{$ditresnarkoba->nama_barang_bukti}}</h2>
                        <a href="{{route('ditresnarkoba.index')}}" class="text-decoration-none text-blue-500">Kembali</a>
                    </div>

                    <small class="text-gray-500">Dibuat
                        pada: {{$ditresnarkoba->created_at->format('D, d M Y H:i')}}</small>

                    <div class="flex flex-col md:flex-row gap-4 justify-center">
                        <img src="{{asset('storage/' . $ditresnarkoba->gambar1)}}" alt="Gambar Berita"
                             class="mt-4 w-[380px]">

                        @if($ditresnarkoba->gambar2)
                            <img src="{{asset('storage/' . $ditresnarkoba->gambar2)}}" alt="Gambar Berita"
                                 class="mt-4 w-[380px]">
                        @endif

                        @if($ditresnarkoba->gambar3)
                            <img src="{{asset('storage/' . $ditresnarkoba->gambar3)}}" alt="Gambar Berita"
                                 class="mt-4 w-[380px]">
                        @endif
                    </div>

                    <p class="mt-6 ">Klasifikasi: <span
                            class="font-bold">{{$ditresnarkoba->klasifikasi}}</span></p>
                    <p class="mt-6 ">Jumlah: <span class="font-bold">{{$ditresnarkoba->jumlah}}</span></p>
                    <p class="mt-6 ">Identitas barang bukti: <span class="font-bold">{{$ditresnarkoba->identitas_barang_bukti ?? "-"}}</span></p>
                    <p class="mt-6 ">No. Laporan Polisi: <span
                            class="font-bold">{{$ditresnarkoba->no_laporan_polisi}}</span></p>
                    <p class="mt-6 ">No. SP SITA: <span
                            class="font-bold">{{$ditresnarkoba->no_sp_sita}}</span></p>
                    <p class="mt-6 ">Penetapan Pengadilan: <span
                            class="font-bold">{{$ditresnarkoba->penetapan_kejaksaan}}</span></p>
                    <p class="mt-6 ">Tempat Penyimpanan: <span
                            class="font-bold">{{$ditresnarkoba->tempat_penyimpanan}}</span></p>
                    <p class="mt-6 ">Penyidik: <span class="font-bold">{{$ditresnarkoba->penyidik}}</span></p>
                    <p class="mt-6 ">Kondisi: <span class="font-bold">{{$ditresnarkoba->kondisi}}</span></p>
                    <p class="mt-6 ">Nama Pemilik: <span class="font-bold">{{$ditresnarkoba->nama_pemilik}}</span></p>
                    <p class="mt-6 ">Keterangan: {!! $ditresnarkoba->keterangan !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
