<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Berita: ' . $beritum->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center">
                    <form method="post" action="{{route('berita.update', $beritum)}}" enctype="multipart/form-data" class="w-1/2">
                        @csrf
                        @method('put')
                        <div class="relative z-0 w-full mb-8 group">
                            <input type="text" name="title" id="title"
                                   value="{{old('title', $beritum->title)}}"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 @error('title') border-red-500 @enderror appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "/>
                            @error('title')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                            <label for="title"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Judul berita
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-8 group" >
                            <label for="content" class="block mb-2">Isi berita: </label>
                            <input id="content" type="hidden" name="content" value="{{old('content', $beritum->content)}}">
                            <trix-editor input="content" class="@error('content') border-red-500 @enderror"></trix-editor>
                            @error('content')
                            <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="relative z-0 w-full mb-8 group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                   for="image">Gambar:</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 @error('image') border-red-500 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="image" name="image" type="file">
                            @error('image')
                            <p class="text-red-500">{{$message}}</p>
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
