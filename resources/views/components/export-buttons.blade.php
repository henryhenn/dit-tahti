<div class="flex flex-row gap-2">
    <a href="{{route($attributes['print-route'])}}"
       class="text-white bg-green-700 font-medium hover:bg-green-800 focus:ring-4 focus:ring-green-300 rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
        Cetak Data
    </a>
    <a href="{{route($attributes['export-route'])}}"
       class="text-white bg-yellow-700 font-medium hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 rounded-lg text-sm px-5 py-2.5 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">
        Export ke Excel
    </a>
</div>
