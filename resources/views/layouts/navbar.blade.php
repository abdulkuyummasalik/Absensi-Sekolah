<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Absensi Sekolah">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="#"
                            class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Dashboard</a>

                        <!-- Kondisi untuk Admin -->
                        @if (Auth::user()->role === 'admin')
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Manajemen
                                Pengguna</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kelas
                                & Jadwal</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Laporan</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pengaturan</a>

                            <!-- Kondisi untuk Guru -->
                        @elseif (Auth::user()->role === 'teacher')
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kehadiran</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Laporan
                                Kelas</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pengaturan</a>

                            <!-- Kondisi untuk Siswa -->
                        @elseif (Auth::user()->role === 'student')
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Rekap
                                Kehadiran</a>
                            <a href="#"
                                class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pengaturan
                                Profil</a>
                        @endif
                    </div>
                </div>
            </div>
            <!-- User Menu -->
            <div class="ml-3 relative">
                <div>
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </button>
                </div>
                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right hidden rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                    id="user-menu-dropdown">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">Settings</a>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700">Sign out</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile menu, show/hide based on menu state. -->
<div class="sm:hidden hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
        <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
        @if (Auth::user()->role === 'admin')
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Manajemen
                Pengguna</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kelas
                & Jadwal</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Laporan</a>
        @elseif (Auth::user()->role === 'teacher')
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kehadiran</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Laporan
                Kelas</a>
        @elseif (Auth::user()->role === 'student')
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Rekap
                Kehadiran</a>
        @endif
    </div>
</div>
