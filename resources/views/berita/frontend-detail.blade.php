@extends('layouts.frontend')

@section('content')
    <div class="container p-2 mx-auto mt-2 rounded-md bg-slate-200">
        <div class="lg:flex">
            <div class="w-full">
                <img class="w-full rounded-md" src="{{ asset('storage/'.$berita->image)}}" alt="">
            </div>
            <div class="w-full lg:pl-4">
                <h1 class="text-2xl font-bold">{{$berita->title}}</h1>
                <p class="mt-2">{!! $berita->content !!}<br><br>
                </p>
                <div class="flex mt-16">
                    <div class="w-full"><h1 class="text-gray-400">{{$berita->created_at->format('D, d/M/Y')}}</h1></div>
                </div>
            </div>
        </div>
    </div>
@endsection
