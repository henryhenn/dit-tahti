<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DITRESNARKOBA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <x-export-buttons print-route="ditresnarkoba.printbukti" export-route="ditresnarkoba.exportbukti" />

                        <a href="{{route('ditresnarkoba.create')}}"
                           class="text-white bg-blue-700 font-medium hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Tambah Data DITRESNARKOBA Baru
                        </a>
                    </div>

                    <x-alert/>

                    <x-dit-table title="DITRESNARKOBA Barang Bukti" route="ditresnarkoba" class="mb-16" :data="$barang_bukti" />

                    <x-export-buttons print-route="ditresnarkoba.printtemuan" export-route="ditresnarkoba.exporttemuan" />

                    <x-dit-table title="DITRESNARKOBA Barang Temuan" route="ditresnarkoba" :data="$barang_temuan" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
