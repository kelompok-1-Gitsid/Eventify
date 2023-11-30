<nav class="w-full fixed z-20 p-2 top-0 start-0 bg-white font-plusJakarta shadow-md">
    <div class="max-w-screen flex flex-wrap justify-between mx-[2rem] lg:mx-[8rem] p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"> --}}
            <span class="self-center text-xl font-semibold whitespace-nowrap">Eventify</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-bold border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ url('/')}}"
                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ url('/product')}}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Product</a>
                </li>
                <li>
                    <a href="{{ url('/about-us')}}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About Us</a>
                </li>
            </ul>
            <div class="flex items-end">
                @if (Route::has('login'))
                    <div class="md:fixed md:top-0 md:right-0 p-5 text-right z-10">
                        @auth
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="64">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div class="-mt-3 relative">
                                                <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="" class="w-10 h-10">
                                                <span class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white rounded-full"></span>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <div class="w-full flex flex-col items-start  px-4 py-4 font-thin text-slate-900">
                                        <div class="text-sm my-2">
                                            <p>Name: <span>{{ Auth::user()->name}}</span></p>
                                        </div>
                                        <div class="text-sm my-2">
                                            <p>Email: <span>{{ Auth::user()->email}}</span></p>
                                        </div>
                                        <div class="text-sm my-2">
                                            <p>Address: <span>{{ Auth::user()->address}}</span></p>
                                        </div>
                                    </div>
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
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="md:hidden">
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
                        @else
                        <button type="button" data-modal-target="authetication-modal" class="bg-slate-300 text-slate-900 hover:bg-cyan hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center">
                            <a href="{{ route('login') }}" class="font-medium">Log in</a>
                        </button>
                            @if (Route::has('register'))
                            <button type="button" data-modal-target="authetication-modal" class="ml-2 bg-blue-700 text-slate-50 hover:text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center">
                                <a href="{{ route('register') }}" class="font-medium">Register</a>
                            </button>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
