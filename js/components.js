// Start fetching immediately — don't wait for DOMContentLoaded
var _navFetch = fetch('navbar.html').then(function (r) { return r.text(); });
var _footerFetch = fetch('footer.html').then(function (r) { return r.text(); });

function _injectComponents() {
    var nav = document.getElementById('nav-placeholder');
    var foot = document.getElementById('footer-placeholder');
    if (nav) _navFetch.then(function (h) { nav.outerHTML = h; });
    if (foot) _footerFetch.then(function (h) { foot.outerHTML = h; });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', _injectComponents);
} else {
    _injectComponents();
}
