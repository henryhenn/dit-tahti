<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DITPOLAIRUD') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <x-export-buttons print-route="ditpolairud.printbukti" export-route="ditpolairud.export"/>

                        <a href="{{route('ditpolairud.create')}}"
                           class="text-white bg-blue-700 font-medium hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Tambah Data DITPOLAIRUD Baru
                        </a>
                    </div>

                    <x-alert/>

                    <x-dit-table title="DITPOLAIRUD Barang Bukti" route="ditpolairud" class="mb-16"
                                 :data="$barang_bukti"/>

                    <x-export-buttons print-route="ditpolairud.printtemuan" export-route="ditpolairud.export"/>

                    <x-dit-table title="DITPOLAIRUD Barang Temuan" route="ditpolairud" :data="$barang_temuan"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
