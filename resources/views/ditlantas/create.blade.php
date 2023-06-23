<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data DITLANTAS Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                    <form method="post" action="{{route('ditlantas.store')}}" enctype="multipart/form-data" class="w-1/2">
                        @csrf
                        <input type="hidden" name="unit" value="DITLANTAS">
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
                            <input type="text" name="nama_kendaraan" id="nama_kendaraan"
                                   value="{{old('nama_kendaraan')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('nama_barang') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nama/Jenis Kendaraan
                            </label>
                            @error('nama_kendaraan')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="identitas_kendaraan" id="identitas_kendaraan"
                                   value="{{old('identitas_kendaraan')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('identitas_kendaraan') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Identitas Kendaraan
                            </label>
                            @error('identitas_kendaraan')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="no_surat_tilang" id="no_surat_tilang"
                                   value="{{old('no_surat_tilang')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('no_surat_tilang') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="no_surat_tilang"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                No. Surat Tilang
                            </label>
                            @error('no_surat_tilang')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="noka_nosin" id="noka_nosin"
                                   value="{{old('noka_nosin')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('noka_nosin') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="noka_nosin"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                NOKA/NOSIN
                            </label>
                            @error('noka_nosin')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="tempat_penyimpanan" id="tempat_penyimpanan"
                                   value="{{old('tempat_penyimpanan')}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('tempat_penyimpanan') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="tempat_penyimpanan"
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
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('enyidik') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="penyidik"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Penyidik/Penyidik Pembantu
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
