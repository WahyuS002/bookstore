@extends('layouts.frontend')

@section('content')
<div class="mt-6 grid grid-cols-4 gap-4">
	@foreach ($books as $book)
	<a href="{{ route('book.show', $book->id) }}" class="p-3 rounded-lg border bg-white border-gray-200 hover:shadow-soft transition duration-300 ease-in-out">
		<img src="{{ asset('storage/' . $book->cover_image) }}" class="h-64 w-full object-cover rounded-lg" alt="">
		<div class="mt-3">
			<p class="font-semibold text-primary">{{ \Str::limit($book->title, 16) }}</p>
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
	</a>
	@endforeach
</div>
@endsection