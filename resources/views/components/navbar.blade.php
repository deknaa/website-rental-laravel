<nav class="sticky z-[10000] bg-white top-0 py-10" data-aos="fade-down" data-aos-duration="1500">
    @auth()
        @if (auth()->user()->role == 'user')
            <div class="flex items-center justify-between mx-44">
                <div class="logo">
                    <h1>{{ config('app.name') }}</h1>
                </div>
                <div>
                    <ul class="flex gap-7">
                        <li><a href="#" class="hover:underline">Home</a></li>
                        <li><a href="#" class="hover:underline">Our Services</a></li>
                        <li><a href="#" class="hover:underline">Testimony</a></li>
                        <li><a href="#" class="hover:underline">Products</a></li>
                        <li><a href="#" class="hover:underline">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <a href="{{ route('auth.logout') }}"
                        class="px-5 py-3 transition duration-300 ease-in-out border border-green-600 rounded outline-4 hover:bg-green-700 hover:text-white">Logout</a>
                </div>
            </div>
        @elseif(auth()->user()->role == 'admin')
            <div class="flex items-center justify-between mx-44">
                <div class="logo">
                    <h1>{{ config('app.name') }}</h1>
                </div>
                <div>
                    <ul class="flex gap-7">
                        <li>
                            <a href="{{ route('dashboard.admin') }}" @if (Route::current()->getName() == 'dashboard.admin')
                             class="underline hover:underline" 
                             @else
                             class="hover:underline"
                             @endif>
                             Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('vehicles.index') }}" @if (Route::currentRouteName() == 'vehicles.index')
                             class="underline hover:underline" 
                             @else
                             class="hover:underline"
                             @endif>
                             Products
                            </a>
                        </li>
                        <li><a href="#" class="hover:underline">Testimony</a></li>
                        <li><a href="#" class="hover:underline">Products</a></li>
                        <li><a href="#" class="hover:underline">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <a href="{{ route('auth.register') }}"
                        class="px-5 py-3 transition duration-300 ease-in-out border border-green-600 rounded outline-4 hover:bg-green-700 hover:text-white">Logout</a>
                </div>
            </div>
        @endif
    @else
        <div class="flex items-center justify-between mx-44">
            <div class="logo">
                <h1>{{ config('app.name') }}</h1>
            </div>
            <div>
                <ul class="flex gap-7">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">Our Services</a></li>
                    <li><a href="#" class="hover:underline">Testimony</a></li>
                    <li><a href="#" class="hover:underline">Products</a></li>
                    <li><a href="#" class="hover:underline">About Us</a></li>
                </ul>
            </div>
            <div>
                <a href="{{ route('auth.register') }}"
                    class="px-5 py-3 transition duration-300 ease-in-out border border-green-600 rounded outline-4 hover:bg-green-700 hover:text-white">Sign
                    Up</a>
            </div>
        </div>
    @endauth
</nav>

@vite(['resources/js/navbar.js'])
