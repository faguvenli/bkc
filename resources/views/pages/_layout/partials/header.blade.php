<header>
    <div class="container-sm position-relative">
        <a href="javascript:void(0);" class="hamburger_btn slide-menu__control d-lg-none" data-target="slide-menu" data-action="toggle" type="button"><span></span></a>

        <div class="py-3 position-relative d-none d-lg-block top-bar">
            <ul class="list-unstyled d-flex flex-row justify-content-end mb-0">
                <li>
                    <a class="text-white px-3" href="#!">
                        <i class="fab fa-whatsapp"></i> 0549 449 00 52
                    </a>
                </li>
                <li>
                    <a class="text-white px-2" href="#!">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a class="text-white px-2" href="#!">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a class="text-white px-2" href="#!">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a class="text-white px-2" href="#!">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a class="text-white px-2" href="#!">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
        <nav class="top-menu">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="BKC Logo" class="img-fluid">
                </a>
            </div>
            <div class="links d-none d-lg-inline-flex justify-content-between shadow">
                <ul>
                    <li><a href="#">Kurumsal</a></li>
                    <li><a href="#">Üretim</a></li>
                    <li><a href="#">Kullanım Alanları</a></li>
                    <li><a href="#">İletişim</a></li>
                </ul>
                <ul>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="overlay d-none"></div>
    <nav class="slide-menu" id="slide-menu">
        <ul class="mt-5">
            <li><a href="#">Kurumsal</a></li>
            <li><a href="#">Üretim</a></li>
            <li><a href="#">Kullanım Alanları</a></li>
            <li><a href="#">İletişim</a></li>
        </ul>
    </nav>
</header>
