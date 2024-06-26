<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M512.3 462.6m-253.7 0a253.7 253.7 0 1 0 507.4 0 253.7 253.7 0 1 0-507.4 0Z" fill="#FFFFFF" /><path d="M638.2 869.3l-54.9-122.2c-22.9 5.7-46.7 8.6-70.9 8.6-28 0-55.4-3.9-81.6-11.5l-56.4 125.7 263.8-0.6z" fill="#E6E6E6" /><path d="M806 462.1c0-78.4-30.5-152.1-86-207.5s-129.1-86-207.5-86-152.1 30.5-207.5 86-86 129.1-86 207.5 30.5 152.1 86 207.5c25.9 25.9 55.8 46.4 88.3 60.8l-66.1 147.3c-3.2 7.1-2.6 15.3 1.7 21.8 4.2 6.5 11.4 10.4 19.2 10.4h0.1l319-0.8c3.7 0 7.2-1.1 10.2-2.8 9.8-4.6 14.2-16.3 9.7-26.3l-65.3-145.4c36.4-14.6 69.8-36.5 98.4-65.1 55.3-55.3 85.8-129 85.8-207.4zM638.2 869.3l-263.8 0.6 56.4-125.7c26.2 7.5 53.6 11.5 81.6 11.5 24.2 0 48-2.9 70.9-8.6l54.9 122.2zM512.5 715.7C372.7 715.7 259 601.9 259 462.1s113.7-253.5 253.5-253.5S766 322.3 766 462.1 652.3 715.7 512.5 715.7zM283.8 210c2.3 0 4.7-0.8 6.6-2.5 4.9-4.2 9.9-8.4 15-12.4 4.4-3.4 5.1-9.7 1.8-14-3.4-4.4-9.7-5.1-14-1.8-5.4 4.2-10.7 8.6-15.9 13.1-4.2 3.6-4.6 10-1 14.1 1.9 2.4 4.7 3.5 7.5 3.5zM235.9 250.9c1.9 1.5 4.1 2.2 6.3 2.2 2.9 0 5.8-1.3 7.8-3.7 4.1-5 8.3-10 12.7-14.7 3.7-4.1 3.4-10.4-0.7-14.1-4.1-3.7-10.4-3.4-14.1 0.7-4.6 5.1-9.1 10.3-13.4 15.6-3.5 4.3-2.9 10.6 1.4 14zM385.8 148.1c1.2 0 2.4-0.2 3.6-0.7 6-2.3 12.1-4.5 18.3-6.5 5.3-1.7 8.1-7.4 6.4-12.6s-7.4-8.1-12.6-6.4c-6.5 2.1-13 4.4-19.3 6.9-5.1 2-7.7 7.8-5.7 13 1.5 3.9 5.3 6.3 9.3 6.3zM503.1 124.4c3.1-0.1 6.3-0.1 9.4-0.1 3.3 0 6.7 0 10 0.1h0.3c5.4 0 9.8-4.3 10-9.7 0.2-5.5-4.2-10.1-9.7-10.3-3.5-0.1-7.1-0.2-10.6-0.2-3.3 0-6.7 0-10 0.1-5.5 0.2-9.9 4.8-9.7 10.3 0.1 5.6 4.7 10 10.3 9.8zM561.2 127.8c6.4 0.9 12.8 2 19.1 3.3 0.7 0.1 1.3 0.2 2 0.2 4.7 0 8.8-3.3 9.8-8 1.1-5.4-2.4-10.7-7.8-11.8-6.7-1.4-13.5-2.5-20.3-3.5-5.5-0.8-10.5 3-11.3 8.5s3 10.5 8.5 11.3zM443.2 131.2c0.7 0 1.3-0.1 2-0.2 6.3-1.3 12.8-2.4 19.1-3.3 5.5-0.8 9.3-5.8 8.5-11.3-0.8-5.5-5.8-9.3-11.3-8.5-6.8 1-13.6 2.1-20.3 3.5-5.4 1.1-8.9 6.4-7.8 11.8 1 4.7 5.2 8 9.8 8zM332.1 174.7c1.8 0 3.6-0.5 5.2-1.5 5.5-3.3 11.2-6.6 16.9-9.6 4.9-2.6 6.7-8.6 4.1-13.5s-8.6-6.7-13.5-4.1c-6 3.2-12 6.6-17.9 10.2-4.7 2.9-6.2 9-3.4 13.7 2 3 5.3 4.8 8.6 4.8zM720.2 195.6c5.1 4 10.1 8.1 15 12.4 1.9 1.7 4.2 2.5 6.6 2.5 2.8 0 5.5-1.2 7.5-3.4 3.6-4.2 3.2-10.5-0.9-14.1-5.1-4.5-10.5-8.9-15.8-13.1-4.4-3.4-10.6-2.6-14 1.7-3.6 4.4-2.8 10.6 1.6 14zM671.4 163.9c5.7 3 11.4 6.3 16.9 9.6 1.6 1 3.4 1.5 5.2 1.5 3.4 0 6.7-1.7 8.5-4.8 2.9-4.7 1.4-10.9-3.3-13.7-5.8-3.6-11.8-7-17.9-10.2-4.9-2.6-10.9-0.8-13.5 4.1-2.6 4.8-0.8 10.9 4.1 13.5zM224.2 267.2c-4.7-3-10.8-1.6-13.8 3.1-3.7 5.8-7.2 11.7-10.5 17.7-2.7 4.8-1 10.9 3.9 13.6 1.5 0.9 3.2 1.3 4.9 1.3 3.5 0 6.9-1.8 8.7-5.1 3.1-5.6 6.5-11.2 10-16.7 2.8-4.8 1.5-11-3.2-13.9zM617.8 141c6.1 2 12.3 4.2 18.3 6.6 1.2 0.5 2.4 0.7 3.7 0.7 4 0 7.8-2.4 9.3-6.3 2-5.1-0.5-10.9-5.6-13-6.4-2.5-12.9-4.8-19.4-7-5.2-1.7-10.9 1.1-12.6 6.4-1.8 5.3 1.1 10.9 6.3 12.6zM775.5 250c2 2.4 4.9 3.7 7.8 3.7 2.2 0 4.4-0.7 6.3-2.2 4.3-3.5 5-9.8 1.5-14.1-4.3-5.3-8.8-10.6-13.4-15.6-3.7-4.1-10-4.4-14.1-0.7s-4.4 10-0.7 14.1c4.3 4.8 8.5 9.8 12.6 14.8zM825.5 288.5c-3.3-6-6.8-11.9-10.5-17.7-3-4.7-9.1-6.1-13.8-3.1-4.7 3-6.1 9.1-3.1 13.8 3.5 5.5 6.8 11.1 9.9 16.7 1.8 3.3 5.2 5.1 8.7 5.1 1.6 0 3.3-0.4 4.8-1.3 4.9-2.6 6.7-8.7 4-13.5zM199.5 334.8c0.3-0.7 0.6-1.5 0.9-2.2 2.1-5.1-0.3-11-5.4-13.1-5.1-2.1-11 0.3-13.1 5.4-0.4 0.9-0.8 1.9-1.1 2.8-7 1.2-13.2 6-15.7 13.1-13.6 38.9-20.5 79.7-20.5 121.3 0 35.7 5.1 71.1 15.2 105 2.6 8.7 10.5 14.3 19.2 14.3 1.9 0 3.8-0.3 5.7-0.8 10.6-3.1 16.6-14.3 13.5-24.9-9-30.2-13.6-61.7-13.6-93.6 0-37.1 6.1-73.4 18.2-108.1 2.5-6.8 0.9-14-3.3-19.2zM859.9 340.9c-2.5-7.2-8.7-12-15.7-13.1-0.3-0.7-0.6-1.5-0.9-2.2-2.1-5.1-8-7.5-13.1-5.4-5.1 2.1-7.5 8-5.4 13.1 0.2 0.6 0.4 1.1 0.7 1.7-4.2 5.2-5.8 12.4-3.4 19.2 12.1 34.6 18.2 71 18.2 108.1 0 31.9-4.6 63.4-13.6 93.6-3.1 10.6 2.9 21.7 13.5 24.9 1.9 0.6 3.8 0.8 5.7 0.8 8.6 0 16.6-5.6 19.2-14.3 10.1-34 15.2-69.3 15.2-105 0.1-41.7-6.8-82.5-20.4-121.4z" fill="#005BFF" /><path d="M512.5 254.6c-114.5 0-207.6 93.1-207.6 207.6S398 669.8 512.5 669.8s207.6-93.1 207.6-207.6S627 254.6 512.5 254.6z m0 395.1c-103.4 0-187.6-84.1-187.6-187.6 0-103.4 84.1-187.6 187.6-187.6 103.4 0 187.6 84.1 187.6 187.6s-84.2 187.6-187.6 187.6z" fill="#06F3FF" /><path d="M595.9 477.5l-6.3 13-23.9-69.8c-1-3.1-4-5.1-7.2-5.1h-0.1c-3.3 0.1-6.1 2.2-7.1 5.4l-40.6 132.6-18.2-233.8c-0.3-3.8-3.3-6.8-7.1-7-3.5-0.6-7.2 2.4-7.9 6.1l-34 173.1-15.3-27.8c-1-1.8-2.8-3.2-4.8-3.7s-4.2-0.1-6 1l-36.5 24.2-6.5-1.7c-4.1-1.2-8.2 1.3-9.3 5.4-1.1 4 1.3 8.2 5.4 9.3l9.7 2.6c2.2 0.6 4.3 0.2 6.1-1l32.6-21.6 21.4 38.8c1.5 2.8 4.6 4.3 7.8 3.8 3.1-0.5 5.6-2.9 6.3-6L481.8 376l17 218.5c0.3 3.6 3.1 6.5 6.7 7 0.3 0.1 0.6 0.1 0.8 0.1 3.3 0 6.3-2.2 7.2-5.4l45.4-148.4 22.5 65.2c1 2.9 3.6 4.9 6.7 5.1 3 0.1 5.9-1.6 7.2-4.3l12-25.2 51.7 2.6c4.4 0.6 7.7-3 7.9-7.2s-3-7.7-7.2-7.9l-56.7-2.9c-2.9-0.1-5.8 1.6-7.1 4.3z" fill="#005BFF" /></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('site')" :active="request()->routeIs('site')">
                        {{ __('Site') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pages')" :active="request()->routeIs('pages')">
                        {{ __('Pages') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contents')" :active="request()->routeIs('contents')">
                        {{ __('Contents') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contents')" :active="request()->routeIs('menus')">
                        {{ __('Menus') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contents')" :active="request()->routeIs('posts')">
                        {{ __('Posts') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contents')" :active="request()->routeIs('post_categories')">
                        {{ __('Post categories') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
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
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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

            <x-responsive-nav-link :href="route('pages')" :active="request()->routeIs('pages')">
                {{ __('Pages') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('contents')" :active="request()->routeIs('contents')">
                {{ __('Contents') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
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
