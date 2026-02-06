{{-- Footer --}}
<footer class="border-t border-gray-100 py-16 px-6">
    <div class="max-w-3xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between gap-8">
            <div>
                <p class="text-sm text-brand-gray-light leading-relaxed">
                    BTA Systems Sp. z o.o.<br>
                    ul. Korzenna 3B/16<br>
                    81-587 Gdynia<br>
                    NIP: 5862402265
                </p>
            </div>

            <div class="text-sm text-brand-gray-light space-y-2">
                <p>
                    <a href="mailto:kontakt@bta.systems"
                        class="hover:text-brand-gray transition-colors">kontakt@bta.systems</a>
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
