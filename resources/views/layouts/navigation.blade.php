<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <!-- Dashboard -->
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <!-- User Manage -->
                    <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                        {{ __('User Manage') }}
                    </x-nav-link>
                    <!-- Page Manage -->
                    <div x-data="{dropdownMenu: false}"
                        class="relative  inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 hover:text-gray-700  focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out z-50">
                        <!-- Dropdown toggle button -->
                        <button @click="dropdownMenu = ! dropdownMenu"
                            class="flex text-gray-500 items-center p-2 rounded-md">
                            <span class="mr-4">Page Manage</span>
                            <div class="">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <!-- Dropdown list -->
                        <div x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" x-show="dropdownMenu"
                            class="absolute left-3 top-9 py-2 mt-4 bg-white rounded-md shadow-xl w-48 ring-1 ring-black ring-opacity-5">
                            <a href="{{ route('home.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                Home
                            </a>
                            <a href="{{ route('room.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                Rooms
                            </a>
                            <a href="{{ route('blog.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                Blog
                            </a>
                            <a href="{{ route('team.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                Team
                            </a>
                            <a href="{{ route('gallery.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                Gallery
                            </a>
                            <a href="{{ route('contact.index') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
            @include('components.mailbox')
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="border-b">
                            <div class="text-sm text-gray-400 pl-4">
                                {{ __('Manage Account') }}
                            </div>
                            <x-dropdown-link :href="route('profile.index')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                        </div>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
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
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                {{ __('User Manage') }}
            </x-responsive-nav-link>
            <div x-data="{dropdownMenu: false}"
                class="relative  pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out z-50">
                <!-- Dropdown toggle button -->
                <button @click="dropdownMenu = ! dropdownMenu" class="flex text-gray-500 items-center p-2 rounded-md">
                    <span class="mr-4">Page Manage</span>
                    <div class="">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
                <!-- Dropdown list -->
                <div x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95" x-show="dropdownMenu"
                    class="absolute left-3 top-9 py-2 mt-4 bg-white rounded-md shadow-xl w-48 ring-1 ring-black ring-opacity-5">
                    <a href="{{ route('home.index') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                        Home
                    </a>
                    <a href="{{ route('room.index') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                        Rooms
                    </a>
                    <a href="{{ route('blog.index') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                        Blog
                    </a>
                    <a href="{{ route('team.index') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                        Team
                    </a>
                    <a href="{{ route('gallery.index') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                        Gallery
                    </a>
                    <a href="{{ route('contact.index') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">
                        Contact
                    </a>
                </div>
            </div>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.index')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
