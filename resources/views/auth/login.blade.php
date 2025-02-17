<x-layouts.app>
    <div class="flex justify-between mt-20 mx-44">
        <div class="flex flex-col mt-16">
            <h1 class="text-3xl font-bold text-center">Login Akun</h1>
            <p class="mt-1 mb-10 text-sm text-center">Login sekarang dan dapatkan diskon sewa kendaraan sebesar 50%</p>

            {{-- Session --}}
            @if (session('success'))
                <div class="w-full p-3 mb-3 font-bold text-white bg-green-600 rounded-lg">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            @if (session('error'))    
                <div class="w-full p-3 mb-3 font-bold text-white bg-red-600 rounded-lg">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            <form action="{{ route('auth.login.store') }}" method="POST">
                @csrf
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email"
                    class="w-full p-2 mt-3 mb-3 border border-green-500 rounded" placeholder="Email Anda..">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password"
                    class="w-full p-2 mt-3 mb-3 border border-green-500 rounded" placeholder="Password Anda..">
                <button type="submit" class="w-full p-2 mt-2 text-white bg-green-600 rounded">Sign In</button>
            </form>
                <p class="mt-3 text-sm text-center">Don't have an account? <a href="{{ route('auth.register') }}" class="text-blue-600">Register Here</a></p>
        </div>
        <div>
            <img src="{{ asset('assets/images/registerPage/Register-Image.png') }}" alt="Register Image"
                class="w-full h-auto">
        </div>
    </div>
</x-layouts.app>
