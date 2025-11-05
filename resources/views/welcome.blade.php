<x-layouts.base>
    <div class="min-h-screen bg-neutral-50">
        {{-- Navbar --}}
        <nav class="border-b bg-white/80 backdrop-blur-sm sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-end items-center h-16">
                    <div class="flex items-center gap-4">
                        <x-button href="{{ route('login') }}" color="outline">
                            Login
                        </x-button>
                        <x-button href="{{ route('register') }}">
                            Registrar
                        </x-button>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Hero Section --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-6xl lg:text-8xl font-old-london text-neutral-900 mb-6 animate-[fade-in_0.8s_ease-out]">
                    James
                </h1>
                <p
                    class="text-2xl lg:text-3xl text-neutral-700 font-medium mb-4 animate-[fade-in_0.8s_ease-out_0.1s_both]">
                    Seu assistente pessoal para correção de provas
                </p>
                <p
                    class="text-lg lg:text-xl text-neutral-600 mb-8 max-w-2xl mx-auto animate-[fade-in_0.8s_ease-out_0.2s_both]">
                    Crie, aplique e corrija provas de múltipla escolha em minutos, não em horas. Foque no ensino,
                    deixe o trabalho repetitivo com o James.
                </p>
                <div class="animate-[fade-in_0.8s_ease-out_0.3s_both]">
                    <x-button href="{{ route('register') }}"
                        class="text-lg px-8 py-4 hover:scale-105 transition-all duration-300">
                        Comece a usar gratuitamente
                    </x-button>
                </div>
            </div>
        </section>

        {{-- Como Funciona --}}
        <section class="bg-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2
                    class="text-4xl font-bold text-center text-neutral-900 mb-16 animate-[fade-in_0.8s_ease-out_0.4s_both]">
                    Como funciona
                </h2>
                <div class="grid md:grid-cols-3 gap-12">
                    {{-- Passo 1 --}}
                    <div class="text-center group animate-[fade-in_0.8s_ease-out_0.5s_both]">
                        <div
                            class="w-16 h-16 bg-neutral-900 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                            1
                        </div>
                        <h3
                            class="text-xl font-semibold text-neutral-900 mb-3 group-hover:text-neutral-700 transition-colors">
                            Crie</h3>
                        <p class="text-neutral-600">
                            Cadastre suas questões e monte provas em segundos.
                        </p>
                    </div>

                    {{-- Passo 2 --}}
                    <div class="text-center group animate-[fade-in_0.8s_ease-out_0.6s_both]">
                        <div
                            class="w-16 h-16 bg-neutral-900 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                            2
                        </div>
                        <h3
                            class="text-xl font-semibold text-neutral-900 mb-3 group-hover:text-neutral-700 transition-colors">
                            Aplique</h3>
                        <p class="text-neutral-600">
                            Gere e imprima os cartões-resposta padronizados para seus alunos.
                        </p>
                    </div>

                    {{-- Passo 3 --}}
                    <div class="text-center group animate-[fade-in_0.8s_ease-out_0.7s_both]">
                        <div
                            class="w-16 h-16 bg-neutral-900 text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 group-hover:scale-110 transition-all duration-300">
                            3
                        </div>
                        <h3
                            class="text-xl font-semibold text-neutral-900 mb-3 group-hover:text-neutral-700 transition-colors">
                            Corrija</h3>
                        <p class="text-neutral-600">
                            Digitalize os gabaritos com a câmera do seu celular. James faz a correção e gera as notas
                            instantaneamente.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Por que usar o James --}}
        <section class="py-20 bg-neutral-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2
                    class="text-4xl font-bold text-center text-neutral-900 mb-16 animate-[fade-in_0.8s_ease-out_0.8s_both]">
                    Por que usar o James?
                </h2>
                <div class="grid md:grid-cols-3 gap-8">
                    {{-- Economize Tempo --}}
                    <x-card
                        class="hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group animate-[fade-in_0.8s_ease-out_0.9s_both]">
                        <div
                            class="w-12 h-12 bg-neutral-900 text-white rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <x-icon name="clock" class="w-6 h-6" />
                        </div>
                        <h3
                            class="text-xl font-semibold text-neutral-900 mb-3 group-hover:text-neutral-700 transition-colors">
                            Economize Tempo</h3>
                        <p class="text-neutral-600">
                            Chega de passar o fim de semana corrigindo pilhas de provas.
                        </p>
                    </x-card>

                    {{-- Software Livre --}}
                    <x-card
                        class="hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group animate-[fade-in_0.8s_ease-out_1s_both]">
                        <div
                            class="w-12 h-12 bg-neutral-900 text-white rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <x-icon name="check-badge" class="w-6 h-6" />
                        </div>
                        <h3
                            class="text-xl font-semibold text-neutral-900 mb-3 group-hover:text-neutral-700 transition-colors">
                            Software Livre</h3>
                        <p class="text-neutral-600">
                            Código aberto sob licença GPL 3.0. Use, modifique e distribua livremente, sem custos ou
                            restrições.
                        </p>
                    </x-card>

                    {{-- Análise de Dados --}}
                    <x-card
                        class="hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group animate-[fade-in_0.8s_ease-out_1.1s_both]">
                        <div
                            class="w-12 h-12 bg-neutral-900 text-white rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <x-icon name="chart-bar" class="w-6 h-6" />
                        </div>
                        <h3
                            class="text-xl font-semibold text-neutral-900 mb-3 group-hover:text-neutral-700 transition-colors">
                            Análise de Dados</h3>
                        <p class="text-neutral-600">
                            Veja estatísticas de acerto por questão e entenda onde sua turma tem mais dificuldade.
                        </p>
                    </x-card>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <x-guest-footer />
    </div>
</x-layouts.base>
