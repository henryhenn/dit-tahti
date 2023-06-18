<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DITRESKRIMUM</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body onload="window.print()">
<div class="container mx-auto p-6">
    <h2 class="font-bold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
        DATA BARANG BUKTI TAHUN 2023
    </h2>

    <div class="relative mt-14">
        <table border="2" class="border-2 w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-s uppercase border-2">
            <tr>
                <th scope="col" class="p-4">
                    NO
                </th>
                <th scope="col" class="px-3 py-3">
                    DAFTAR BARANG BUKTI
                </th>
                <th scope="col" class="px-3 py-3">
                    NOKA/NOSIN
                </th>
                <th scope="col" class="px-3 py-3">
                    BLANGKO TILANG
                </th>
                <th scope="col" class="px-3 py-3">
                    TEMPAT PENYIMPANAN
                </th>
                <th scope="col" class="px-3 py-3">
                    PETUGAS PENYIDIK
                </th>
                <th scope="col" class="px-3 py-3">
                    NAMA PEMILIK
                </th>
                <th scope="col" class="px-3 py-3">
                    KETERANGAN
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($data as $key => $barang)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4 text-center">
                        {{$key+1}}
                    </td>
                    <td class="px-3 py-4">
                        {{$barang->nama_kendaraan}}
                    </td>
                    <td class="px-3 py-4">
                        {{$barang->noka_nosin}}
                    </td>
                    <td class="px-3 py-4">
                        {{$barang->no_surat_tilang}}
                    </td>
                    <td class="px-3 py-4">
                        {{$barang->tempat_penyimpanan}}
                    </td>
                    <td class="px-3 py-4">
                        {{$barang->penyidik}}
                    </td>
                    <td class="px-3 py-4">
                        {{$barang->nama_pemilik}}
                    </td>
                    <td class="px-3 py-4">
                        {!! $barang->keterangan !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="px-3 py-4">
                        <h2 class="font-bold text-center text-2xl">Tidak ada data terbaru</h2>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

