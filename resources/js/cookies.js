function getCookieConsent() {
    return localStorage.getItem('cookie_consent');
}

function setCookieConsent(value) {
    localStorage.setItem('cookie_consent', value);
}

function hideBanner() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.classList.add('hidden');
    }
}

function showBanner() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.classList.remove('hidden');
    }
}

window.acceptCookies = function () {
    setCookieConsent('accepted');
    hideBanner();
};

window.rejectCookies = function () {
    setCookieConsent('rejected');
    hideBanner();
};

document.addEventListener('DOMContentLoaded', function () {
    const consent = getCookieConsent();
    if (!consent) {
        showBanner();
    }
});
