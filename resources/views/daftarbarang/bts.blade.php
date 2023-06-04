@extends('layouts.frontend')

@section('content')
    <div class="container mx-auto">
        <div class="flex mt-2 bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 rounded-md h-14">
            <h1 class="pl-2 w-full text-white text-2xl font-bold pt-2">BARANG TEMUAN SEBAGAI BARANG BUKTI</h1>
            <div class="w-full p-2 grid place-items-end">

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
                        <input type="text" id="simple-search"
                               name="search"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Search" required>
                    </div>
                    <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-cyan-800 rounded-lg border border-white hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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

        <div class="flex gap-1">
            <div class="h-56 mt-4">
                <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-cyan-400 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="vue-checkbox" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox"
                                   class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">DITRESKRIMUM</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="react-checkbox" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="react-checkbox"
                                   class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">DITLANTAS</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="angular-checkbox" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="angular-checkbox"
                                   class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">DITRESKRIMSUS</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                   class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">DITRESNARKOBA</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                   class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">DITPOLAIRUD</label>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-full">
                <div class="grid grid-cols-4 gap-4 p-4">
                    @forelse($barangs as $barang)
                        <div class="border border-blue-400 rounded-md h-64 p-1 mb-2">
                            <img class="w-full h-44 object-cover rounded-md"
                                 src="{{asset('storage/' . $barang->gambar1)}}"
                                 alt="">
                            <div class="w-full">
                                <label class="font-bold text-gray-600" for="">{{$barang->nama_barang_bukti ?? $barang->nama_kendaraan}}</label>
                            </div>
                            <div class="w-full">
                                <p class="text-xs text-gray-400" for="">{{$barang->category->kategori}}</p>
                            </div>
                            <button data-modal-target="defaultModal{{$barang->id}}" data-modal-toggle="defaultModal{{$barang->id}}" type="button"
                                    class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                                Detail Barang
                            </button>
                        </div>
                        <div id="defaultModal{{$barang->id}}" tabindex="-1" aria-hidden="true"
                             class="fixed top-0 left-0 right-0 z-50 hidden w-full p-2 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            {{$barang->nama_barang_bukti}}
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
                                    <div class="p-2">
                                        <div class="flex gap-2">
                                            <img class="h-44 w-40 object-cover rounded-md"
                                                 src="{{asset('storage/' . $barang->gambar1)}}"
                                                 alt="">
                                            <img class="h-44 w-40 object-cover rounded-md"
                                                 src="{{asset('storage/' . $barang->gambar2)}}"
                                                 alt="">
                                            <img class="h-44 w-40 object-cover rounded-md"
                                                 src="{{asset('storage/' . $barang->gambar3)}}"
                                                 alt="">
                                        </div>
                                        <p>BARANG BUKTI : {{$barang->nama_barang_bukti ?? $barang->nama_kendaraan}}</p>
                                        <p>SATUAN : {{$barang->unit}}</p>
                                        @if($barang->jumlah)
                                            <p>JUMLAH : {{$barang->jumlah}}</p>
                                        @else
                                            <p>IDENTITAS KENDARAAN : {{$barang->identitas_kendaraan}}</p>
                                        @endif
                                        @if($barang->no_laporan_polisi)
                                            <p>NO LAPORAN : {{$barang->no_laporan_polisi}}</p>
                                        @elseif($barang->no_surat_tilang)
                                            <p> NO SURAT TILANG: {{$barang->no_surat_tilang}}</p>
                                        @endif
                                        @if($barang->penetapan_pengadilan)
                                            <p>PENETAPAN PENGADILAN : {{$barang->penetapan_pengadilan}}</p>
                                        @elseif($barang->penetapan_kejaksaan)
                                            <p>PENETAPAN KEJAKSAAN : {{$barang->penetapan_kejaksaan}}</p>
                                        @endif
                                        @if($barang->tempat_penyimpanan)
                                            <p>TEMPAT PENYIMPANAN : {{$barang->tempat_penyimpanan}}</p>
                                        @else
                                        @endif
                                        <p>PENYIDIK : {{$barang->penyidik}}</p>
                                        <p>KONDISI : {{$barang->kondisi}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <h3 class="text2xl text-center font-bold">Tidak ada daftar barang terbaru</h3>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
