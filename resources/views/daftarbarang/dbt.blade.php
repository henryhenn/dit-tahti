@extends('layouts.frontend')

@section('content')
    <div class="container mx-auto">
        <div class="flex mt-2 rounded-md bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 h-14">
            <h1 class="w-full pt-3 pl-2 text-lg font-bold text-white lg:pt-2 lg:text-2xl">BARANG TEMUAN</h1>
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

        <div class="gap-1 lg:flex">
            <div class="h-48 p-2 mt-4 lg:h-60">
                <div
                    class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg lg:w-48 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <a href="?unit=ditreskrimum"
                       class="block w-full px-4 py-2 border-b border-gray-200 cursor-pointer {{request('unit') == 'ditreskrimum' ? 'bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 text-white' : ''}} hover:bg-gray-100 focus:outline-none focus:ring-2 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        DITRESKRIMUM
                    </a>
                    <a href="?unit=ditlantas"
                       class="block w-full px-4 py-2 border-b border-gray-200 cursor-pointer {{request('unit') == 'ditlantas' ? 'bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 text-white' : ''}} hover:bg-gray-100 focus:outline-none focus:ring-2 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        DITLANTAS
                    </a>
                    <a href="?unit=ditreskrimsus"
                       class="block w-full px-4 py-2 border-b border-gray-200 cursor-pointer {{request('unit') == 'ditreskrimsus' ? 'bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 text-white' : ''}} hover:bg-gray-100 focus:outline-none focus:ring-2 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        DITRESKRIMSUS
                    </a>
                    <a href="?unit=ditresnarkoba"
                       class="block w-full px-4 py-2 border-b border-gray-200 cursor-pointer {{request('unit') == 'ditresnarkoba' ? 'bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 text-white' : ''}} hover:bg-gray-100 focus:outline-none focus:ring-2 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        DITRESNARKOBA
                    </a>
                    <a href="?unit=ditpolairud"
                       class="block w-full px-4 py-2 border-b border-gray-200 cursor-pointer {{request('unit') == 'ditpolairud' ? 'bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 text-white' : ''}} hover:bg-gray-100 focus:outline-none focus:ring-2 dark:border-gray-600 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500 dark:focus:text-white">
                        DITPOLAIRUD
                    </a>
                </div>
            </div>
            <div class="w-full">
                <div class="grid grid-cols-2 gap-4 p-4 lg:grid-cols-4">
                    @foreach($barangs as $barang)
                        <div class="h-64 p-1 mb-2 border border-blue-400 rounded-md">
                            <img class="object-cover w-full rounded-md h-44"
                                 src="{{asset('storage/' . $barang->gambar1)}}"
                                 alt="">
                            <div class="w-full">
                                <label class="font-bold text-gray-600"
                                       for="">{{$barang->nama_barang_bukti ?? $barang->nama_kendaraan}}</label>
                            </div>
                            <div class="w-full">
                                <p class="text-xs text-gray-400" for="">{{$barang->category->kategori}}</p>
                            </div>
                            <button data-modal-target="defaultModal{{$barang->id}}"
                                    data-modal-toggle="defaultModal{{$barang->id}}" type="button"
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
                                        <div class="grid grid-cols-2 gap-2 lg:flex">
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
                                        <div class="flex gap-2 p-1 mt-2 text-xs bg-gray-200 rounded-md">
                                            <div>
                                                <p>BARANG BUKTI</p>
                                                <p>SATUAN</p>
                                                @if($barang->jumlah)
                                                    <p>JUMLAH</p>
                                                @else
                                                    <p>IDENTITAS KENDARAAN</p>
                                                @endif
                                                @if($barang->no_laporan_polisi)
                                                    <p>NO LAPORAN</p>
                                                @elseif($barang->no_surat_tilang)
                                                    <p> NO SURAT TILANG:</p>
                                                @endif
                                                @if($barang->penetapan_pengadilan)
                                                    <p>PENETAPAN PENGADILAN</p>
                                                @elseif($barang->penetapan_kejaksaan)
                                                    <p>PENETAPAN KEJAKSAAN</p>
                                                @endif
                                                @if($barang->tempat_penyimpanan)
                                                    <p>TEMPAT PENYIMPANAN</p>
                                                @else
                                                @endif
                                                <p>PENYIDIK</p>
                                                <p>KONDISI</p>
                                            </div>
                                            <div>
                                                <p>: {{$barang->nama_barang_bukti ?? $barang->nama_kendaraan}}</p>
                                                <p>: {{$barang->unit}}</p>
                                                @if($barang->jumlah)
                                                    <p>: {{$barang->jumlah}}</p>
                                                @else
                                                    <p>: {{$barang->identitas_kendaraan}}</p>
                                                @endif
                                                @if($barang->no_laporan_polisi)
                                                    <p>: {{$barang->no_laporan_polisi}}</p>
                                                @elseif($barang->no_surat_tilang)
                                                    <p>: {{$barang->no_surat_tilang}}</p>
                                                @endif
                                                @if($barang->penetapan_pengadilan)
                                                    <p>: {{$barang->penetapan_pengadilan}}</p>
                                                @elseif($barang->penetapan_kejaksaan)
                                                    <p>: {{$barang->penetapan_kejaksaan}}</p>
                                                @endif
                                                @if($barang->tempat_penyimpanan)
                                                    <p>: {{$barang->tempat_penyimpanan}}</p>
                                                @else
                                                @endif
                                                <p>: {{$barang->penyidik}}</p>
                                                <p>: {{$barang->kondisi}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
