# Specyfikacja strony www BTA Systems Sp. z o.o.

## 1. Informacje ogólne

| Parametr | Wartość |
|----------|---------|
| Nazwa projektu | Strona korporacyjna BTA Systems |
| Domena | Do ustalenia (np. btasystems.pl) |
| Język | Polski |
| Typ strony | Single-page z podstronami profili założycieli |
| Charakter | Minimalistyczny, profesjonalny, nowoczesny |

---

## 2. Identyfikacja wizualna

### Logo
Logo firmy w załączniku (BTA_logo.png). Kolorystyka marki:
- Czerwony (BTA): #CC0000 lub zbliżony
- Ciemnoszary (systems): #333333 lub zbliżony

### Wytyczne stylistyczne
- Typografia: nowoczesna, bezszeryfowa (np. Inter, Plus Jakarta Sans)
- Dużo białej przestrzeni (white space)
- Minimalna ilość elementów dekoracyjnych
- Subtelne animacje przy scrollowaniu (opcjonalnie)

---

## 3. Struktura strony głównej

Strona składa się z **trzech sekcji** ułożonych pionowo:

### Sekcja 1: Hero

**Cel:** Pierwsze wrażenie, przedstawienie misji firmy.

**Elementy:**
- Logo BTA Systems (wycentrowane lub w lewym górnym rogu)
- Główne hasło (headline) — propozycje do wyboru:
  - „Tworzymy narzędzia, które pracują za Ciebie"
  - „Automatyzacja tam, gdzie inni widzą chaos"
  - „AI, które rozumie Twoją pracę"
- Krótki podtytuł (subheadline): „Software house specjalizujący się w rozwiązaniach AI dla biznesu"
- Tło: stonowane, jasne lub delikatny gradient; alternatywnie subtelna grafika/pattern

**Uwagi:**
- Brak przycisku CTA w hero — strona ma charakter informacyjny
- Możliwy scroll indicator (strzałka w dół)

---

### Sekcja 2: Nasz produkt — Doni.ai

**Cel:** Krótkie przedstawienie flagowego produktu z przekierowaniem na jego dedykowaną stronę.

**Elementy:**
- Nagłówek sekcji: „Co tworzymy"
- Nazwa produktu: **Doni.ai** (jako wyróżniony element, możliwe logo produktu)
- Krótki opis (2-3 zdania max):

> Doni.ai to inteligentny asystent, który wykonuje zadania w Twoich aplikacjach webowych. Wystarczy rozmowa — bez konfiguracji, bez schematów. Oddeleguj to, czego nie da się zautomatyzować tradycyjnie.

- Przycisk/link: „Poznaj Doni.ai →" kierujący do https://doni.ai
- Opcjonalnie: mały screenshot interfejsu lub ikona/ilustracja

**Uwagi:**
- Sekcja ma być zwięzła — nie powielamy contentu ze strony doni.ai
- Nacisk na przekierowanie użytkownika do produktu

---

### Sekcja 3: Zespół założycielski

**Cel:** Budowanie wiarygodności przez pokazanie ludzi stojących za firmą.

**Elementy:**
- Nagłówek sekcji: „Kto za tym stoi"
- Dwie karty założycieli obok siebie (na mobile: jedna pod drugą)

**Struktura karty założyciela:**

```
┌─────────────────────────────┐
│      [Zdjęcie profilowe]    │
│                             │
│   Imię i Nazwisko           │
│   Cofounder                 │
│                             │
│   Krótki tagline (1 linia)  │
│                             │
│   [Przycisk: Zobacz profil] │
└─────────────────────────────┘
```

**Dane założycieli:**

| | Założyciel 1 | Założyciel 2 |
|---|---|---|
| Imię i nazwisko | Marcin Chmieliński | Marcin Wesołowski |
| Rola | Cofounder | Cofounder |
| Tagline (placeholder) | „15+ lat w IT, strateg produktowy" | „Architekt rozwiązań, pasjonat AI" |
| Zdjęcie | Do dostarczenia | Do dostarczenia |

- Przycisk „Zobacz profil" kieruje do podstrony /zespol/marcin-chmielinski lub /zespol/marcin-wesolowski

