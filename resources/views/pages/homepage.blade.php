@extends('pages._layout.master')
@section('title', 'Anasayfa')
@section('meta_description', 'BKC')
@section('content')
    <section id="image-carousel" class="splide" aria-label="BKC">
        <div class="splide__track">
            <ul class="splide__list">

                <li class="splide__slide">
                    <div class="container">
                        <div class="d-none d-sm-block slider-text">
                            <h1><strong>Aktif karbon</strong> üretim tesisi kuruyoruz</h1>
                            <p>Sektörel gelişmelere öncülük eden çalışmaları uluslararası arenada birçok başarılı projenin yürütülmesini ve Türkiye’nin ilk Biochar ve Aktif Karbon Üretim Tesislerini başarıyla tamamlayabilmesini de sağlamıştır. </p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/images/sliders/slider1.jpg') }}" alt="BKC">
                </li>

            </ul>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4" data-aos="fade-up">
                <div><img src="{{ asset('assets/images/home/tasarim_ve_proje.jpg')  }}" class="img-fluid rounded-4" alt="Tasarım ve Proje"></div>
                <div class="text-center mt-3">
                    <h5>Tasarım ve Proje</h5>
                    <p>Komple Tesis olarak sağlanabilen Makine ve Sistemlerin İmalatında uzmanlaşmıştır. Makinelerimiz, Kapasite taleplerini karşılamak için Karbonizasyon Ünitelerinin Üretimi veya Tüm Fabrikanın Tasarımını da içeren Bireysel Proje Planlarının özel gereksinimlerini karşılamak üzere optimize edilmiştir.</p>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-down">
                <div><img src="{{ asset('assets/images/home/uretim.jpg') }}" class="img-fluid rounded-4" alt="Üretim"></div>
                <div class="text-center mt-3">
                    <h5>Üretim</h5>
                    <p>Atık su tesisleri yıllar içinde deforme olup revizyon ihtiyacı duyabilir ve eski tesisler günümüzün arıtma tesisi gereksinimlerini karşılamayabilir. Şirketinizin mevcut su arıtma sisteminin modernize edilmesi veya yükseltilmesi gerekiyorsa sizlere yardımcı olabiliriz.</p>
                </div>
            </div>
            <div class="col-12 col-md-4" data-aos="fade-up">
                <div><img src="{{ asset('assets/images/home/kurulum.jpg') }}" class="img-fluid rounded-4" alt="Kurulum"></div>
                <div class="text-center mt-3">
                    <h5>Kurulum</h5>
                    <p>Atık su tesisleri yıllar içinde deforme olup revizyon ihtiyacı duyabilir ve eski tesisler günümüzün arıtma tesisi gereksinimlerini karşılamayabilir. Şirketinizin mevcut su arıtma sisteminin modernize edilmesi veya yükseltilmesi gerekiyorsa sizlere yardımcı olabiliriz.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-in">
                <img src="{{ asset('assets/images/leaf.svg') }}" alt="yaprak">
                <h4>Ürettiğimiz Tesisler ve Özellikleri</h4>
            </div>
        </div>
    </div>
    <section class="mt-5">
        <div class="bg-image">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 mb-lg-0">
                        <div class="number" data-aos="fade-up">1</div>
                    </div>
                    <div class="col-12 col-lg-6 position-relative order-2 order-lg-1 mt-3 mt-lg-0">
                        <div class="position-relative" style="z-index:2;" data-aos="fade-right">
                            <h3 class="mt-3">Aktif Karbon üretim tesisi</h3>
                            <h4 class="mt-4">Tek proses iki ürün (Karbon ve Aktif karbon)</h4>
                            <p>Aktif Karbon, farklı molekül yapıları ile birleşebilen, yüzeyi gözenekli katı bir maddedir. Aktif Karbonun etkileşimi fiziksel ve kimyasal yapısı sayesinde olabileceği gibi kuvveti de molekülün tipine ve Aktif Karbonun tipine bağlı olarak değişebilir. Aktif Karbon genellikle buharla aktivasyon prosesi ile üretilir. Bu proseste karbon ya da ya da karbon içeren başlangıç malzemeleri buharla ya da diğer okside edici malzemelerle reaksiyona sokularak gazlandırma işleminden geçirilir.</p>
                            <h4 class="mt-3">Kurduğumuz Tesislerin Özellikleri</h4>
                            <ul>
                                <li>Kendi elektriğini üretebilme.</li>
                                <li>Paslanmaz 310s çelik yapı</li>
                                <li>48 saat içerisinde yerinde mekanik servis ve 7/24 online servis</li>
                                <li>Yedek parça temin güvencesi</li>
                            </ul>
                            <button class="btn btn-green rounded-5">Detaylı bilgi</button>
                        </div>
                        <div class="floating-coal" data-aos="fade-right">
                            <img src="{{ asset('assets/images/coal2.png') }}" alt="Kömür">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <div data-aos="fade-up"><img src="{{ asset('assets/images/facilities/aktif-karbon-uretim-tesisi.jpg') }}" class="img-fluid rounded-4" alt="Aktif Karbon Üretin Tesisi"></div>
                        <div data-aos="fade-in" class="mt-3 bg-white rounded-4 p-3 shadow">
                            <div class="row">
                                <div class="col-12 col-sm text-center" data-aos="fade-left">
                                    <img src="{{ asset('assets/images/coal1.jpg') }}" class="img-fluid" alt="Kömür">
                                </div>
                                <div class="col-12 col-sm d-flex align-items-center mt-3 mt-sm-0" data-aos="fade-right">
                                    <div>
                                        <h5 class="text-green"><strong>Aktif Karbon Nedir?</strong></h5>
                                        <p class="text-black">Aktif Karbon, farklı molekül yapıları ile birleşebilen, yüzeyi gözenekli katı bir maddedir.</p>
                                        <button class="btn btn-green rounded-5">Detaylı bilgi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 d-lg-none">
                        <div class="number" data-aos="fade-up">2</div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div data-aos="fade-bottom"><img src="{{ asset('assets/images/facilities/biochar-uretim-tesisi.jpg') }}" class="img-fluid rounded-4" alt="BİOCHAR Üretim Tesisi"></div>
                        <div data-aos="fade-in" class="mt-3 bg-white rounded-4 p-3 shadow">
                            <div class="row">
                                <div class="col-12 col-sm text-center">
                                    <img data-aos="fade-left" src="{{ asset('assets/images/coal3.jpg') }}" class="img-fluid" alt="Kömür">
                                </div>
                                <div class="col-12 col-sm d-flex align-items-center mt-3 mt-sm-0">
                                    <div data-aos="fade-up">
                                        <h5 class="text-green"><strong>BİOCHAR Nedir?</strong></h5>
                                        <p class="text-black">Aktif Karbon, farklı molekül yapıları ile birleşebilen, yüzeyi gözenekli katı bir maddedir.</p>
                                        <button class="btn btn-green rounded-5">Detaylı bilgi</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-between mt-3 mt-lg-0">
                        <div data-aos="fade-up">
                            <div class="number d-none d-lg-inline-flex">2</div>
                            <h3 class="mt-3">BİOCHAR üretim tesisi</h3>
                            <h5 class="mt-3">Kendi Elektiriğini üreten tamamen otomasyon Biyokömür, elektrik ve ısı odunsu artıklardan üretilir</h5>
                            <h6 class="mt-4">Sistem artı yığının tam otomatik beslenmesi ve biyokömürün koşullandırılması</h6>
                            <p>Aktif Karbon, farklı molekül yapıları ile birleşebilen, yüzeyi gözenekli katı bir maddedir. Aktif Karbonun etkileşimi fiziksel ve kimyasal yapısı sayesinde olabileceği gibi kuvveti de molekülün tipine ve Aktif Karbonun tipine bağlı olarak değişebilir. Aktif Karbon genellikle buharla aktivasyon prosesi ile üretilir.</p>
                            <button class="btn btn-green rounded-5">Detaylı bilgi</button>
                        </div>
                        <div data-aos="fade-down">
                            <ul class="list-unstyled d-flex flex-column flex-sm-row justify-content-center mt-5">
                                <li class="text-center">
                                    <div><img src="{{ asset('assets/images/icon1.jpg') }}" class="img-fluid" alt="Karbonatlaşma bölgesinde hareketli parça yok"></div>
                                    <p>Karbonatlaşma bölgesinde hareketli parça yok</p>
                                </li>
                                <li class="text-center">
                                    <div><img src="{{ asset('assets/images/icon2.jpg') }}" class="img-fluid" alt="Sıfır Atık ve Çevre Dostu enerji kaynağı"></div>
                                    <p>Sıfır Atık ve Çevre Dostu enerji kaynağı</p>
                                </li>
                                <li class="text-center">
                                    <div><img src="{{ asset('assets/images/icon3.jpg') }}" class="img-fluid" alt="Tam proses kontrolü"></div>
                                    <p>Tam proses kontrolü &amp; web tabanlı görselleştirme</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="bg-image">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 mb-lg-0">
                        <div data-aos="fade-in" class="number">3</div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-between order-2 order-lg-1 mt-3 mt-lg-0">
                        <div data-aos="fade-up">
                            <h3 class="mt-3">Mangal ve Nargile Kömürü üretim tesisi</h3>
                            <p>Aktif Karbon, farklı molekül yapıları ile birleşebilen, yüzeyi gözenekli katı bir maddedir. Aktif Karbonun etkileşimi fiziksel ve kimyasal yapısı sayesinde olabileceği gibi kuvveti de molekülün tipine ve Aktif Karbonun tipine bağlı olarak değişebilir. </p>
                            <button class="btn btn-green rounded-4">Detaylı bilgi</button>
                        </div>
                        <div data-aos="fade-down">
                            <ul class="list-unstyled d-flex flex-column flex-sm-row justify-content-center mt-5">
                                <li class="text-center">
                                    <div><img src="{{ asset('assets/images/icon4.png') }}" class="img-fluid" alt="Karbonatlaşma bölgesinde hareketli parça yok"></div>
                                    <p class="mt-3">Karbonatlaşma bölgesinde hareketli parça yok</p>
                                </li>
                                <li class="text-center">
                                    <div><img src="{{ asset('assets/images/icon5.png') }}" class="img-fluid" alt="Sıfır Atık ve Çevre Dostu enerji kaynağı"></div>
                                    <p class="mt-3">Sıfır Atık ve Çevre Dostu enerji kaynağı</p>
                                </li>
                                <li class="text-center">
                                    <div><img src="{{ asset('assets/images/icon6.jpg') }}" class="img-fluid rounded-3" alt="Tam proses kontrolü"></div>
                                    <p class="mt-3">Tam proses kontrolü &amp; web tabanlı görselleştirme</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <div data-aos="fade-down"><img src="{{ asset('assets/images/facilities/biochar-uretim-tesisi.jpg') }}" class="img-fluid rounded-4" alt="Mangal ve Nargile Kömürü üretim tesisi"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3 d-lg-none">
                        <div data-aos="fade-in" class="number">4</div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div data-aos="fade-up"><img src="{{ asset('assets/images/facilities/aktif-camur-kurutma-firini.jpg') }}" class="img-fluid rounded-4" alt="Aktif Çamur Kurutma Fırını"></div>
                    </div>
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-between mt-3 mt-lg-0">
                        <div data-aos="fade-down">
                            <div class="number d-none d-lg-inline-flex">4</div>
                            <h3 class="mt-3">Atık Çamuru Kurutma Fırını</h3>
                            <p>BKC'de, en son teknoloji ve makinelerle Biyo-Atık Döngüsünde devrim yaratmaya kararlıyız. Uzmanlığımız, tarım ve ormancılık atıklarının yanı sıra kanalizasyon çamurunu verimli bir şekilde Yüksek Kaliteli Biyokömüre dönüştüren karbonizasyon işlemidir. Ekibimiz, uzmanlıkları ve deneyimleri mevcut piyasa tekliflerinden daha verimli, etkili ve sürdürülebilir teknoloji geliştirmemizi ve üretmemizi sağlayan, yüksek nitelikli ve deneyimli kişilerden oluşan çeşitli bir gruptan oluşmaktadır.</p>
                            <button class="btn btn-green rounded-5">Detaylı bilgi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="bg-coals">
            <h4><strong>Aktif karbon</strong> üretim<br>tesisi kuruyoruz</h4>
        </div>
    </section>

@endsection

@push('stacked_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#image-carousel', {
                cover: true,
                heightRatio: 0.5,
                height: 1103,
                arrows: true,
                breakpoints: {
                    1200: {
                        height: 786
                    },
                    992: {
                        height: 500
                    },
                    575: {
                        height: 400
                    },
                }
            }).mount();
        });
    </script>
@endpush
