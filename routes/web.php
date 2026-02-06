<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile/marcin-chmielinski', function () {
    return view('team.profile', [
        'name' => 'Marcin Chmieliński',
        'slug' => 'marcin-chmielinski',
        'role' => 'Cofounder',
        'linkedin' => 'https://www.linkedin.com/in/marcin-chmieli%C5%84ski-2b446167',
        'initials' => 'MC',
        'photo' => 'assets/team/marcin-chmielinski.jpg',
        'bio' => "Mam prawie 20 lat doświadczenia w zarządzaniu sprzedażą i operacjami w sieciach handlowych. Przez ostatnie 9 lat kierowałem regionem ponad 60 salonów marek Vistula, BYTOM i Wólczanka w VRG S.A., odpowiadając za wzrost sprzedaży i rentowności rok do roku.<br><br>
        Wcześniej budowałem i rozwijałem sieci sprzedaży w Giacomo Conti, PAWO i Lidl, gdzie zarządzałem zespołami liczącymi ponad 100 osób. Specjalizuję się w standaryzacji procesów, szkoleniu kadry kierowniczej i wdrażaniu strategii operacyjnych.<br><br>
        W BTA Systems odpowiadam za rozwój biznesu i relacje z klientami, wykorzystując doświadczenie w budowaniu efektywnych zespołów i optymalizacji procesów sprzedażowych.",
        'experience' => [
            ['period' => '2025–obecnie', 'company' => 'BTA Systems', 'position' => 'Cofounder'],
            ['period' => '2016–obecnie', 'company' => 'VRG S.A. (Vistula, BYTOM, Wólczanka)', 'position' => 'Menedżer Operacyjny / Regionalny Menedżer Sprzedaży'],
            ['period' => '2015–2016', 'company' => 'Giacomo Conti', 'position' => 'Manager Sieci Sprzedaży'],
            ['period' => '2006–2012', 'company' => 'Lidl Polska', 'position' => 'Kierownik Rejonu Sprzedaży'],
        ],
        'skills' => ['Zarządzanie Operacyjne', 'Rozwój Biznesu', 'Zarządzanie Sprzedażą', 'Koordynowanie Projektów', 'Szkolenie Kadry'],
    ]);
})->name('team.marcin-chmielinski');

Route::get('/profile/marcin-wesolowski', function () {
    return view('team.profile', [
        'name' => 'Marcin Wesołowski',
        'slug' => 'marcin-wesolowski',
        'role' => 'Cofounder',
        'linkedin' => 'https://www.linkedin.com/in/mwesolowski-sn',
        'initials' => 'MW',
        'photo' => 'assets/team/marcin-wesolowski.jpeg',
        'bio' => "Od 20 lat buduję i rozwijam firmy technologiczne. Jako założyciel EstiCRM, doprowadziłem do 30% udziału w polskim rynku oprogramowania CRM dla branży nieruchomości i ponad 5 mln PLN rocznych przychodów, utrzymując poziom rezygnacji klientów na poziomie zaledwie 1%.<br><br>
        W 2025 roku pomyślnie sfinalizowałem sprzedaż udziałów w firmie.<br><br>
        W BTA Systems łączę doświadczenie biznesowe ze znajomością nowoczesnych technologii. Wcześniej przez dekadę prowadziłem agencję digitalową BPM Interactive, realizując ponad 200 projektów dla firm i startupów – to dało mi praktyczne spojrzenie zarówno na technologię, jak i na biznes. <br><br>
        Poza działalnością komercyjną doradzam startupom w zakresie strategii biznesowej i rozwoju produktów informatycznych, pomagając przekształcać wizję w rentowne, skalowalne rozwiązania.
          ",
        'experience' => [
            ['period' => '2025–obecnie', 'company' => 'BTA Systems', 'position' => 'Cofounder'],
            ['period' => '2025–obecnie', 'company' => 'SpaceNavigator.io', 'position' => 'Founder'],
            ['period' => '2014–2025', 'company' => 'EstiCRM', 'position' => 'Cofounder i CEO (exit)'],
            ['period' => '2005–2015', 'company' => 'BPM Interactive', 'position' => 'Founder'],
        ],
        'skills' => ['Business Strategy', 'Software as a Service (SaaS)', 'Software Development', 'Agentic Coding', 'AI'],
    ]);
})->name('team.marcin-wesolowski');

Route::get('/polityka-prywatnosci', function () {
    return view('privacy');
})->name('privacy');
