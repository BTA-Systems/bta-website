@extends('layouts.app')

@section('title', $name . ' — BTA Systems')
@section('meta_description', $name . ', ' . $role . ' w BTA Systems')

@section('content')

    {{-- Header --}}
    <header class="px-6 py-6">
        <div class="max-w-3xl mx-auto flex items-center justify-between">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/BTA_logo.png') }}" alt="BTA Systems" class="h-20">
            </a>
            <a href="{{ route('home') }}"
                class="inline-flex items-center gap-2 text-sm text-brand-gray-light hover:text-brand-gray transition-colors group">
                Wróć do strony głównej
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </header>

    {{-- Profile Header --}}
    <section class="px-6 pt-8 pb-16">
        <div class="max-w-3xl mx-auto">
            <div class="flex flex-col sm:flex-row items-start gap-8">
                @if(isset($photo))
                    <img src="{{ asset($photo) }}" alt="{{ $name }}" class="w-28 h-28 rounded-full object-cover shrink-0">
                @else
                    <div
                        class="w-28 h-28 rounded-full {{ $slug === 'marcin-chmielinski' ? 'bg-brand-gray' : 'bg-brand-red' }} flex items-center justify-center text-white text-3xl font-semibold shrink-0">
                        {{ $initials }}
                    </div>
                @endif
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-brand-gray mb-2">{{ $name }}</h1>
                    <p class="text-lg text-brand-gray-light mb-4">{{ $role }}, BTA Systems</p>
                    <a href="{{ $linkedin }}" target="_blank" rel="noopener"
                        class="inline-flex items-center gap-2 text-sm text-brand-gray-light hover:text-brand-gray transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Bio --}}
    <section class="px-6 pb-16 border-t border-gray-100 pt-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-sm font-medium tracking-widest text-brand-gray-light uppercase mb-6">O mnie</h2>
            <div class="text-lg text-brand-gray-light leading-relaxed">
                {!! $bio !!}
            </div>
        </div>
    </section>

    {{-- Experience --}}
    <section class="px-6 pb-16 border-t border-gray-100 pt-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-sm font-medium tracking-widest text-brand-gray-light uppercase mb-8">Doświadczenie</h2>
            <div class="space-y-6">
                @foreach($experience as $item)
                    <div class="flex flex-col sm:flex-row sm:items-baseline gap-1 sm:gap-8">
                        <span class="text-sm text-gray-400 sm:w-36 shrink-0">{{ $item['period'] }}</span>
                        <div>
                            <p class="font-medium text-brand-gray">{{ $item['company'] }}</p>
                            <p class="text-sm text-brand-gray-light">{{ $item['position'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Skills --}}
    <section class="px-6 pb-24 border-t border-gray-100 pt-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-sm font-medium tracking-widest text-brand-gray-light uppercase mb-8">Kompetencje</h2>
            <div class="flex flex-wrap gap-2">
                @foreach($skills as $skill)
                    <span
                        class="px-4 py-2 text-sm border border-gray-200 rounded-full text-brand-gray-light">{{ $skill }}</span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="border-t border-gray-100 py-12 px-6">
        <div class="max-w-3xl mx-auto">
            <p class="text-xs text-gray-400">
                &copy; {{ date('Y') }} BTA Systems Sp. z o.o.
            </p>
        </div>
    </footer>

@endsection