---

### Stopka (Footer)

**Elementy:**
- Logo BTA Systems (mniejsze)
- Nazwa: BTA Systems Sp. z o.o.
- Adres siedziby (do uzupełnienia)
- E-mail kontaktowy (do uzupełnienia)
- Ikony social media: LinkedIn (link do profilu firmowego — do uzupełnienia)
- Rok © 2025 BTA Systems Sp. z o.o.

---

## 4. Podstrony profili założycieli

Dwie identyczne strukturalnie podstrony:
- `/zespol/marcin-chmielinski`
- `/zespol/marcin-wesolowski`

### Struktura podstrony profilu

**Header:** Nawigacja powrotna „← Wróć do strony głównej"

**Sekcja główna:**

```
┌────────────────────────────────────────────────────┐
│  [Zdjęcie]     Imię i Nazwisko                     │
│                Cofounder, BTA Systems              │
│                                                    │
│                [Ikona LinkedIn] LinkedIn →         │
└────────────────────────────────────────────────────┘
```

**Sekcja „O mnie":**
Tekst biograficzny (placeholder do uzupełnienia później):

> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Posiada wieloletnie doświadczenie w branży technologicznej, specjalizując się w [obszar]. Pracował z firmami takimi jak [przykłady]. Pasjonuje się [zainteresowania zawodowe].

**Sekcja „Doświadczenie" (opcjonalna lista):**

| Okres | Firma | Stanowisko |
|-------|-------|------------|
| 2020–obecnie | BTA Systems | Cofounder |
| 2015–2020 | [Placeholder] | [Placeholder] |
| 2010–2015 | [Placeholder] | [Placeholder] |

**Sekcja „Kompetencje" (tagi/badges):**
- [Placeholder 1]
- [Placeholder 2]
- [Placeholder 3]
- [Placeholder 4]

**Linki:**
- LinkedIn: https://linkedin.com/in/placeholder (do uzupełnienia)

---

## 5. Wymagania techniczne

| Wymaganie | Opis |
|-----------|------|
| Responsywność | Pełna responsywność (mobile-first) |
| Wydajność | Lighthouse score > 90 |
| SEO | Podstawowe meta tagi, Open Graph, strukturyzowane dane |
| Hosting | Do ustalenia (preferowany hosting PL lub EU) |
| SSL | Certyfikat SSL (HTTPS) |
| Analityka | Integracja z Google Analytics 4 lub Plausible |
| Cookies | Banner cookie zgodny z RODO |

---

## 6. Treści do dostarczenia przez Klienta

- [ ] Zdjęcia profilowe obu założycieli (min. 400x400px, format kwadratowy)
- [ ] Pełne biogramy założycieli (po 150-300 słów każdy)
- [ ] Lista doświadczeń zawodowych (CV-style)
- [ ] Lista kompetencji/umiejętności
- [ ] Linki do profili LinkedIn
- [ ] Dane kontaktowe firmy (adres, e-mail)
- [ ] Link do profilu firmowego LinkedIn (jeśli istnieje)
- [ ] Ewentualne zdjęcie/screenshot z Doni.ai do sekcji produktowej

---

## 7. Zakres prac wykonawcy

1. Projekt graficzny (mockup/wireframe do akceptacji)
2. Implementacja strony głównej
3. Implementacja 2 podstron profili
4. Konfiguracja hostingu i domeny
5. Wdrożenie SSL
6. Podstawowa optymalizacja SEO
7. Konfiguracja analityki
8. Testy responsywności i wydajności
9. Szkolenie z edycji treści (jeśli CMS)

---

## 8. Załączniki

1. Logo BTA Systems (BTA_logo.png)

---

## 9. Uwagi końcowe

- Strona ma być **minimalistyczna i czytelna** — jakość ponad ilość
- Nie stosować stockowych zdjęć ani generycznych ilustracji
- Unikać „korporacyjnego" języka — ton ma być profesjonalny, ale ludzki
- Czas ładowania strony poniżej 3 sekund
- Priorytet: czytelność na urządzeniach mobilnych
