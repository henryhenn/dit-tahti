@php use Illuminate\Support\Str; @endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ATURAN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="float-right">
                        <a href="{{route('aturan.create')}}"
                           class="text-white bg-blue-700 font-medium hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Tambah Aturan Baru
                        </a>
                    </div>

                    <x-alert/>

                    <div class="relative mt-14 overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs uppercase bg-sky-500 text-white dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Judul Aturan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($aturan as $key => $aturan)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$key+1}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$aturan->judul}}
                                    </td>
                                    <td class="px-6 py-4 flex flex-row">
                                        <a href="{{route('aturan.edit', $aturan->id)}}"
                                           class="px-3 py-2 text-xs font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-800">
                                            Edit
                                        </a>
                                        <a href="{{route('aturan.download', $aturan->id)}}"
                                           class="px-3 py-2 mx-2 text-xs font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-500 dark:focus:ring-yellow-800">
                                            Download
                                        </a>
                                        <form action="{{route('aturan.destroy', $aturan->id)}}" id="delete-form"
                                              method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                    onclick="return confirm('Apakah Anda Yakin?')"
                                                    class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-yellow-600 dark:hover:bg-yellow-500 dark:focus:ring-yellow-800">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @empty
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td colspan="3"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <h3 class="text-xl font-bold text-center">Tidak ada aturan. Silakan tambahkan
                                            aturan baru!</h3>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
