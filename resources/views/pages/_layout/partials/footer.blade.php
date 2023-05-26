<footer class="text-center text-lg-start text-white">
    <div class="container p-4">
        <div class="row my-4">
            <div class="col-lg-4 col-md-12 mb-3 mb-md-5">
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="BKC Logo" style="width:175px")/>
                    <div class="address mt-4">
                        <p>Toybelen Mahallesi No:4 1174 Sokak<br>B1/7 Blok Keresteciler Sitesi - İlkadım<br>Samsun</p>
                        <p class="mb-0"><strong>0362 439 27 72</strong></p>
                        <p>info@bkcmakina.com.tr</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mb-md-0">
                <ul class="list-unstyled links">
                    <li class="mb-2">
                        <a href="{{ route('home') }}">ANASAYFA</a>
                    </li>
                    <li class="mb-2">
                        <a href="#">KURUMSAL</a>
                    </li>
                    <li class="mb-2">
                        <a href="#">ÜRETİM</a>
                    </li>
                    <li class="mb-2">
                        <a href="#">KULLANIM ALANLARI</a>
                    </li>
                    <li class="mb-2">
                        <a href="#">PROJELER</a>
                    </li>
                    <li class="mb-2">
                        <a href="#">İLETİŞİM</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 mb-4 mb-md-0">
                <p>Bizi sosyal medyada takip edin</p>
                <ul class="list-unstyled d-flex flex-row social-media gap-2 justify-content-center justify-content-lg-start">
                    <li>
                        <a href="#!">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <i class="fab fa-twitch"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="p-3" style="border-top:1px solid #D70000; color: #cccccc;">
        <div class="container">
            Copyright <i class="fas fa-period"></i> {{ date('Y') }}
        </div>
    </div>
</footer>

