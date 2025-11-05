<x-layouts.base>
    <div class="flex min-h-svh flex-col">
        <div class="bg-background flex flex-1 flex-col items-center justify-center gap-6 p-6 md:p-10">
            <div class="flex w-full max-w-sm flex-col gap-2">
                <a href="{{ route('welcome') }}" class="flex flex-col items-center gap-2 font-medium">
                    <h1 class="text-4xl font-old-london text-neutral-900">James</h1>
                </a>
                <div class="flex flex-col gap-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <x-guest-footer />
    </div>
</x-layouts.base>
