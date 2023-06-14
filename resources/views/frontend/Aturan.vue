<script setup>
import Navbar from '../components/navbar.vue'
import Footer from '../components/footer.vue'
</script>

<template>
    <div class="container mx-auto">
        <main>
            <Navbar/>
        </main>

        <div class="text-center mt-4"> 
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                ATURAN STARBUKS DITTAHTI POLDA NTB
            </h1>
        </div>

        
<div class="relative overflow-x-auto mt-2 mb-6 px-40">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Aturan
                </th>
                <th scope="col" class="px-12 py-3">
                    Satuan
                </th>
                <th scope="col" class="px-14 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="pr-40 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Aturan 1
                </th>
                <td class="px-6 py-4">
                    DITRESKRIMUM
                </td>
                <td class="px-6 py-4">
                    <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Download</button>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="pr-40 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Aturan 2
                </th>
                <td class="px-6 py-4">
                    DITLANTAS
                </td>
                <td class="px-6 py-4">
                    <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Download</button>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="pr-40 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Aturan 3
                </th>
                <td class="px-6 py-4">
                    DITRESKRIMSUS
                </td>
                <td class="px-6 py-4">
                    <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Download</button>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="pr-40 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Aturan 4
                </th>
                <td class="px-6 py-4">
                    DITRESNARKOBA
                </td>
                <td class="px-6 py-4">
                    <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Download</button>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="pr-40 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Aturan 5
                </th>
                <td class="px-6 py-4">
                    DITPOLAIRUD
                </td>
                <td class="px-6 py-4">
                    <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Download</button>
                </td>
            </tr>
         
        </tbody>
    </table>
</div>


        <main>
            <Footer/>
        </main>
    </div>
</template>