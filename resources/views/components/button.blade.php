@props([
    'color' => 'default',
    'href' => null,
    'type' => 'button',
    'icon' => '',
])

@php
    $baseClasses =
        'cursor-pointer inline-flex items-center justify-center font-semibold px-3 py-2 text-sm rounded-lg disabled:opacity-75 disabled:cursor-default gap-1';

    $colorClasses = match ($color) {
        'red' => 'bg-red-500 hover:bg-red-700 text-white',
        'outline' => 'border border-neutral-300 hover:bg-neutral-100 text-neutral-500 hover:text-neutral-900',
        'none' => '',
        default => 'bg-neutral-800 hover:bg-neutral-700 text-white border border-black/10',
    };

    $shadowClasses = match ($color) {
        'none' => '',
        'outline' => '',
        default => 'shadow-[inset_0px_1px_rgba(255,255,255,0.5)]',
    };

    $finalClasses = implode(' ', [$baseClasses, $colorClasses, $shadowClasses]);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $finalClasses]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" :disabled="loading" {{ $attributes->merge(['class' => $finalClasses]) }}>
        {{-- O spinner é mostrado quando 'loading' é true --}}
        <x-icon name="spinner" x-show="loading" class="animate-spin size-6" style="display: none;" />

        {{-- O conteúdo original é mostrado quando 'loading' é false --}}
        <span x-show="!loading" class="inline-flex items-center gap-1">
            {{ $slot }}
        </span>
    </button>
@endif
