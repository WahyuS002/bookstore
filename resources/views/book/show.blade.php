@extends('layouts.frontend')

@section('content')
<a href="{{ route('home') }}" class="mt-6 text-sm text-primary hover:text-black transition duration-300 ease-in-out inline-block">
    < Kembali
</a>
<div class="flex items-center mt-6">
    <img class="h-80 object-contain rounded-md" src="{{ asset('storage/' . $book->cover_image) }}" alt="">
    <div class="ml-4 w-full">
        <div class="flex items-center justify-between">
            <p class="text-primary font-semibold text-xl">{{ $book->title }}</p>
            <div class="flex items-center justify-between text-yellow-600">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
						<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
					</svg>
                </span>
                <span>
                    <span class="ml-2 font-medium text-sm">{{ $book->rating }}</span>
                </span>
            </div>
        </div>
        <div class="mt-3 text-gray-600 text-justify">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, neque recusandae! Inventore, eaque officiis laborum alias omnis totam quibusdam deleniti cumque, quos eos, molestias excepturi officia incidunt voluptatum molestiae repellat.</p>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quo facilis optio ut, molestias quam, at unde error laudantium fugiat laboriosam commodi in asperiores libero! Asperiores?</p>
        </div>
        <div class="flex items-center justify-between mt-3">
            <p class="text-lg font-medium text-primary">Rp. {{ number_format($book->price) }}</p>
            <a href="{{ route('book.checkout', $book->id) }}" class="border-2 border-primary text-primary px-4 py-2 rounded-md text-sm hover:bg-black hover:text-white transition duration-300 ease-in-out">Buy Now</a>
        </div>

    </div>
</div>
@endsection
