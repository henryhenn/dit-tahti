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
                <th scope="col" class="px-3 py-3">
                    #
                </th>
                <th scope="col" class="px-3 py-3">
                    DAFTAR BARANG BUKTI
                </th>
                <th scope="col" class="px-3 py-3">
                    NO. LAP POL
                </th>
                <th scope="col" class="px-3 py-3">
                    NO. SP SITA
                </th>
                <th scope="col" class="px-3 py-3">
                    PENETAPAN PENGADILAN
                </th>
                <th scope="col" class="px-3 py-3">
                    PENYIDIK
                </th>
                <th scope="col" class="px-3 py-3">
                    TEMPAT PENYIMPANAN
                </th>
                <th scope="col" class="px-3 py-3">
                    NAMA PEMILIK
                </th>
                <th scope="col" class="px-3 py-3">
                    KET
                </th>
            </tr>
            </thead>
            <tbody class="border-2">
            @foreach($data as $key => $data)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row"
                        class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$key+1}}
                    </th>
                    <td class="px-3 py-3">
                        {{$data->nama_barang_bukti}}
                    </td>
                    <td class="px-3 py-3">
                        {{$data->no_laporan_polisi}}
                    </td>
                    <td class="px-3 py-3">
                        {{$data->no_sp_sita}}
                    </td>
                    <td class="px-3 py-3">
                        {{$data->penetapan_pengadilan}}
                    </td>
                    <td class="px-3 py-3">
                        {{$data->penyidik}}
                    </td>
                    <td class="px-3 py-3">
                        {{$data->tempat_penyimpanan}}
                    </td>
                    <td class="px-3 py-3">
                        {{$data->nama_pemilik}}
                    </td>
                    <td class="px-3 py-3">
                        {!! $data->keterangan !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

