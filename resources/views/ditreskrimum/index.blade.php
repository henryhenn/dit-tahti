@php use Illuminate\Support\Str; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-row justify-between">
                        <h2 class="text-2xl font-extrabold">List Berita</h2>

                        <a href="{{route('berita.create')}}"
                           class="text-white bg-blue-700 font-medium hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Tambah Berita Baru
                        </a>
                    </div>

                    <x-alert/>

                    <div class="relative mt-10 overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs uppercase bg-sky-500 text-white dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Judul Berita
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Isi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Dibuat pada
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($berita as $key => $beritum)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$key+1}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$beritum->title}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {!! Str::limit($beritum->content, 100, $end = '...') !!}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$beritum->created_at->format('d M Y')}}
                                    </td>
                                    <td class="px-6 py-4 flex flex-row">
                                        <a href="{{route('berita.edit', $beritum->id)}}"
                                           class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Edit
                                        </a>
                                        <a href="{{route('berita.show', $beritum->id)}}"
                                           class="px-3 py-2 mx-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Detail
                                        </a>
                                        <a href="{{route('berita.destroy', $beritum->id)}}"
                                           onclick="event.preventDefault(); document.getElementById('delete-form').submit()"
                                           class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Delete
                                        </a>
                                        <form action="{{route('berita.destroy', $beritum->id)}}" id="delete-form"
                                              method="post" class="hidden">@csrf @method('delete')</form>
                                    </td>
                                </tr>

                            @empty
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td colspan="5"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <h3 class="text-xl font-bold text-center">Tidak ada berita. Silakan tambahkan
                                            berita baru!</h3>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                        <div class="mt-4">
                            {{$berita->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
