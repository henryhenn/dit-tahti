<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Daftar Barang Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                    @foreach($errors->all() as $error) {{$error}} @endforeach
                    <form method="post" action="{{route('daftar-barang.store')}}" enctype="multipart/form-data"
                          class="w-1/2">
                        @csrf
                        <div class="relative z-0 w-full mb-8">
                            <label for="underline_select" class="sr-only">Underline select</label>
                            <select id="underline_select"
                                    name="daftar_barang_temuan"
                                    class="block py-2.5 px-0 w-full text-md text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 @error('daftar_barang_temuan') border-red-500 @enderror appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected disabled>Daftar Barang Temuan</option>
                                <option value="BARANG TEMUAN SEBAGAI BARANG BUKTI">BARANG TEMUAN SEBAGAI BARANG BUKTI</option>
                            </select>

                            @error('daftar_barang_temuan')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8">
                            <label for="underline_select" class="sr-only">Underline select</label>
                            <select id="underline_select"
                                    name="dit"
                                    class="block py-2.5 px-0 w-full text-md text-gray-500 bg-transparent border-0 border-b-2 border-gray-300 @error('dit') border-red-500 @enderror appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option selected disabled>DIT</option>
                                <option value="DIT RESKRIM UM">DIT RESKRIM UM</option>
                                <option value="DIT RESKRIM SUS">DIT RESKRIM SUS</option>
                                <option value="DIT NARKOBA">DIT NARKOBA</option>
                                <option value="DIT LANTAS">DIT LANTAS</option>
                                <option value="DIT POLAIRUD">DIT POLAIRUD</option>
                            </select>

                            @error('dit')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="petugas_penyerah" id="petugas_penyerah"
                                   value="{{old('petugas_penyerah')}}"
                                   class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('petugas_penyerah') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="petugas_penyerah"
                                   class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Petugas/penyidik yang menyerahkan
                            </label>
                            @error('petugas_penyerah')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="petugas_penerima" id="petugas_penerima"
                                   value="{{old('petugas_penerima')}}"
                                   class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('petugas_penerima') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="petugas_penerima"
                                   class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Petugas yang menerima
                            </label>
                            @error('petugas_penerima')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <label for="keterangan" class="block mb-2">Keterangan: </label>
                            <input id="keterangan" type="hidden" value="{{old('keterangan')}}" name="keterangan">
                            <trix-editor input="keterangan"
                                         class="@error('keterangan') border-red-500 @enderror"></trix-editor>
                            @error('keterangan')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <input type="number" name="nomor_laporan_polisi" id="nomor_laporan_polisi"
                                   value="{{old('nomor_laporan_polisi')}}"
                                   class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('nomor_laporan_polisi') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="nomor_laporan_polisi"
                                   class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nomor Laporan Polisi
                            </label>
                            @error('nomor_laporan_polisi')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <input type="number" name="nomor_register_bb" id="nomor_register_bb"
                                   value="{{old('nomor_register_bb')}}"
                                   class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('nomor_register_bb') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="nomor_register_bb"
                                   class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nomor Registrasi BB
                            </label>
                            @error('nomor_register_bb')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <input type="number" name="nomor_label_barang_bukti" id="nomor_label_barang_bukti"
                                   value="{{old('nomor_label_barang_bukti')}}"
                                   class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('nomor_label_barang_bukti') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="nomor_label_barang_bukti"
                                   class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nomor Label Barang Bukti
                            </label>
                            @error('nomor_label_barang_bukti')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="jenis_barang_bukti" id="jenis_barang_bukti"
                                   value="{{old('jenis_barang_bukti')}}"
                                   class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('jenis_barang_bukti') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="jenis_barang_bukti"
                                   class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Jenis barang bukti
                            </label>
                            @error('jenis_barang_bukti')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="kondisi_barang_bukti" id="kondisi_barang_bukti"
                                   value="{{old('kondisi_barang_bukti')}}"
                                   class="block py-2.5 px-0 w-full text-md text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('kondisi_barang_bukti') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="kondisi_barang_bukti"
                                   class="peer-focus:font-medium absolute text-md text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Kondisi barang bukti
                            </label>
                            @error('kondisi_barang_bukti')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="relative z-0 w-full mb-8 group">
                            <label class="block mb-2 text-md font-medium text-gray-900 dark:text-white"
                                   for="foto_barang_bukti">Foto barang bukti:</label>
                            <input
                                class="block w-full text-md text-gray-900 border border-gray-300 @error('foto_barang_bukti') border-red-500 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="foto_barang_bukti" name="foto_barang_bukti" type="file">
                            @error('foto_barang_bukti')
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
