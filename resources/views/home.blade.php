@extends('layouts.app')

@section('title', 'BTA Systems — Tworzymy narzędzia, które pracują za Ciebie')
@section('meta_description', 'BTA Systems to software house specjalizujący się w rozwiązaniach AI dla biznesu. Tworzymy inteligentne narzędzia automatyzacji.')

@section('content')

    {{-- Hero Section --}}
    <section class="min-h-screen flex flex-col justify-center items-center px-6 relative">
        <div class="max-w-3xl mx-auto text-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/BTA_logo.png') }}" alt="BTA Systems" class="h-32 md:h-48 mx-auto mb-8">
            </a>

            <h1 class="text-3xl md:text-4xl font-bold text-brand-gray leading-tight mb-6">
                Tworzymy narzędzia,<br>
                które pracują za Ciebie
            </h1>

            <p class="text-lg md:text-xl text-brand-gray-light font-light max-w-xl mx-auto">
                Software house specjalizujący się w rozwiązaniach AI dla biznesu
            </p>
        </div>

        {{-- Scroll indicator --}}
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    {{-- Product Section — Doni.ai --}}
    <section class="py-24 md:py-32 px-6 border-t border-gray-100">
        <div class="max-w-3xl mx-auto">
            <p class="text-sm font-medium tracking-widest text-brand-gray-light uppercase mb-6">Co tworzymy</p>

            <img src="{{ asset('assets/Doni_logo.png') }}" alt="Doni.ai" class="h-24 md:h-32 mb-8">

            <p class="text-lg text-brand-gray-light leading-relaxed mb-8 max-w-2xl">
                Doni.ai to inteligentny asystent, który wykonuje zadania w Twoich aplikacjach webowych.
                Wystarczy rozmowa — bez konfiguracji, bez schematów. Oddeleguj to, czego nie da się
                zautomatyzować tradycyjnie.
            </p>

            <a href="https://doni.ai" target="_blank" rel="noopener"
                class="inline-flex items-center gap-2 text-brand-red font-medium hover:text-brand-red-dark transition-colors group">
                Poznaj Doni.ai
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="py-24 md:py-32 px-6 border-t border-gray-100">
        <div class="max-w-3xl mx-auto">
            <p class="text-sm font-medium tracking-widest text-brand-gray-light uppercase mb-8">Zespół założycielski</p>

            <div class="grid md:grid-cols-2 gap-8">

                {{-- Marcin Chmieliński --}}
                <div class="border border-gray-100 rounded-lg p-8 hover:border-gray-200 transition-colors">
                    <div
                        class="w-20 h-20 rounded-full bg-brand-gray flex items-center justify-center text-white text-xl font-semibold mb-6">
                        MC
                    </div>
                    <h3 class="text-xl font-semibold text-brand-gray mb-1">Marcin Chmieliński</h3>
                    <p class="text-sm text-brand-gray-light mb-3">Cofounder</p>
                    <p class="text-sm text-brand-gray-light mb-6">15+ lat w IT, strateg produktowy</p>
                    <a href="{{ route('team.marcin-chmielinski') }}"
                        class="inline-flex items-center gap-2 text-sm text-brand-red font-medium hover:text-brand-red-dark transition-colors group">
                        Zobacz profil
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- Marcin Wesołowski --}}
                <div class="border border-gray-100 rounded-lg p-8 hover:border-gray-200 transition-colors">
                    <div
                        class="w-20 h-20 rounded-full bg-brand-red flex items-center justify-center text-white text-xl font-semibold mb-6">
                        MW
                    </div>
                    <h3 class="text-xl font-semibold text-brand-gray mb-1">Marcin Wesołowski</h3>
                    <p class="text-sm text-brand-gray-light mb-3">Cofounder</p>
                    <p class="text-sm text-brand-gray-light mb-6">Architekt rozwiązań, pasjonat AI</p>
                    <a href="{{ route('team.marcin-wesolowski') }}"
                        class="inline-flex items-center gap-2 text-sm text-brand-red font-medium hover:text-brand-red-dark transition-colors group">
                        Zobacz profil
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="border-t border-gray-100 py-16 px-6">
        <div class="max-w-3xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between gap-8">
                <div>
                    <img src="{{ asset('assets/BTA_logo.png') }}" alt="BTA Systems" class="h-8 mb-4">
                    <p class="text-sm text-brand-gray-light leading-relaxed">
                        BTA Systems Sp. z o.o.<br>
                        ul. Przykładowa 10<br>
                        00-001 Warszawa
                    </p>
                </div>

                <div class="text-sm text-brand-gray-light space-y-2">
                    <p>
                        <a href="mailto:kontakt@bta.systems"
                            class="hover:text-brand-gray transition-colors">kontakt@bta.systems</a>
                    </p>
                    <p>
                        <a href="https://linkedin.com/company/" target="_blank" rel="noopener"
                            class="hover:text-brand-gray transition-colors inline-flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                            LinkedIn
                        </a>
                    </p>
                    <p>
                        <a href="{{ route('privacy') }}" class="hover:text-brand-gray transition-colors">Polityka
                            prywatności</a>
                    </p>
                </div>
            </div>

            <div class="mt-12 pt-6 border-t border-gray-100 text-xs text-gray-400">
                &copy; {{ date('Y') }} BTA Systems Sp. z o.o. Wszelkie prawa zastrzeżone.
            </div>
        </div>
    </footer>

@endsection