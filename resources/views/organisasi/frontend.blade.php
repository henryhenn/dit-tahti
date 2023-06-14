@extends('layouts.frontend')

@section('content')
    @forelse($organisasi as $data)
        <div class="mt-4 text-center">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                {{$data->judul}}
            </h1>
        </div>
        <div class="container p-2 lg:p-0 lg:pl-12 lg:pr-12">
            <img class="w-full h-56 rounded-md lg:h-96" src="{{asset('storage/' . $data->foto)}}" alt="">
        </div>

    @empty
        <div class="text-center mt-4">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                Tidak ada data Struktur Organisasi terkini
            </h1>
        </div>
    @endforelse
@endsection
