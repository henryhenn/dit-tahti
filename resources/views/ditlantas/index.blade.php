<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DITLANTAS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <div class="flex flex-row gap-2">
                            <a href="{{route('ditlantas.print')}}"
                               class="text-white bg-green-700 font-medium hover:bg-green-800 focus:ring-4 focus:ring-green-300 rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                                Cetak Data
                            </a>
                            <a href="{{route('ditlantas.export')}}"
                               class="text-white bg-yellow-700 font-medium hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 rounded-lg text-sm px-5 py-2.5 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">
                                Export ke Excel
                            </a>
                        </div>

                        <a href="{{route('ditlantas.create')}}"
                           class="text-white bg-blue-700 font-medium hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Tambah Data DITLANTAS Baru
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
                                    Nama/Jenis Kendaraan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Identitas Kendaraan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    No. Surat Tilang
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($ditlantas as $key => $ditlantas)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$key+1}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$ditlantas->nama_kendaraan}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$ditlantas->identitas_kendaraan}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$ditlantas->no_surat_tilang}}
                                    </td>
                                    <td class="px-6 py-4 flex flex-row">
                                        <a href="{{route('ditlantas.edit', $ditlantas->id)}}"
                                           class="px-3 py-2 text-xs font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-800">
                                            Edit
                                        </a>
                                        <a href="{{route('ditlantas.show', $ditlantas->id)}}"
                                           class="px-3 py-2 mx-2 text-xs font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-500 dark:focus:ring-yellow-800">
                                            Detail
                                        </a>
                                        <form action="{{route('ditlantas.destroy', $ditlantas->id)}}" id="delete-form"
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
                                    <td colspan="5"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <h3 class="text-xl font-bold text-center">
                                            Tidak ada data DITLANTAS. Silakan tambahkan data DITLANTAS!</h3>
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
