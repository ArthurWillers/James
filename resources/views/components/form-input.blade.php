@props([
    'label' => '',
    'name' => '',
    'type' => 'text',
    'value' => '',
    'placeholder' => '',
    'viewable' => false,
    'labelClass' => '',
    'numeric' => false,
])

@php
    $baseClasses =
        'w-full border appearance-none text-sm rounded-xl block py-2.5 px-4 bg-white disabled:shadow-none shadow-xs focus:shadow-lg text-neutral-700 disabled:text-neutral-400 placeholder-neutral-400 disabled:placeholder-neutral-400/70 outline-none focus:border-neutral-900 focus:ring-2 focus:ring-neutral-900/40 transition-colors duration-300';
    $errorClasses = $errors->has($name)
        ? 'border-red-500 focus:border-red-500 focus:ring-red-400/30'
        : 'border-neutral-200';
    $classes = $baseClasses . ' ' . $errorClasses;
@endphp

<div class="grid w-full items-center gap-1.5">

    <label for="{{ $name }}"
        class="inline-flex items-center text-sm font-semibold text-neutral-700 {{ $labelClass }}">
        {{ $label }}
    </label>

    <div class="relative" @if ($viewable) x-data="{ show: false }" @endif>
        <input
            @if ($viewable) :type="show ? 'text' : 'password'"
            @else
            type="{{ $numeric ? 'text' : $type }}" @endif
            id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
            value="{{ $value }}" {{ $attributes->merge(['class' => $classes]) }}
            @if ($numeric) x-data
                @input="$event.target.value = $event.target.value.replace(/[^0-9.,]/g, '')"
                inputmode="decimal" @endif />

        @if ($viewable)
            <div class="absolute top-0 bottom-0 flex items-center gap-x-1.5 pe-3 end-0 text-xs text-neutral-400">
                <button type="button" x-on:click="show = !show"
                    class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -ms-1.5 -me-1.5 bg-transparent hover:bg-neutral-800/5 text-neutral-500 hover:text-neutral-800 transition-colors duration-300 cursor-pointer">
                    {{-- Ícone de "escondido" (olho cortado) --}}
                    <x-icon name="eye-slash" x-show="!show" class="size-4" />

                    {{-- Ícone de "visível" (olho aberto) --}}
                    <x-icon name="eye" x-show="show" class="size-4" style="display: none;" />
                </button>
            </div>
        @endif
    </div>

    <x-form-error name="{{ $name }}" />
</div>
