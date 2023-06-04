<script setup>
import Navbar from '../components/navbar.vue'
import Footer from '../components/footer.vue'
import {onMounted} from 'vue'
import {
    initAccordions,
    initCarousels,
    initCollapses,
    initDials,
    initDismisses,
    initDrawers,
    initDropdowns,
    initModals,
    initPopovers,
    initTabs,
    initTooltips
} from 'flowbite'

// initialize components based on data attribute selectors
onMounted(() => {
    initAccordions();
    initCarousels();
    initCollapses();
    initDials();
    initDismisses();
    initDrawers();
    initDropdowns();
    initModals();
    initPopovers();
    initTabs();
    initTooltips();
})
</script>

<template>
    <main>
        <Navbar/>
    </main>

    <div class="container mx-auto">
        <div class="flex gap-1">
            <div class="bg-gray-100 h-32 w-1/3 rounded-md p-2 mt-4">
                <a href="/dbt" type="button"
                   class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 w-full">BARANG
                    TEMUAN</a>
                <a href="/bts" type="button"
                   class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 w-full">BARANG
                    TEMUAN SEBAGAI BARANG BUKTI</a>
            </div>
            <div class="w-full">
                <div class="grid grid-cols-4 gap-4 p-4">
                    <div class="border border-blue-400 rounded-md h-64 p-1 mb-2">
                        <img class="w-full h-44 object-cover rounded-md"
                             src="https://spsmotorsleman.com/img_p/2022-09/l_9903_176650_honda-vario-125-spesial-editio-1.jpg"
                             alt="">
                        <div class="w-full">
                            <label class="font-bold text-gray-600" for="">Vario CV 125</label>
                        </div>
                        <div class="w-full">
                            <p class="text-xs text-gray-400" for="">DAFTAR BARANG TEMUAN</p>
                        </div>
                        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" type="button"
                                class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                            Detail Barang
                        </button>
                    </div>
                    <div class="border border-blue-400 rounded-md h-64 p-1">
                        <img class="w-full h-44 object-cover rounded-md"
                             src="https://statics.indozone.news/content/2020/12/20/r8smNeE/pedang-katana-pedang-tradisional-populer-samurai-jepang49_700.jpg"
                             alt="">
                        <div class="w-full">
                            <label class="font-bold text-gray-600" for="">Pedang</label>
                        </div>
                        <div class="w-full">
                            <p class="text-xs text-gray-400" for="">DAFTAR BARANG TEMUAN</p>
                        </div>
                        <button type="button"
                                class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                            Detail Barang
                        </button>
                    </div>
                    <div class="border border-blue-400 rounded-md h-64 p-1">
                        <img class="w-full h-44 object-cover rounded-md"
                             src="https://cdn.antaranews.com/cache/800x533/2022/03/12/F4F7598F-B11E-48E4-9B1D-5F5F688C0BC3.jpeg"
                             alt="">
                        <div class="w-full">
                            <label class="font-bold text-gray-600" for="">Pistol</label>
                        </div>
                        <div class="w-full">
                            <p class="text-xs text-gray-400" for="">DAFTAR BARANG TEMUAN</p>
                        </div>
                        <button type="button"
                                class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                            Detail Barang
                        </button>
                    </div>
                    <div class="border border-blue-400 rounded-md h-64 p-1">
                        <img class="w-full h-44 object-cover rounded-md"
                             src="https://pariwisataindonesia.id/wp-content/uploads/2020/10/Clurit-foto-by-idntimes.com_.jpg"
                             alt="">
                        <div class="w-full">
                            <label class="font-bold text-gray-600" for="">Cerurit</label>
                        </div>
                        <div class="w-full">
                            <p class="text-xs text-gray-400" for="">DAFTAR BARANG TEMUAN</p>
                        </div>
                        <button type="button"
                                class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                            Detail Barang
                        </button>
                    </div>
                    <div class="border border-blue-400 rounded-md h-64 p-1">
                        <img class="w-full h-44 object-cover rounded-md"
                             src="https://images.tokopedia.net/img/cache/700/product-1/2020/2/23/6138353/6138353_fa4ee081-e703-42f1-a09c-ecbbc90486ff_960_960.jpg"
                             alt="">
                        <div class="w-full">
                            <label class="font-bold text-gray-600" for="">Pisau Ali</label>
                        </div>
                        <div class="w-full">
                            <p class="text-xs text-gray-400" for="">DAFTAR BARANG TEMUAN</p>
                        </div>
                        <button type="button"
                                class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                            Detail Barang
                        </button>
                    </div>
                    <div class="border border-blue-400 rounded-md h-64 p-1">
                        <img class="w-full h-44 object-cover rounded-md"
                             src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/7/16/d4679e36-1ae3-48fe-ab13-9039c07705e6.jpg"
                             alt="">
                        <div class="w-full">
                            <label class="font-bold text-gray-600" for="">Klewang</label>
                        </div>
                        <div class="w-full">
                            <p class="text-xs text-gray-400" for="">DAFTAR BARANG TEMUAN</p>
                        </div>
                        <button type="button"
                                class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                            Detail Barang
                        </button>
                    </div>
                    <div class="border border-blue-400 rounded-md h-64 p-1">
                        <img class="w-full h-44 object-cover rounded-md"
                             src="https://www.usconcealedcarry.com/wp-content/uploads/2022/05/Featured_Taser_vs_Stun_Gun-050622.jpg"
                             alt="">
                        <div class="w-full">
                            <label class="font-bold text-gray-600" for="">Stun Gun</label>
                        </div>
                        <div class="w-full">
                            <p class="text-xs text-gray-400" for="">DAFTAR BARANG TEMUAN</p>
                        </div>
                        <button type="button"
                                class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                            Detail Barang
                        </button>
                    </div>
                    <div class="border border-blue-400 rounded-md h-64 p-1">
                        <img class="w-full h-44 object-cover rounded-md"
                             src="https://ae01.alicdn.com/kf/S3c3f3a83b85541e3a0fcbd7c4097a870J/Kapak-Mini-Kapak-Lebar-Tomahawk-Kapak-Palu-untuk-Berkemah-dengan-Pisau-Tahan-Karat-Berburu-Taktis-untuk.jpg_Q90.jpg_.webp"
                             alt="">
                        <div class="w-full">
                            <label class="font-bold text-gray-600" for="">Kapak 212</label>
                        </div>
                        <div class="w-full">
                            <p class="text-xs text-gray-400" for="">DAFTAR BARANG TEMUAN</p>
                        </div>
                        <button type="button"
                                class="text-white w-full bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-2">
                            Detail Barang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mb-4 mt-4">
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

    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-2 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Vario CV 125
                    </h3>
                    <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-2">
                    <div class="flex gap-2">
                        <img class="h-44 w-40 object-cover rounded-md"
                             src="https://spsmotorsleman.com/img_p/2022-09/l_9903_176650_honda-vario-125-spesial-editio-1.jpg"
                             alt="">
                        <img class="h-44 w-40 object-cover rounded-md"
                             src="https://spsmotorsleman.com/img_p/2022-09/l_9903_176650_honda-vario-125-spesial-editio-1.jpg"
                             alt="">
                        <img class="h-44 w-40 object-cover rounded-md"
                             src="https://spsmotorsleman.com/img_p/2022-09/l_9903_176650_honda-vario-125-spesial-editio-1.jpg"
                             alt="">
                    </div>
                    <p>BARANG BUKTI :</p>
                    <p>SATUAN :</p>
                    <p>JUMLAH :</p>
                    <p>NO LAPORAN :</p>
                    <p>PENETAPAN PENGADILAN :</p>
                    <p>TEMPAT PENYIMPANAN :</p>
                    <p>PENYIDIK :</p>
                    <p>KONDISI :</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto mt-14">
        <main>
            <Footer/>
        </main>
    </div>
</template>

<style>

</style>
