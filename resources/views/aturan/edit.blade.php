<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Aturan: ' . $aturan->judul) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                    <form method="post" action="{{route('aturan.update', $aturan)}}" enctype="multipart/form-data" class="w-1/2">
                        @csrf
                        @method('put')
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="judul" id="judul"
                                   value="{{old('judul', $aturan->judul)}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('judul') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            <label for="judul"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Judul aturan
                            </label>
                            @error('judul')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <label for="deskripsi" class="block mb-2">Deskripsi: </label>
                            <input id="deskripsi" type="hidden" value="{{old('deskripsi', $aturan->deskripsi)}}" name="deskripsi">
                            <trix-editor input="deskripsi" class="@error('deskripsi') border-red-500 @enderror"></trix-editor>
                            @error('deskripsi')
                            <small class="text-red-500">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="gambar">Gambar:</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 @error('gambar') border-red-500 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="gambar" name="gambar" type="file">
                            @error('gambar')
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
