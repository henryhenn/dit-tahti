<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data DITRESKRIMSUS Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                    <form method="post" action="{{route('ditreskrimsus.store')}}" enctype="multipart/form-data" class="w-1/2">
                        @csrf
                        <input type="hidden" name="unit" value="DITRESKRIMSUS">
                        <div class="relative z-0 w-full mb-8 group">
                            <label for="underline_select" class="sr-only">Underline select</label>
                            <select id="underline_select" name="category_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 @error('content') border-red-500 @enderror appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option value="" disabled selected>Klasifikasi</option>
                                @foreach($kategori as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                                @endforeach
                            </select>

                            @error('category_id')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <label for="nama_barang_bukti" class="block mb-2">Nama Barang Bukti: </label>
                            <input id="nama_barang_bukti" type="hidden" value="{{old('nama_barang_bukti')}}" name="nama_barang_bukti">
                            <trix-editor input="nama_barang_bukti" class="@error('nama_barang_bukti') border-red-500 @enderror"></trix-editor>
                            @error('nama_barang_bukti')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="identitas_barang_bukti" id="identitas_barang_bukti"
                                   value="{{old('identitas_barang_bukti')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('nama_barang') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Identitas Barang Bukti (Boleh Dikosongkan)
                            </label>
                            @error('identitas_barang_bukti')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="jumlah" id="jumlah"
                                   value="{{old('jumlah')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('jumlah') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Jumlah/volume
                            </label>
                            @error('jumlah')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="no_laporan_polisi" id="no_laporan_polisi"
                                   value="{{old('no_laporan_polisi')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('no_laporan_polisi') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="no_laporan_polisi"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                No. Laporan Polisi
                            </label>
                            @error('no_laporan_polisi')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="no_sp_sita" id="no_sp_sita"
                                   value="{{old('no_sp_sita')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('no_sp_sita') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="no_sp_sita"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                No. SP SITA
                            </label>
                            @error('no_sp_sita')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="penetapan_pengadilan" id="penetapan_pengadilan"
                                   value="{{old('penetapan_pengadilan')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('penetapan_pengadilan') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Penetapan Pengadilan
                            </label>
                            @error('penetapan_pengadilan')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="tempat_penyimpanan" id="tempat_penyimpanan"
                                   value="{{old('tempat_penyimpanan')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('tempat_penyimpanan') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Tempat Penyimpanan
                            </label>
                            @error('tempat_penyimpanan')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="penyidik" id="penyidik"
                                   value="{{old('penyidik')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('penyidik') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Penyidik
                            </label>
                            @error('penyidik')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="kondisi" id="kondisi"
                                   value="{{old('kondisi')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('kondisi') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Kondisi
                            </label>
                            @error('kondisi')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="nama_pemilik" id="nama_pemilik"
                                   value="{{old('nama_pemilik')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('nama_pemilik') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nama Pemilik/Disita
                            </label>
                            @error('nama_pemilik')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <label for="keterangan" class="block mb-2">Keterangan: </label>
                            <input id="keterangan" type="hidden" value="{{old('keterangan')}}" name="keterangan">
                            <trix-editor input="keterangan" class="@error('keterangan') border-red-500 @enderror"></trix-editor>
                            @error('keterangan')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="gambar1">Gambar:</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 @error('gambar1') border-red-500 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="gambar1" name="gambar1" type="file">
                            @error('gambar1')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="gambar2">Gambar:</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 @error('gambar2') border-red-500 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="gambar2" name="gambar2" type="file">
                            @error('gambar2')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="gambar3">Gambar:</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 @error('gambar3') border-red-500 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="gambar3" name="gambar3" type="file">
                            @error('gambar3')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <x-primary-button>
                            {{__('Submit')}}
                        </x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
