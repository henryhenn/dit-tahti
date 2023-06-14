<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($beritum->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-row justify-between">
                        <h2 class="text-2xl font-extrabold">{{$beritum->title}}</h2>
                        <a href="{{route('berita.index')}}" class="text-decoration-none text-blue-500">Kembali</a>
                    </div>

                    <small class="text-gray-500">Dibuat pada: {{$beritum->created_at->format('D, d M Y H:i')}}</small>
                    <img src="{{asset('storage/'.$beritum->image)}}" alt="Gambar Berita" class="mt-4 w-full">
                    <p class="mt-6 ">{!! $beritum->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
