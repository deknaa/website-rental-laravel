<x-layouts.app>
    <div class="flex justify-between mt-20 mx-44">
        <div class="flex flex-col mt-16">
            <h1 class="text-3xl font-bold text-center">Daftar Akun</h1>
            <p class="mt-1 mb-10 text-sm text-center">Daftar sekarang dan dapatkan diskon sewa kendaraan sebesar 50%</p>
            <form action="{{ route('auth.register.store') }}" method="POST">
                @csrf
                <label for="name">Nama Lengkap</label><br>
                <input type="text" name="name" id="name"
                    class="w-full p-2 mt-3 mb-3 border border-green-500 rounded" placeholder="Nama Lengkap..">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email"
                    class="w-full p-2 mt-3 mb-3 border border-green-500 rounded" placeholder="Email Anda..">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password"
                    class="w-full p-2 mt-3 mb-3 border border-green-500 rounded" placeholder="Password Anda..">
                <button type="submit" class="w-full p-2 mt-2 text-white bg-green-600 rounded">Register</button>
                <p class="mt-3 text-sm text-center">Sudah Punya Akun? <a href="{{ route('auth.login') }}" class="text-green-600">Login</a></p>
            </form>
        </div>
        <div>
            <img src="{{ asset('assets/images/registerPage/Register-Image.png') }}" alt="Register Image"
                class="w-full h-auto">
        </div>
    </div>
</x-layouts.app>
