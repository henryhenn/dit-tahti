<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Gambar Beranda Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                    <form method="post" action="{{route('gambar-beranda.store')}}" enctype="multipart/form-data" class="w-1/2">
                        @csrf
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
