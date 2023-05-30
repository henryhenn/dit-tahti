@php use Illuminate\Support\Str; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-row justify-between">
                        <h2 class="text-2xl font-extrabold">Daftar Barang</h2>

                        <a href="{{route('daftar-barang.create')}}"
                           class="text-white bg-blue-700 font-medium hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Tambah Daftar Barang Baru
                        </a>
                    </div>

                    <x-alert/>

                    <div class="relative mt-10 overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs uppercase bg-sky-500 text-white dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hari / Tanggal / Jam
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Petugas / Penyidik yang Menyerahkan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Paraf Petugas yang Menerima
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Laporan Polisi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Register BB (B-13)
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Label Barang Bukti
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jenis Barang Bukti
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kondisi Barang Bukti
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Paraf Petugas yang Menyerahkan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Keterangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($barang as $key => $barang)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$key+1}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{__($barang->created_at->format('D, d M Y H:i'))}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$barang->petugas_penyerah}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$barang->petugas_penerima}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$barang->nomor_laporan_polisi}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$barang->nomor_register_bb}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$barang->nomor_label_barang_bukti}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {!! $barang->jenis_barang_bukti !!}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$barang->kondisi_barang_bukti}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$barang->petugas_penyerah}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {!! $barang->keterangan !!}
                                    </td>
                                    <td class="px-6 py-4 flex flex-row gap-3">
                                        <a href="{{route('daftar-barang.edit', $barang->id)}}"
                                           class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Edit
                                        </a>
                                        <a href="{{route('daftar-barang.destroy', $barang->id)}}"
                                           onclick="event.preventDefault(); document.getElementById('delete-form').submit()"
                                           class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Delete
                                        </a>
                                        <form action="{{route('daftar-barang.destroy', $barang->id)}}" id="delete-form"
                                              method="post" class="hidden">@csrf @method('delete')</form>
                                    </td>
                                </tr>

                            @empty
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td colspan="12"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <h3 class="text-xl font-bold text-center">Tidak ada daftar barang. Silakan tambahkan
                                            daftar barang baru!</h3>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
