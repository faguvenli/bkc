import './bootstrap';
require("@grubersjoe/slide-menu");
import './side-menu';
import AOS from 'aos';
AOS.init({
    disable: function() {
        var maxWidth = 800;
        return window.innerWidth < maxWidth;
    },
    duration: 1000,
});
