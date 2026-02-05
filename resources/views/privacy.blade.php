@extends('layouts.app')

@section('title', 'Polityka prywatności — BTA Systems')
@section('meta_description', 'Polityka prywatności strony BTA Systems. Informacje o przetwarzaniu danych osobowych i plikach cookies.')

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
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </header>

    <article class="px-6 pt-8 pb-24">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-brand-gray mb-12">Polityka prywatności</h1>

            <div class="space-y-10 text-brand-gray-light leading-relaxed">

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">1. Administrator danych</h2>
                    <p>
                        Administratorem danych osobowych jest BTA Systems Sp. z o.o. z siedzibą w Warszawie,
                        ul. Przykładowa 10, 00-001 Warszawa, wpisana do rejestru przedsiębiorców KRS pod numerem
                        0000000000, NIP: 0000000000, REGON: 000000000.
                    </p>
                    <p class="mt-2">
                        Kontakt z administratorem: <a href="mailto:kontakt@bta.systems" class="underline hover:text-brand-gray transition-colors">kontakt@bta.systems</a>
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">2. Zakres zbieranych danych</h2>
                    <p>
                        Strona internetowa https://bta.systems zbiera wyłącznie dane techniczne niezbędne do prawidłowego
                        funkcjonowania serwisu, w szczególności:
                    </p>
                    <ul class="list-disc list-inside mt-3 space-y-1">
                        <li>Adres IP</li>
                        <li>Typ przeglądarki internetowej</li>
                        <li>System operacyjny</li>
                        <li>Czas i data odwiedzin</li>
                        <li>Odwiedzone podstrony</li>
                    </ul>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">3. Cel przetwarzania danych</h2>
                    <p>Dane osobowe przetwarzane są w następujących celach:</p>
                    <ul class="list-disc list-inside mt-3 space-y-1">
                        <li>Zapewnienie prawidłowego działania strony internetowej</li>
                        <li>Analiza statystyk odwiedzin i zachowań użytkowników</li>
                        <li>Zapewnienie bezpieczeństwa serwisu</li>
                    </ul>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">4. Podstawa prawna przetwarzania</h2>
                    <p>
                        Dane osobowe przetwarzane są na podstawie art. 6 ust. 1 lit. f) Rozporządzenia Parlamentu
                        Europejskiego i Rady (UE) 2016/679 (RODO) — prawnie uzasadniony interes administratora,
                        polegający na prowadzeniu analityki i zapewnieniu funkcjonalności strony, oraz na podstawie
                        art. 6 ust. 1 lit. a) RODO — zgody użytkownika w zakresie plików cookies analitycznych.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">5. Pliki cookies</h2>
                    <p>
                        Strona korzysta z plików cookies (ciasteczek) — małych plików tekstowych zapisywanych
                        na urządzeniu użytkownika. Wyróżniamy następujące rodzaje cookies:
                    </p>
                    <ul class="list-disc list-inside mt-3 space-y-1">
                        <li><strong>Niezbędne</strong> — konieczne do prawidłowego działania strony, nie wymagają zgody</li>
                        <li><strong>Analityczne</strong> — służą do zbierania anonimowych statystyk dotyczących korzystania ze strony; wymagają zgody użytkownika</li>
                    </ul>
                    <p class="mt-3">
                        Użytkownik może w każdej chwili zmienić ustawienia dotyczące cookies w swojej przeglądarce,
                        w tym zablokować ich zapisywanie. Może to jednak wpłynąć na prawidłowe działanie strony.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">6. Okres przechowywania danych</h2>
                    <p>
                        Dane techniczne przechowywane są przez okres niezbędny do realizacji celów, dla których
                        zostały zebrane, nie dłużej niż 26 miesięcy od daty ostatniej aktywności użytkownika
                        na stronie.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">7. Prawa użytkownika</h2>
                    <p>Każdemu użytkownikowi przysługuje prawo do:</p>
                    <ul class="list-disc list-inside mt-3 space-y-1">
                        <li>Dostępu do swoich danych osobowych</li>
                        <li>Sprostowania danych</li>
                        <li>Usunięcia danych („prawo do bycia zapomnianym")</li>
                        <li>Ograniczenia przetwarzania</li>
                        <li>Przenoszenia danych</li>
                        <li>Sprzeciwu wobec przetwarzania</li>
                        <li>Cofnięcia zgody na przetwarzanie danych</li>
                        <li>Wniesienia skargi do Prezesa Urzędu Ochrony Danych Osobowych</li>
                    </ul>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">8. Odbiorcy danych</h2>
                    <p>
                        Dane mogą być udostępniane podmiotom świadczącym usługi na rzecz administratora,
                        w szczególności dostawcom usług hostingowych i analitycznych. Dane nie są przekazywane
                        do państw trzecich spoza Europejskiego Obszaru Gospodarczego, chyba że zapewnione
                        są odpowiednie zabezpieczenia zgodne z RODO.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-brand-gray mb-3">9. Zmiany polityki prywatności</h2>
                    <p>
                        Administrator zastrzega sobie prawo do wprowadzania zmian w niniejszej polityce
                        prywatności. O wszelkich zmianach użytkownicy zostaną poinformowani poprzez
                        zamieszczenie zaktualizowanej wersji na stronie.
                    </p>
                </section>

                <section>
                    <p class="text-sm text-gray-400">
                        Data ostatniej aktualizacji: {{ date('d.m.Y') }}
                    </p>
                </section>

            </div>
        </div>
    </article>

    {{-- Footer --}}
    <footer class="border-t border-gray-100 py-12 px-6">
        <div class="max-w-3xl mx-auto">
            <p class="text-xs text-gray-400">
                &copy; {{ date('Y') }} BTA Systems Sp. z o.o.
            </p>
        </div>
    </footer>

@endsection
