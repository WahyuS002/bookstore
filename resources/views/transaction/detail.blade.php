@extends('layouts.frontend')

@section('content')
<div class="grid grid-cols-5 mt-6 gap-4">
    <div class="col-span-3">
        <div class="p-4 rounded-lg bg-white shadow-soft">
            <div class="flex items-center justify-between">
                <p class="text-xs text-gray-400 uppercase tracking-widest font-semibold">Transaction Detail</p>
                <p class="text-sm text-primary font-medium">#{{ $detail->merchant_ref }}</p>
            </div>
            <div class="mt-3">
                <h3 class="text-3xl font-medium text-primary">Rp. {{ number_format($detail->amount) }}</h3>
                {{-- <div class="text-xs px-2 py-1 rounded-full bg-green-200 inline-block mt-4    text-green-600 font-semibold">Paid</div> --}}
                <div class="text-xs px-2 py-1 rounded-full bg-red-200 inline-block mt-4  text-red-600 font-semibold">{{ $detail->status }}</div>
            </div>
        </div>
    </div>
    <div class="col-span-2">
        <div class="p-4 rounded-lg bg-white shadow-soft">
            <p class="text-xs text-gray-400 uppercase tracking-widest font-semibold">Instruction</p>
            @foreach ($detail->instructions as $instruction)
            <div tabindex="0" class="collapse mt-3">
                <div class="collapse-title font-medium">
                    <div class="flex items-center justify-between cursor-pointer">
                        <span>
                            {{ $instruction->title }}
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="collapse-content">
                    <ul>
                        @foreach ($instruction->steps as $step)
                            <li class="text-sm leading-tight">{{ $loop->iteration }} . {!! $step !!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection