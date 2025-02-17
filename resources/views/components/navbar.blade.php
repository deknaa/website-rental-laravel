<nav class="sticky z-[10000] bg-white top-0 py-10" data-aos="fade-down" data-aos-duration="1500">
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
            <a href="#"
                class="px-5 py-3 transition duration-300 ease-in-out border border-green-600 rounded outline-4 hover:bg-green-700 hover:text-white">Sign
                Up</a>
        </div>
    </div>
</nav>

@vite(['resources/js/navbar.js']);