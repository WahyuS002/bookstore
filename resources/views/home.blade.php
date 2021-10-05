<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased font-poppins bg-gray-50">
	<div class="flex justify-center">
		<div class="w-[60%] my-12">
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
			<div class="space-x-4 text-sm mt-4 px-5 py-2 rounded-lg border bg-white border-gray-200">
				<span class="font-semibold">Fixed Price</span>
				<span class="text-gray-400">Donation</span>
			</div>
			<div class="mt-6 grid grid-cols-4 gap-4">
				@foreach ($books as $book)
				<div class="p-3 rounded-lg border bg-white border-gray-200 hover:shadow-soft transition duration-300 ease-in-out cursor-pointer">
					<img src="{{ asset('storage/' . $book->cover_image) }}" class="h-64 w-full object-cover rounded-lg" alt="">
					<div class="mt-3">
						<p class="font-semibold text-primary">{{ $book->title }}</p>
						<p class="text-xs text-gray-400 uppercase">{{ $book->category }}</p>
					</div>
					<div class="mt-4 flex justify-between items-center">
						<div class="flex items-center text-yellow-600">
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
								</svg>
							</span>
							<span class="ml-2 font-medium text-sm">{{ $book->rating }}</span>
						</div>
						<p class="text-sm text-primary font-semibold">{{ $book->price / 1000 . 'K' }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</body>
</html>
