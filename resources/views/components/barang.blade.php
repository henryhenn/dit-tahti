<div class="container mx-auto">
    <div class="w-full">
        <div class="grid grid-cols-4 gap-4 p-4">
            @foreach($barang as $barang)
                <div class="border border-blue-400 rounded-md h-64 p-1">
                    <img class="w-full h-44 object-cover rounded-md"
                         src="{{asset('storage/' . $barang->gambar1)}}"
                         alt="">
                    <div class="w-full">
                        <label class="font-bold text-gray-600" for="">{{$barang->nama_barang_bukti ?? $barang->nama_kendaraan}}</label>
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
            @endforeach
        </div>
    </div>
</div>
