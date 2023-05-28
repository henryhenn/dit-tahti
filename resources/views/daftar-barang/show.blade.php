<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Keterangan Daftar Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <img src="{{asset('storage/' . $daftar_barang->foto_barang_bukti)}}" alt="Gambar Bukti"
                         class="mt-4 w-full">
                    <small class="text-gray-500">Dibuat
                        pada: {{$daftar_barang->created_at->format('d M Y H:i')}}</small>
                    <div class="flex flex-col md:flex-row gap-6">
                        <div>
                            <p class="mt-6 ">Keterangan: <span class="font-bold">{!! $daftar_barang->keterangan !!}</span></p>
                            <p class="mt-6 ">Daftar Barang Temuan: <span
                                    class="font-bold">{{$daftar_barang->daftar_barang_temuan}}</span></p>
                            <p class="mt-6 ">DIT: <span class="font-bold">{{$daftar_barang->dit}}</span></p>
                            <p class="mt-6 ">Petugas Penyerah: <span
                                    class="font-bold">{{$daftar_barang->petugas_penyerah}}</span></p>
                            <p class="mt-6 ">Petugas Penerima: <span
                                    class="font-bold">{{$daftar_barang->petugas_penerima}}</span></p>
                        </div>
                        <div>
                            <p class="mt-6 ">Nomor Laporan Polisi: <span
                                    class="font-bold">{{$daftar_barang->nomor_laporan_polisi}}</span></p>
                            <p class="mt-6 ">Nomor Register BB: <span
                                    class="font-bold">{{$daftar_barang->nomor_register_bb}}</span></p>
                            <p class="mt-6 ">Nomor Label Barang Bukti: <span
                                    class="font-bold">{{$daftar_barang->nomor_label_barang_bukti}}</span></p>
                            <p class="mt-6 ">Jenis Barang Bukti: <span
                                    class="font-bold">{{$daftar_barang->jenis_barang_bukti}}</span></p>
                            <p class="mt-6 ">Kondisi Barang Bukti: <span
                                    class="font-bold">{{$daftar_barang->kondisi_barang_bukti}}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
