<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Link Youtube Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                    <form method="post" action="{{route('youtube-beranda.store')}}" enctype="multipart/form-data" class="w-1/2">
                        @csrf
                        <div class="relative z-0 w-full mb-8 group">
                            <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                            <textarea id="link" autofocus name="link" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 @error('link') border-red-500 @enderror focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Embed YoutTube di sini">
                            </textarea>
                            @error('link')
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
