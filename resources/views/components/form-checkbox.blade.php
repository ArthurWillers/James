@props([
    'label' => '',
    'name' => '',
])

<div>
    <label for="{{ $name }}" class="flex items-center gap-x-2 cursor-pointer">
        <input id="{{ $name }}" name="{{ $name }}" type="checkbox"
            {{ $attributes->merge(['class' => 'peer sr-only']) }} />

        {{-- Checkbox Visual --}}
        <div
            class="flex h-4.5 w-4.5 shrink-0 items-center justify-center rounded-sm border
                    border-neutral-300
                    bg-white
                    shadow-xs transition-colors duration-200
                    peer-checked:border-neutral-900
                    peer-checked:bg-neutral-900
                    text-transparent peer-checked:text-white">

            <x-icon name="check" class="size-4" />
        </div>

        @if ($label)
            <span class="text-sm font-medium text-neutral-700">
                {{ $label }}
            </span>
        @endif
    </label>

    {{-- Mensagem de Erro --}}
    <x-form-error :name="$name" class="mt-3!" />
</div>
