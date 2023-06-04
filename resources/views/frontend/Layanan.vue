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
                LAYANAN STARBUKS DITTAHTI POLDA NTB
            </h1>
        </div>
        <div class="container pl-12 pr-12">
            <img class="h-96 w-full rounded-md" src="https://i.ytimg.com/vi/D9nNLkgpqO0/maxresdefault.jpg" alt="">
        </div>

        <div class="text-left mt-6 px-40">
            <p>
                Dalam rangka lebih cepat memberikan pelayanan kepada masyarakat, Polri telah bekerjasama dengan PT Telekomunikasi Indonesia (Telkom) untuk melaksanakan Layanan Contact Center 110. 
            </p><br>
            <p>
                Kehadiran Layanan Contact Center 110 POLRI ditujukan untuk memenuhi harapan dan kebutuhan masyarakat terhadap terselenggaranya layanan keamanan publik. Dalam penyelenggaraan layanan contact center, telah disiapkan sebuah sistem aplikasi yang dapat memungkinkan pencatatan /perekaman setiap interaksi Polri & masyarakat, sehingga dimungkinkan pengendalian response kebutuhan masyarakat terhadap Polri.
            </p><br>
            <p>
                Sistem tersebut direncanakan akan membuka saluran via : telepon, sms, email, fax dan media sosial yang didukung oleh jaringan Telkom Group di Indonesia.
            </p><br>
            <p>
                Masyarakat yang nantinya melakukan panggilan ke nomor akses 110 akan langsung terhubung ke agen yang akan memberikan layanan berupa informasi, pelaporan (kecelakaan, bencana, kerusuhan, dll) dan pengaduan (penghinaan, ancaman, tindak kekerasan dll).
            </p><br>
            <p>
                Masyarakat bisa menggunakan layanan Contact Center 110 secara gratis. Namun demikian, Polri menghimbau agar layanan 110 ini tidak dibuat main-main, karena jika nantinya terjadi seperti itu, pihak Polri tentu akan melacak masyarakat yang membuat laporan bohong.
            </p>
        </div> 

        <main class="mt-12">
            <Footer/>
        </main>
    </div>
</template>