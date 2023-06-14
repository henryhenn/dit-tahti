<script setup>
import Navbar from '../components/navbar.vue'
import Footer from '../components/footer.vue'
</script>

<template>
    <main>
        <Navbar/>
    </main>

    <div class="container mx-auto mt-2">
        <div class="flex bg-gradient-to-br from-cyan-400 via-cyan-500 to-cyan-600 rounded-md h-14">
            <h1 class="pl-2 w-full text-white text-2xl font-bold pt-2">BERITA</h1>
            <div class="w-full p-2 grid place-items-end">

                <form class="flex items-end">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Search" required>
                    </div>
                    <button type="submit"
                            class="p-2.5 ml-2 text-sm font-medium text-white bg-cyan-800 rounded-lg border border-white hover:bg-cyan-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>

            </div>
        </div>
    </div>

    <div class="container bg-slate-200 p-2 rounded-md mx-auto mt-2">
        <div class="flex">
            <div class="w-full">
                <img class="w-full rounded-md"
                     src="https://akcdn.detik.net.id/community/media/visual/2022/08/20/pelaku-pemalsuan-stnk-di-mataram-dibekuk-polisi-sabtu-2082022_43.jpeg?w=250&q="
                     alt="">
            </div>
            <div class="w-full pl-4">
                <h1 class="font-bold text-2xl"> Buron 8 Bulan, Kakek Pemalsu STNK Dibekuk di Mataram"</h1>
                <p class="mt-2">Mataram - Pelaku pemalsuan surat tanda nomor kendaraan (STNK) inisial WP (57) asal
                    Lendang Lekong Timur, Kelurahan Mandalika, Kecamatan Sandubaya, Kota Mataram, NTB dibekuk polisi. WP
                    berhasil ditangkap usai buron 8 bulan<br><br>

                    Pelaku WP rupanya memalsukan STNK kendaraan roda dua menjadi roda STNK kendaraan roda empat untuk
                    digadaikan ke korban. Selain itu, pelaku produksi nomor seri kendaraan STNK di Denpasar
                    Bali.<br><br>

                    Kasat Reskrim Polresta Mataram Kompol Kadek Adi Budi Astawa mengatakan pelaku rupanya menggunakan
                    material STNK asli yang dikeluarkan oleh pihak Samsat di wilayah NTB.<br><br>
                </p>
                <div class="flex mt-16">
                    <div class="w-full"><h1 class="text-gray-400">Selasa 12/05/2023</h1></div>
                    <div
                        class="w-full rounded-md h-8 bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">
                        <p class="text-center text-white">Selengkapnya</p></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-4">
        <div class="bg-gray-200 rounded-md w-full h-[400px]">
            <div class="flex gap-4 p-4">

                <div class="w-full bg-slate-400 rounded-md h-44">
                    <div class="flex gap-4 p-2">
                        <img class="w-44 h-40 rounded-md"
                             src="https://cdn.antaranews.com/cache/800x533/2019/07/22/ungkap-narkoba.jpg" alt="">
                        <div>
                            <h1 class="font-bold text-lg">Polres Mataram Mengungkap Kasus Penangkapan Milik Narkoba</h1>
                            <p class="text-sm">Mataram - Pelaku pemalsuan surat tanda nomor kendaraan (STNK) inisial WP
                                (57) asal Lendang Lekong Timur, Kelurahan Mandalika, Kecamatan Sandubaya, Kota Mataram,
                                NTB dibekuk polisi. WP berhasil ditangkap usai buron 8 bulan</p>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-slate-400 rounded-md h-44">
                    <div class="flex gap-4 p-2">
                        <img class="w-44 h-40 rounded-md"
                             src="https://cdn.antaranews.com/cache/800x533/2019/07/22/ungkap-narkoba.jpg" alt="">
                        <div>
                            <h1 class="font-bold text-lg">Polres Mataram Mengungkap Kasus Penangkapan Milik Narkoba</h1>
                            <p class="text-sm">Mataram - Pelaku pemalsuan surat tanda nomor kendaraan (STNK) inisial WP
                                (57) asal Lendang Lekong Timur, Kelurahan Mandalika, Kecamatan Sandubaya, Kota Mataram,
                                NTB dibekuk polisi. WP berhasil ditangkap usai buron 8 bulan</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="flex gap-4 p-4 pt-0">

                <div class="w-full bg-slate-400 rounded-md h-44">
                    <div class="flex gap-4 p-2">
                        <img class="w-44 h-40 rounded-md"
                             src="https://cdn.antaranews.com/cache/800x533/2019/07/22/ungkap-narkoba.jpg" alt="">
                        <div>
                            <h1 class="font-bold text-lg">Polres Mataram Mengungkap Kasus Penangkapan Milik Narkoba</h1>
                            <p class="text-sm">Mataram - Pelaku pemalsuan surat tanda nomor kendaraan (STNK) inisial WP
                                (57) asal Lendang Lekong Timur, Kelurahan Mandalika, Kecamatan Sandubaya, Kota Mataram,
                                NTB dibekuk polisi. WP berhasil ditangkap usai buron 8 bulan</p>
                        </div>
                    </div>
                </div>

                <div class="w-full bg-slate-400 rounded-md h-44">
                    <div class="flex gap-4 p-2">
                        <img class="w-44 h-40 rounded-md"
                             src="https://cdn.antaranews.com/cache/800x533/2019/07/22/ungkap-narkoba.jpg" alt="">
                        <div>
                            <h1 class="font-bold text-lg">Polres Mataram Mengungkap Kasus Penangkapan Milik Narkoba</h1>
                            <p class="text-sm">Mataram - Pelaku pemalsuan surat tanda nomor kendaraan (STNK) inisial WP
                                (57) asal Lendang Lekong Timur, Kelurahan Mandalika, Kecamatan Sandubaya, Kota Mataram,
                                NTB dibekuk polisi. WP berhasil ditangkap usai buron 8 bulan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mb-4">
        <div class="relative w-full ...">
            <div class="absolute inset-y-0 right-0 w-80">

                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px">
                        <li>
                            <a href="#"
                               class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#"
                               class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                               class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                               class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                               class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                               class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#"
                               class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

    <div class="container mx-auto mt-10">
        <main class="shadow-2xl">
            <Footer/>
        </main>
    </div>

</template>

<style>

</style>
