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
        'linkedin' => 'https://linkedin.com/in/',
        'initials' => 'MC',
        'bio' => 'Posiada ponad 15-letnie doświadczenie w branży technologicznej, specjalizując się w strategii produktowej i zarządzaniu projektami IT. Przez lata współpracował z firmami z sektora fintech, e-commerce i SaaS, pomagając im budować skalowalne rozwiązania cyfrowe. Wierzy, że najlepsze produkty powstają na styku technologii i głębokiego zrozumienia potrzeb użytkownika. W BTA Systems odpowiada za kierunek rozwoju produktów i relacje z klientami.',
        'experience' => [
            ['period' => '2024–obecnie', 'company' => 'BTA Systems', 'position' => 'Cofounder'],
            ['period' => '2018–2024', 'company' => 'Firma technologiczna', 'position' => 'Product Manager'],
            ['period' => '2012–2018', 'company' => 'Software house', 'position' => 'Project Manager'],
        ],
        'skills' => ['Strategia produktowa', 'Zarządzanie projektami', 'Agile / Scrum', 'Business Development', 'Analiza wymagań', 'UX Strategy'],
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
