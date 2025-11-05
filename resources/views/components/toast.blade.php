@if (session()->has('toast'))
    @php
        $toast = session('toast');
        $type = $toast['type'] ?? 'info';
        $message = $toast['message'] ?? '';
        $progressColor = match ($type) {
            'success' => 'bg-green-600',
            'error' => 'bg-red-600',
            'warning' => 'bg-yellow-600',
            default => 'bg-blue-600',
        };
    @endphp

    <div class="fixed top-0 inset-x-0 flex items-start justify-center lg:justify-end p-4 z-50 pointer-events-none">

        <div x-data="{ show: false, progress: 100 }" x-init="$nextTick(() => {
            show = true;
            const interval = setInterval(() => {
                progress -= 1;
                if (progress <= 0) {
                    clearInterval(interval);
                    show = false;
                }
            }, 50);
        });"x-show="show" x-cloak
            x-transition:enter="transition ease-out duration-300 transform"
            x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition ease-in duration-200 transform"
            x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="translate-x-full opacity-0"
            class="w-full max-w-sm rounded-lg shadow-lg border border-neutral-300 bg-white overflow-hidden pointer-events-auto">
            <div class="flex items-center gap-4 p-4">
                {{-- Ícone --}}
                @if ($type === 'success')
                    <div class="flex items-center justify-center w-8 h-8 bg-green-100 rounded-full shrink-0">
                        <x-icon name="check" class="w-5 h-5 text-green-600" />
                    </div>
                @elseif ($type === 'error')
                    <div class="flex items-center justify-center w-8 h-8 bg-red-100 rounded-full shrink-0">
                        <x-icon name="x-solid" class="w-5 h-5 text-red-600" />
                    </div>
                @elseif ($type === 'warning')
                    <div class="flex items-center justify-center w-8 h-8 bg-yellow-100 rounded-full shrink-0">
                        <x-icon name="exclamation-triangle" class="w-5 h-5 text-yellow-600" />
                    </div>
                @else
                    <div class="flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full shrink-0">
                        <x-icon name="information-circle" class="w-5 h-5 text-blue-600" />
                    </div>
                @endif
                {{-- Mensagem e Botão de Fechar --}}
                <div class="flex-1">{{ $message }}</div>
                <button class="cursor-pointer shrink-0" @click="show = false">
                    <x-icon name="x-solid" class="size-6" />
                </button>
            </div>

            {{-- Barra de Progresso --}}
            <div class="w-full bg-neutral-200 h-1">
                <div class="{{ $progressColor }} h-1 " :style="`width: ${progress}%`"></div>
            </div>
        </div>
    </div>
@endif
