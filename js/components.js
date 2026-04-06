// Start fetching immediately — don't wait for DOMContentLoaded
var _navFetch = fetch('navbar.html').then(function (r) { return r.text(); });
var _footerFetch = fetch('footer.html').then(function (r) { return r.text(); });

function _injectComponents() {
    var nav = document.getElementById('nav-placeholder');
    var foot = document.getElementById('footer-placeholder');
    if (nav) _navFetch.then(function (h) {
        nav.outerHTML = h;
        // Mobile menu init — runs after navbar is in DOM, regardless of main.js timing
        var menuToggle = document.getElementById('menu-toggle-form');
        var menu = document.getElementById('menu');
        if (menuToggle && menu) {
            menuToggle.addEventListener('click', function () {
                menuToggle.classList.toggle('active');
                menu.classList.toggle('active');
            });
        }
        document.querySelectorAll('nav#menu li').forEach(function (li) {
            var sub = li.querySelector(':scope > ul');
            if (!sub) return;
            var link = li.querySelector(':scope > a');
            if (!link) return;
            link.addEventListener('click', function (e) {
                e.preventDefault();
                link.classList.toggle('active');
                sub.classList.toggle('active');
            });
        });
    });
    if (foot) _footerFetch.then(function (h) { foot.outerHTML = h; });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', _injectComponents);
} else {
    _injectComponents();
}
