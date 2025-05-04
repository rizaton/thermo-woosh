<nav class="bg-quiz-light-primary dark:bg-quiz-dark-base-2" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-1 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                {{-- <div class="shrink-0">
                    <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div> --}}
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link href="/" :active="request()->is('/') ? 'page' : false">Beranda</x-nav-link>
                        <x-nav-link href="/materi" :active="request()->is('materi') ? 'page' : false">Materi</x-nav-link>
                        <x-nav-link href="/video" :active="request()->is('video') ? 'page' : false">Video</x-nav-link>
                        <x-nav-link href="/referensi" :active="request()->is('referensi') ? 'page' : false">Referensi</x-nav-link>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" @click="isOpen = !isOpen"
                                class="relative flex max-w-xs items-center rounded-full bg-transparent text-sm border-2 border-transparent hover:border-quiz-light-text dark:hover:border-quiz-dark-text"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <div class="shrink-0">
                                    <img class="size-10 rounded-full"
                                        src="{{ Vite::asset('resources/images/profile.png') }}" alt="Profile">
                                </div>
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <div class="px-1.5 pr-10 ml-3 text-left">
                                    <div class="text-base/5 font-medium text-quiz-light-text dark:text-quiz-dark-text"
                                        id="studentNameNavLg">Anonim</div>
                                    <div class="text-sm font-medium text-quiz-light-text dark:text-quiz-dark-text"
                                        id="studentClassNavLg">AnonimClass
                                    </div>
                                </div>
                            </button>
                        </div>

                        <!--
                        Dropdown menu, show/hide based on menu state.

                        Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                        Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75 transform"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
                            <button onclick="changeUser()" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Ubah data</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mr-1 w-max @min-xs:gap-5 flex md:hidden items-center">
                <div class="mt-3 space-y-1 px-1 pb-3 sm:px-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <x-nav-link href="/" :active="request()->is('/') ? 'page' : false">Beranda</x-nav-link>
                    <x-nav-link href="/materi" :active="request()->is('materi') ? 'page' : false">Materi</x-nav-link>
                    <x-nav-link href="/video" :active="request()->is('video') ? 'page' : false">Video</x-nav-link>
                    <x-nav-link href="/referensi" :active="request()->is('referensi') ? 'page' : false">Referensi</x-nav-link>
                </div>
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="h-3/4 relative inline-flex items-center justify-center rounded-md bg-quiz-light-button p-2 text-quiz-light-text hover:bg-quiz-light-button-hover hover:text-quiz-dark-base-2 dark:bg-quiz-dark-button dark:text-quiz-dark-text dark:hover:bg-quiz-dark-button-hover dark:hover:text-quiz-light-base focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="border-t pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="shrink-0">
                    <img class="size-10 rounded-full" src="{{ Vite::asset('resources/images/profile.png') }}"
                        alt="Profile">
                </div>
                <div class="ml-3">
                    <div class="text-base/5 font-medium text-quiz-light-text dark:text-quiz-dark-text"
                        id="studentNameNavMb">Anonim</div>
                    <div class="text-sm font-medium text-quiz-light-button-hover dark:text-quiz-dark-button-hover"
                        id="studentClassNavMb">AnonimClass
                    </div>
                </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <button onclick="changeUser()"
                    class="block rounded-md px-3 py-2 text-base font-medium text-quiz-light-text dark:text-quiz-dark-text dark:hover:bg-quiz-dark-button-hover dark:hover:text-quiz-light-base hover:bg-quiz-light-button-hover hover:text-quiz-dark-base-2">Ubah
                    data</button>
            </div>
        </div>
    </div>
</nav>
{{-- <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3"> --}}
