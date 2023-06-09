@extends('layouts.frontend')

@section('content')
    @if($layanan)
        <div class="mt-4 text-center">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                {{$layanan->judul}}
            </h1>
        </div>
        <div class="container p-2 lg:p-0 lg:pl-12 lg:pr-12">
            <img class="w-full h-56 rounded-md lg:h-96" src="{{asset('storage/' . $layanan->gambar)}}" alt="">
        </div>

        <div class="p-2 text-left lg:px-40 lg:mt-6 lg:p-0">
            {!! $layanan->deskripsi !!}
        </div>
    @else
        <div class="text-center mt-4">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                Tidak ada layanan terkini
            </h1>
        </div>
    @endif
@endsection
