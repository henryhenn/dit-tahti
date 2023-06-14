@extends('layouts.frontend')

@section('content')
    <div class="container mx-auto">
        <div class="mt-4 text-center">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                ATURAN STARBUKS DITTAHTI POLDA NTB
            </h1>
        </div>

        <div class="relative hidden mt-2 mb-6 overflow-x-auto lg:block lg:px-40">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody>
                @forelse($aturan as $file)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="py-4 pr-40 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$file->judul}}
                        </th>
                        <td class="px-6 py-4">
                            <a href="{{route('aturan.download', $file->id)}}"
                               class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                                Download
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2"><h3 class="text-2xl font-bold text-center">Tidak ada aturan terbaru</h3></td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>



    <div class="container block p-2 mx-auto lg:hidden">
        @forelse($aturan as $file)
            <div class="flex w-full h-16 gap-2 p-2 mb-2 border rounded-md border-cyan-500">
                <div class="w-72">
                    <h1 class="text-lg font-bold">{{$file->judul}}</h1>
                </div>
                <div class="w-12 h-12 rounded-md bg-cyan-400">
                    <a href="{{route('aturan.download', $file->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-12 h-12 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                        </svg>
                    </a>
                </div>
            </div>
        @empty
            <h2 class="text-center font-bold text-2xl">Tidak ada aturan terbaru</h2>
        @endforelse
    </div>
@endsection
