@php use App\Models\Survey; @endphp

<div class="lg:container lg:mx-auto lg:mt-2">
    <nav
        class="border-gray-200 bg-gradient-to-r from-orange-500 via-red-700 to-red-700 dark:border-gray-700 dark:bg-gray-900 lg:rounded-md">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-2 mx-auto lg:p-4">
            <a href="/" class="flex items-center">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Lambang_Polda_NTB.png/800px-Lambang_Polda_NTB.png"
                    class="h-8 mt-1 mr-1 lg:mr-3 lg:mt-0 lg:h-12"
                    alt="Flowbite Logo"/>
                <div class="lg:mb-2 mb-0.5">
                <span
                    class="self-center text-xs font-semibold text-yellow-300 lg:text-2xl whitespace-nowrap dark:text-yellow-300">STARBUK DITTAHTI POLDA NTB</span>
                    <p class="text-[6px] lg:text-xs text-yellow-300">SISTEM TATA ADMINISTRASI DAN REGISTRASI BARANG BUKTI DITTAHTI POLDA NTB</p>
                </div>
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg lg:bg-transparent md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                           class="block py-2 pl-3 pr-4 font-bold rounded hover:bg-gray-100 hover:text-white md:hover:bg-transparent md:border-0 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent lg:text-yellow-300">BERANDA</a>
                    </li>
                    <li>
                        <a href="/berita"
                           class="block py-2 pl-3 pr-4 font-bold text-gray-900 rounded hover:bg-gray-100 hover:text-white md:hover:bg-transparent md:border-0 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent lg:text-yellow-300">BERITA</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-bold text-gray-900 rounded hover:bg-gray-100 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:text-white md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-white md:dark:hover:bg-transparent md:dark:hover:text-gray-900 lg:text-yellow-300">
                            BARANG BUKTI
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                             class="z-[99] hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-bold shadow dark:divide-gray-600 dark:bg-gray-700"
                             style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 10px, 0px);"
                             data-popper-placement="bottom" data-popper-reference-hidden="" data-popper-escaped="">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/dbt"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        BARANG BUKTI</a>
                                </li>
                                <li>
                                    <a href="/bts"
                                       class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        BARANG TEMUAN SEBAGAI BARANG BUKTI</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4 hover:text-white font-bold text-gray-900 rounded lg:text-yellow-300 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md md:p-0 md:w-auto dark:text-white md:dark dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            SURVEY
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                             class="z-[99] hidden font-bold bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                @forelse(Survey::latest()->get() as $survey)
                                    <li>
                                        <a href="{{$survey->link}}"
                                           target="_blank" rel="noopener noreferrer"
                                           class="block px-4 py-2 hover:bg-gray-100 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">
                                            {{$survey->judul}}</a>
                                    </li>
                                @empty
                                    <li>
                                        <a href="#"
                                           rel="noopener noreferrer"
                                           class="block px-4 py-2 hover:bg-gray-100 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">
                                            Belum ada survey terbaru</a>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                                class="flex items-center hover:text-white justify-between w-full py-2 pl-3 pr-4 font-bold text-gray-900 rounded lg:text-yellow-300 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md md:p-0 md:w-auto dark:text-white md:dark dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            PROFIL
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar2"
                             class="z-[99] hidden font-bold bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{route('strukturOrganisasi')}}"
                                       class="block px-4 py-2 hover:bg-gray-100 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">STRUKTUR
                                        ORGANISASI</a>
                                </li>
                                <li>
                                    <a href="{{route('aturan.frontend')}}"
                                       class="block px-4 py-2 hover:bg-gray-100 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">ATURAN</a>
                                </li>
                                <li>
                                    <a href="{{route('visiMisi')}}"
                                       class="block px-4 py-2 hover:bg-gray-100 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">VISI
                                        DAN MISI</a>
                                </li>
                                <li>
                                    <a href="{{route('tugasFungsi')}}"
                                       class="block px-4 py-2 hover:bg-gray-100 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">TUGAS
                                        DAN FUNGSI</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/layanan"
                           class="block py-2 pl-3 pr-4 font-bold text-gray-900 rounded hover:bg-gray-100 hover:text-white md:hover:bg-transparent md:border-0 md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent lg:text-yellow-300">LAYANAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
