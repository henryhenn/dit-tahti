@php use Illuminate\Support\Str; @endphp
@extends('layouts.frontend')

@section('content')
    <div class="container mx-auto mt-2">
        <div class=" lg:h-[420px] rounded-md p-4">

            <div id="default-carousel" class="relative w-full h-22" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://hariannusa.com/wp-content/uploads/2019/12/IMG-20191230-WA0049.jpg"
                             class="absolute block w-full object-fill -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://static.gatra.com/foldershared/images/2022/hew/07-Jul/PJU.jpg"
                             class="absolute block w-full object-fill -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://ntbsatu.com/wp-content/uploads/2022/08/IMG-20220819-WA0032.jpg"
                             class="absolute block w-full object-fill -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
                </button>
                <button type="button"
                        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
                </button>
            </div>
        </div>
    </div>

    <div class="container grid place-items-center mx-auto">
        <div class="flex gap-4 p-4">
            @forelse($berita as $berita)
                <div class="w-full bg-slate-200 rounded-md h-44 shadow-lg">
                    <div class="flex gap-4 p-2">
                        <img class="w-44 h-40 rounded-md"
                             src="{{asset('storage/' . $berita->image)}}" alt="Gambar berita">
                        <div>
                            <h1 class="font-bold text-lg">{{$berita->title}}</h1>
                            <p class="text-sm"{!! Str::limit($berita->content, 400, $end = '...') !!}</p>
                        </div>
                    </div>
                </div>
            @empty
                <h3 class="text-2xl font-bold">Tidak ada berita terbaru</h3>
            @endforelse
        </div>
    </div>

    <div class="pl-20 pr-20">
        <main>
            <x-barang :barang="$barang" />
        </main>
    </div>
@endsection
