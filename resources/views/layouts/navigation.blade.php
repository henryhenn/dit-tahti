<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden mx-auto space-x-7 sm:-my-px sm:flex">
                    @role('Administrator')
                    <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.*')">
                        {{ __('USER') }}
                    </x-nav-link>
                    @endrole
                    @role('Administrator')
                    <x-nav-link :href="route('berita.index')" :active="request()->routeIs('berita.*')">
                        {{ __('BERITA') }}
                    </x-nav-link>
                    @endrole
                    <div class="flex items-center">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>DIT</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                @role('Administrator|USER DITRESKRIMUM')
                                <x-dropdown-link :href="route('ditreskrimum.index')">
                                    {{ __('DITRESKRIMUM') }}
                                </x-dropdown-link>
                                @endrole
                                @role('Administrator|USER DITLANTAS')
                                <x-dropdown-link :href="route('ditlantas.index')">
                                    {{ __('DITLANTAS') }}
                                </x-dropdown-link>
                                @endrole
                                @role('Administrator|USER DITRESKRIMSUS')
                                <x-dropdown-link :href="route('ditreskrimsus.index')">
                                    {{ __('DITRESKRIMSUS') }}
                                </x-dropdown-link>
                                @endrole
                                @role('Administrator|USER DITPOLAIRUD')
                                <x-dropdown-link :href="route('ditpolairud.index')">
                                    {{ __('DITPOLAIRUD') }}
                                </x-dropdown-link>
                                @endrole
                                @role('Administrator|USER DITRESNARKOBA')
                                <x-dropdown-link :href="route('ditresnarkoba.index')">
                                    {{ __('DITRESNARKOBA') }}
                                </x-dropdown-link>
                                @endrole
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <div class="flex items-center">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>PROFIL</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                @role('Administrator')
                                <x-dropdown-link :href="route('struktur-organisasi.index')">
                                    {{ __('Struktur Organisasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('aturan.index')">
                                    {{ __('Aturan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('visi-misi.index')">
                                    {{ __('Visi dan Misi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('tugas-fungsi.index')">
                                    {{ __('Tugas dan Fungsi') }}
                                </x-dropdown-link>
                                @endrole
                            </x-slot>
                        </x-dropdown>
                    </div>
                    @role('Administrator')
                    <x-nav-link :href="route('layanan.index')" :active="request()->routeIs('layanan.*')">
                        {{ __('LAYANAN') }}
                    </x-nav-link>
                    <x-nav-link :href="route('gambar-beranda.index')" :active="request()->routeIs('gambar-beranda.*')">
                        {{ __('GAMBAR BERANDA') }}
                    </x-nav-link>
                    <x-nav-link :href="route('youtube-beranda.index')" :active="request()->routeIs('youtube-beranda.*')">
                        {{ __('YOUTUBE BERANDA') }}
                    </x-nav-link>
                    <x-nav-link :href="route('survey.index')" :active="request()->routeIs('survey.*')">
                        {{ __('SURVEY') }}
                    </x-nav-link>
                    @endrole
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @role('Administrator')
            <x-responsive-nav-link :href="route('users.index')" :active="request()->routeIs('users.*')">
                {{ __('USER') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('berita.index')" :active="request()->routeIs('berita.*')">
                {{ __('BERITA') }}
            </x-responsive-nav-link>
            @endrole
            @role('Administrator|USER DITRESKRIMUM')
            <x-responsive-nav-link :href="route('ditreskrimum.index')" :active="request()->routeIs('ditreskrimum.*')">
                {{ __('DITRESKRIMUM') }}
            </x-responsive-nav-link>
            @endrole
            @role('Administrator|USER DITLANTAS')
            <x-responsive-nav-link :href="route('ditlantas.index')" :active="request()->routeIs('ditlantas.*')">
                {{ __('DITLANTAS') }}
            </x-responsive-nav-link>
            @endrole
            @role('Administrator|USER DITRESKRIMSUS')
            <x-responsive-nav-link :href="route('ditreskrimsus.index')" :active="request()->routeIs('ditreskrimsus.*')">
                {{ __('DITRESKRIMSUS') }}
            </x-responsive-nav-link>
            @endrole
            @role('Administrator|USER DITPOLAIRUD')
            <x-responsive-nav-link :href="route('ditpolairud.index')" :active="request()->routeIs('ditpolairud.*')">
                {{ __('DITPOLAIRUD') }}
            </x-responsive-nav-link>
            @endrole
            @role('Administrator|USER DITRESNARKOBA')
            <x-responsive-nav-link :href="route('ditresnarkoba.index')" :active="request()->routeIs('ditresnarkoba.*')">
                {{ __('DITRESNARKOBA') }}
            </x-responsive-nav-link>
            @endrole
            @role('Administrator')
            <x-responsive-nav-link :href="route('struktur-organisasi.index')" :active="request()->routeIs('struktur-organisasi.*')">
                {{ __('Struktur Organisasi') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('aturan.index')" :active="request()->routeIs('aturan.*')">
                {{ __('Aturan') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('visi-misi.index')" :active="request()->routeIs('visi-misi.*')">
                {{ __('Visi dan Misi') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('tugas-fungsi.index')" :active="request()->routeIs('tugas-fungsi.*')">
                {{ __('Tugas dan Fungsi') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('layanan.index')" :active="request()->routeIs('layanan.*')">
                {{ __('LAYANAN') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('aturan.index')" :active="request()->routeIs('aturan.*')">
                {{ __('ATURAN') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('gambar-beranda.index')"
                                   :active="request()->routeIs('gambar-beranda.*')">
                {{ __('GAMBAR BERANDA') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('youtube-beranda.index')" :active="request()->routeIs('youtube-beranda.*')">
                {{ __('YOUTUBE BERANDA') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('survey.index')" :active="request()->routeIs('survey.*')">
                {{ __('SURVEY') }}
            </x-responsive-nav-link>
            @endrole
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
