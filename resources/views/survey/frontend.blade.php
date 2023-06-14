@php use Illuminate\Support\Str; @endphp

@extends('layouts.frontend')

@section('content')
    <div class="container mx-auto mt-2">
        <div class="flex rounded-md bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 h-14">
            <h1 class="w-full pt-2 pl-2 text-2xl font-bold text-white">BERITA</h1>
            <div class="grid w-full p-2 place-items-end">

                <form class="flex items-end">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search" name="search"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Search" required>
                    </div>
                    <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-cyan-800 rounded-lg border border-white hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>

            </div>
        </div>
    </div>

    <div class="container p-2 mx-auto mt-2 rounded-md bg-slate-200">
        <div class="lg:flex">
            @foreach($beritas->take(1) as $berita)
                <div class="w-full">
                    <img class="w-[700px] lg:h-[400px] h-56 object-cover rounded-md"
                         src="{{asset('storage/' . $berita->image)}}"
                         alt="">
                </div>
                <div class="w-full lg:pl-4">
                    <h1 class="text-2xl font-bold">{{$berita->title}}</h1>
                    <p class="mt-2">{!! Str::limit($berita->content, 300, '...') !!}
                    </p>
                    <div class="flex mt-16">
                        <div class="w-full">
                            <h1 class="text-gray-400">{{$berita->created_at->format('D, d/M/Y')}}</h1>
                        </div>
                        <a href="{{route('berita.detail', $berita)}}"
                           class="w-full h-8 rounded-md bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">
                            <p class="text-center text-white">Selengkapnya</p></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mx-auto mt-4">
        <div class="bg-gray-200 rounded-md w-full lg:h-[550px]">
            <div class="lg:flex lg:gap-4 lg:p-4">
                @foreach($beritas->skip(1)->take(2) as $berita)
                    <a href="{{route('berita.detail', $berita)}}" class="w-full rounded-md bg-slate-400 h-auto">
                        <div class="p-2 lg:flex lg:gap-4">
                            <img class="w-full h-56 rounded-md lg:h-40 lg:w-44"
                                 src="{{asset('storage/' . $berita->image)}}" alt="">
                            <div class="w-auto">
                                <h1 class="text-lg font-bold">{{$berita->title}}</h1>
                                <p class="text-sm">{!! $berita->content !!}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="pt-0 lg:p-4 lg:gap-4 lg:flex">
                @foreach($beritas->skip(3)->take(2) as $berita)
                    <a href="{{route('berita.detail', $berita)}}" class="w-full rounded-md bg-slate-400 h-auto">
                        <div class="p-2 lg:flex lg:gap-4">
                            <img class="w-full h-56 rounded-md lg:h-40 lg:w-44"
                                 src="{{asset('storage/' . $berita->image)}}" alt="">
                            <div>
                                <h1 class="text-lg font-bold">{{$berita->title}}</h1>
                                <p class="text-sm">{!! $berita->content !!}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container mx-auto mb-16  mt-4">
        <div class="relative w-full">
            <div class="absolute inset-y-0 right-2 lg:w-80 w-56">

                {{$beritas->links()}}
            </div>
        </div>
    </div>
@endsection
