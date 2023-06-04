@extends('layouts.frontend')

@section('content')
    @if($layanan)
        <div class="text-center mt-4">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                {{$layanan->judul}}
            </h1>
        </div>
        <div class="container pl-12 pr-12">
            <img class="h-96 w-full rounded-md" src="{{asset('storage/' . $layanan->gambar)}}" alt="">
        </div>

        <div class="text-left mt-6 px-40">
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
