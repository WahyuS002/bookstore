<div class="flex items-center justify-between">
    <h1 class="text-primary font-bold text-2xl">Book Store</h1>
    @guest
    <div class="space-x-3">
        <a href="{{ route('login') }}" class="rounded-md px-4 py-2 text-sm hover:bg-gray-100 transition duration-300 ease-in-out">Sign in</a>
        <a href="{{ route('register') }}" class="rounded-md bg-primary hover:bg-black transition duration-300 ease-in-out text-white px-4 py-2 text-sm">Sign up</a>
    </div>
    @endguest
    @auth
    <a href="{{ route('dashboard') }}" class="rounded-md bg-primary hover:bg-black transition duration-300 ease-in-out text-white px-4 py-2 text-sm">
        Dashboard
    </a>
    @endauth
</div>
@if (request()->is('book/*'))
<a href="{{ route('home') }}" class="mt-6 text-sm block text-primary hover:text-black transition duration-300 ease-in-out">
    < Kembali
</a>
@else
<div class="space-x-4 text-sm mt-4 px-5 py-2 rounded-lg border bg-white border-gray-200">
	<a href="{{ route('home') }}" class="{{ request()->is('/') ? 'font-semibold' : 'text-gray-400' }}">All</a>
	<a href="{{ route('books', 'closed') }}" class="{{ request()->is('books/closed') ? 'font-semibold' : 'text-gray-400' }}">Fixed Price</a>
	<a href="{{ route('books', 'open') }}" class="{{ request()->is('books/open') ? 'font-semibold' : 'text-gray-400' }}">Donation</a>
</div>
@endif