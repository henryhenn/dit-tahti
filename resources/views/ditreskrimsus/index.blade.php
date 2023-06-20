<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DITRESKRIMSUS') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <div class="flex flex-row gap-2">
                            <a href="{{route('ditreskrimsus.print')}}"
                               class="text-white bg-green-700 font-medium hover:bg-green-800 focus:ring-4 focus:ring-green-300 rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                                Cetak Data
                            </a>
                            <a href="{{route('ditreskrimsus.export')}}"
                               class="text-white bg-yellow-700 font-medium hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 rounded-lg text-sm px-5 py-2.5 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">
                                Export ke Excel
                            </a>
                        </div>

                        <a href="{{route('ditreskrimsus.create')}}"
                           class="text-white bg-blue-700 font-medium hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Tambah Data DITRESKRIMSUS Baru
                        </a>
                    </div>

                    <x-alert/>

                    <x-dit-table route="ditreskrimsus" title="DITRESKRIMSUS Barang Bukti" :data="$barang_bukti"/>
                    <x-dit-table route="ditreskrimsus" title="DITRESKRIMSUS Barang Temuan" :data="$barang_temuan"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
