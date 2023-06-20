<div class="relative mt-14 overflow-x-auto {{$attributes['class']}}">
    <h2 class="text-2xl font-bold mb-4">{{$attributes['title']}}</h2>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead
            class="text-xs text-yellow-300 uppercase bg-gradient-to-r from-orange-500 via-red-700 to-red-700 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="p-4">
                NO
            </th>
            <th scope="col" class="px-6 py-3">
                DAFTAR BARANG BUKTI
            </th>
            <th scope="col" class="px-6 py-3">
                NO.LAP.POL
            </th>
            <th scope="col" class="px-6 py-3">
                NO.SP.SITA
            </th>
            <th scope="col" class="px-6 py-3">
                PENETAPAN PENGADILAN
            </th>
            <th scope="col" class="px-6 py-3">
                PENYIDIK
            </th>
            <th scope="col" class="px-6 py-3">
                TEMPAT PENYIMPANAN
            </th>
            <th scope="col" class="px-6 py-3">
                NAMA PEMILIK
            </th>
            <th scope="col" class="px-6 py-3">
                FOTO BARANG BUKTI
            </th>
            <th scope="col" class="px-6 py-3">
                KETERANGAN
            </th>
            <th scope="col" class="px-6 py-3">
                AKSI
            </th>
        </tr>
        </thead>
        <tbody>
        @forelse($data as $key => $barang)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4 text-center">
                    {{$key+1}}
                </td>
                <td class="px-6 py-4">
                    {{$barang->nama_barang_bukti ?? $barang->nama_kendaraan}}
                </td>
                <td class="px-6 py-4">
                    {{$barang->no_laporan_polisi}}
                </td>
                <td class="px-6 py-4">
                    {{$barang->no_sp_sita}}
                </td>
                <td class="px-6 py-4">
                    {{$barang->penetapan_pengadilan ?? $barang->penetapan_kejaksaan}}
                </td>
                <td class="px-6 py-4">
                    {{$barang->penyidik}}
                </td>
                <td class="px-6 py-4">
                    {{$barang->tempat_penyimpanan}}
                </td>
                <td class="px-6 py-4">
                    {{$barang->nama_pemilik}}
                </td>
                <td class="px-6 py-4">
                    <button data-modal-target="defaultModal{{$barang->id}}"
                            data-modal-toggle="defaultModal{{$barang->id}}"
                            class=""
                            type="button">
                        Lihat Foto
                    </button>

                    <div id="defaultModal{{$barang->id}}" tabindex="-1" aria-hidden="true"
                         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                        FOTO BARANG BUKTI
                                    </h3>
                                    <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="defaultModal{{$barang->id}}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                             viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-2 space-y-6">
                                    <div class="gap-1 lg:flex">
                                        <img class="w-full mb-2 lg:h-36 h-44"
                                             src="{{asset('storage/'.$barang->gambar1)}}"
                                             alt="">
                                        <img class="w-full mb-2 lg:h-36 h-44"
                                             src="{{asset('storage/'.$barang->gambar2)}}"
                                             alt="">
                                        <img class="w-full lg:h-36 h-44"
                                             src="{{asset('storage/'.$barang->gambar3)}}"
                                             alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    {!! $barang->keterangan !!}
                </td>
                <td class="px-6 py-4 flex flex-row">
                    <a href="{{route($attributes['route'] . '.edit', $barang->id)}}"
                       class="px-3 py-2 text-xs font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-800">
                        Edit
                    </a>
                    <a href="{{route($attributes['route'] . '.show', $barang->id)}}"
                       class="px-3 py-2 mx-2 text-xs font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-500 dark:focus:ring-yellow-800">
                        Detail
                    </a>
                    @role('Administrator')
                    <form action="{{route($attributes['route'] . '.destroy', $barang->id)}}" id="delete-form"
                          method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"
                                onclick="return confirm('Apakah Anda Yakin?')"
                                class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-yellow-600 dark:hover:bg-yellow-500 dark:focus:ring-yellow-800">
                            Delete
                        </button>
                    </form>
                    @endrole
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="10" class="px-6 py-4">
                    <h2 class="font-bold text-center text-2xl">Tidak ada data terbaru</h2>
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
