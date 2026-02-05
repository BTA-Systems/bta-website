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
        'tagline' => '15+ lat w IT, strateg produktowy',
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
        'tagline' => 'Architekt rozwiązań, pasjonat AI',
        'linkedin' => 'https://linkedin.com/in/',
        'initials' => 'MW',
        'bio' => 'Doświadczony architekt oprogramowania z pasją do sztucznej inteligencji i automatyzacji procesów biznesowych. Od ponad dekady projektuje i wdraża systemy IT dla firm różnej skali — od startupów po duże organizacje. Specjalizuje się w integracji rozwiązań AI z istniejącymi procesami biznesowymi. W BTA Systems odpowiada za architekturę techniczną i rozwój flagowego produktu Doni.ai.',
        'experience' => [
            ['period' => '2024–obecnie', 'company' => 'BTA Systems', 'position' => 'Cofounder'],
            ['period' => '2017–2024', 'company' => 'Firma IT', 'position' => 'Lead Software Architect'],
            ['period' => '2011–2017', 'company' => 'Software house', 'position' => 'Senior Developer'],
        ],
        'skills' => ['Architektura systemów', 'AI / Machine Learning', 'Laravel / PHP', 'Python', 'Cloud Architecture', 'DevOps'],
    ]);
})->name('team.marcin-wesolowski');

Route::get('/polityka-prywatnosci', function () {
    return view('privacy');
})->name('privacy');
