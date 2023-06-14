@extends('layouts.frontend')

@section('content')
    @forelse($visimisi as $data)
        <div class="mt-4 text-center">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                {{$data->judul}}
            </h1>
        </div>

        <div class="p-2 text-left lg:px-40 lg:mt-6 lg:p-0">
            {!! $data->deskripsi !!}
        </div>
    @empty
        <div class="text-center mt-4">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                Tidak ada data Visi & Misi terkini
            </h1>
        </div>
    @endforelse
@endsection
