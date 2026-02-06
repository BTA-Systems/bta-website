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
                    <img src="{{ asset('assets/team/marcin-chmielinski.jpg') }}" alt="Marcin Chmieliński"
                        class="w-20 h-20 rounded-full object-cover mb-6">
                    <h3 class="text-xl font-semibold text-brand-gray mb-1">Marcin Chmieliński</h3>
                    <p class="text-sm text-brand-gray-light mb-3">Cofounder</p>
                    <p class="text-sm text-brand-gray-light mb-6">Rozwój Biznesu | Zarządzanie Sprzedażą</p>
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
                    <img src="{{ asset('assets/team/marcin-wesolowski.jpeg') }}" alt="Marcin Wesołowski"
                        class="w-20 h-20 rounded-full object-cover mb-6">
                    <h3 class="text-xl font-semibold text-brand-gray mb-1">Marcin Wesołowski</h3>
                    <p class="text-sm text-brand-gray-light mb-3">Cofounder</p>
                    <p class="text-sm text-brand-gray-light mb-6">Business Strategy | AI & Agentic Coding</p>
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

    @include('partials.footer')

@endsection