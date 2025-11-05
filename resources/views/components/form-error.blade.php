@props(['name'])

@error($name)
    <div {{ $attributes->merge(['class' => 'flex items-center gap-x-2 text-sm text-red-500 mt-1.5 animate-shake']) }}>
        {{-- Ícone de Erro --}}
        <x-icon name="exclamation-triangle-solid" class="size-5 shrink-0" />

        {{-- Mensagem de Erro --}}
        <span class="font-semibold wrap-break-word">{{ $message }}</span>
    </div>
@enderror
