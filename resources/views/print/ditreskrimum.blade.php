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
<body>
<div class="container mx-auto p-6">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        DITRESKRIMUM
    </h2>


    <div class="relative mt-14">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs uppercase bg-sky-500 text-white dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Nama/Jenis Barang Bukti
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    Jens/Volume
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    No. Lap. Pol
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    Penetapan Pengadilan
                </th>
                {{--                <th scope="col" class="px-6 py-3 uppercase">--}}
                {{--                    Pasal Yang Dilanggar--}}
                {{--                </th>--}}
                <th scope="col" class="px-6 py-3 uppercase">
                    Penyidik
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    Tempat Penyimpanan
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    Kondisi
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    Nama Pemilik/Disita
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    Foto BB
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse($ditreskrimum as $key => $ditreskrimum)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$key+1}}
                    </th>
                    <td class="px-6 py-4">
                        {{$ditreskrimum->nama_barang_bukti}}
                    </td>
                    <td class="px-6 py-4">
                        {{$ditreskrimum->jumlah}}
                    </td>
                    <td class="px-6 py-4">
                        {{$ditreskrimum->no_laporan_polisi}}
                    </td>
                    <td class="px-6 py-4">
                        {{$ditreskrimum->penetapan_pengadilan ?? $ditreskrimum->penetapan_kejaksaan}}
                    </td>
                    <td class="px-6 py-4">
                        {{$ditreskrimum->penyidik}}
                    </td>
                    <td class="px-6 py-4">
                        {{$ditreskrimum->tempat_penyimpanan}}
                    </td>
                    <td class="px-6 py-4">
                        {{$ditreskrimum->kondisi}}
                    </td>
                    <td class="px-6 py-4">
                        {{$ditreskrimum->nama_pemilik}}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col gap-4">
                            <img src="{{asset('storage/' . $ditreskrimum->gambar1)}}" class="w-full" alt="">
                            <img src="{{asset('storage/' . $ditreskrimum->gambar2)}}" class="w-full" alt="">
                            <img src="{{asset('storage/' . $ditreskrimum->gambar3)}}" class="w-full" alt="">
                        </div>
                    </td>
                </tr>

            @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td colspan="5"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <h3 class="text-xl font-bold text-center">
                            Tidak ada data DITRESKRIMUM. Silakan tambahkan data DITRESKRIMUM!</h3>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

