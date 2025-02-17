<x-layouts.app>
    <div class="mx-44">
        <p>name: {{ Auth::user()->name }}</p>
        <p>email: {{ Auth::user()->email }}</p>
        <p>Role: {{ Auth::user()->role }}</p>
    </div>
</x-layouts.app>