@extends('layouts.frontend')

@section('content')
    <div class="container p-2 mx-auto mt-2">
        <div class="flex justify-between">
            <div class="hidden lg:block">
                <img class="h-32" src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Lambang_Polri.png" alt="">
            </div>
            <div>
                <div class="mt-2 text-center">
                    <h1 class="font-serif font-bold lg:text-2xl lg:xl">MOTO</h1>
                    <div class="lg:text-xs text-[10px] lg:font-bold">
                        <p>DALAM RANGKA TRANSFORMASI PENGELOLAAN BARANG BUKTI</p>
                        <p>DITTAHTI POLDA NTB MENGEDEPANKAN PRINSIP - PRINSIP DASAR</p>
                        <p>LEGALITAS, TRANSPARAN, PROPORSIONAL, AKUNTABEL, EFEKTIF DAN EFISIEN</p>
                        <p>KAMI SIAP MELAYANI DENGAN TULUS DAN IKHLAS BERBASIS TEKNOLOGI</p>
                        <p>SEKIAN DAN TERIMA KASIH</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block">
                <img class="h-32" src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Lambang_Polda_NTB.png"
                     alt="">
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="flex mt-2 rounded-md bg-gradient-to-br from-orange-500 via-red-700 to-red-700 h-14">
            <h1 class="w-full pt-3 pl-2 text-lg font-bold text-white lg:pt-2 lg:text-2xl">BARANG BUKTI</h1>
            <div class="grid w-full p-2 place-items-end">
                <form class="flex items-end">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" name="search" id="simple-search"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Search" required>
                    </div>
                    <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-orange-800 rounded-lg border border-white hover:bg-orange-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-1 p-2 lg:mt-3 lg:flex">
            <a
                href="/dbt/?unit=ditreskrimum"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r from-orange-500 via-red-700 to-red-700 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
          <span
              class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            DITRESKRIMUM
         </span>
            </a>
            <a
                href="/dbt/ditlantas"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r from-orange-500 via-red-700 to-red-700 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
          <span
              class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            DITLANTAS
         </span>
            </a>
            <a
                href="/dbt/?unit=ditreskrimsus"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r from-orange-500 via-red-700 to-red-700 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
          <span
              class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            DITRESKRIMSUS
         </span>
            </a>
            <a
                href="/dbt/?unit=ditresnarkoba"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r from-orange-500 via-red-700 to-red-700 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
          <span
              class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            DITRESNARKOBA
         </span>
            </a>
            <a
                href="/dbt/?unit=ditpolairud"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-r from-orange-500 via-red-700 to-red-700 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
          <span
              class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            DITPOLAIRUD
         </span>
            </a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                        NOKA/NOSIN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        BLANGKO TILANG
                    </th>
                    <th scope="col" class="px-6 py-3">
                        TEMPAT PENYIMPANAN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        PETUGAS PENYIDIK
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
                </tr>
                </thead>
                <tbody>
                @forelse($barangs as $key => $barang)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4 text-center">
                            {{$key+1}}
                        </td>
                        <td class="px-6 py-4">
                            {{$barang->nama_kendaraan}}
                        </td>
                        <td class="px-6 py-4">
                            {{$barang->noka_nosin}}
                        </td>
                        <td class="px-6 py-4">
                            {{$barang->no_surat_tilang}}
                        </td>
                        <td class="px-6 py-4">
                            {{$barang->tempat_penyimpanan}}
                        </td>
                        <td class="px-6 py-4">
                            {{$barang->penyidik}}
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
                                                     src="{{asset('storage/' . $barang->gambar1)}}"
                                                     alt="">
                                                <img class="w-full mb-2 lg:h-36 h-44"
                                                     src="{{asset('storage/' . $barang->gambar2)}}"
                                                     alt="">
                                                <img class="w-full lg:h-36 h-44"
                                                     src="{{asset('storage/' . $barang->gambar3)}}"
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

        {{$barangs->links()}}
    </div>
@endsection
