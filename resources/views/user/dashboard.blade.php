<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>KursusPedia</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('css/templatemo-topic-listing.css') }}" rel="stylesheet">      
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/KURSUSPEDIAlogo.png') }}" alt="Logo KursusPedia" style="height: 70px;">
                        <span>KursusPedia</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Beranda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Kursus</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Tim Kami</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Kontak</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block dropdown">
                            <a href="#" class="navbar-icon bi-person" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                @auth
                                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Logout</button>
                                        </form>
                                    </li>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-4xl lg:text-5xl font-extrabold text-gray-900 leading-tight mb-6">Advance your <span class="text-indigo-600">engineering skills</span> with us.</h1>

                            <h6 class="text-center"> Temukan kursus yang tepat untuk meningkatkan skill dan karier Anda</h6>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <div class="custom-block bg-white shadow-lg">
                                <a href="topics-detail.html">
                                    <div class="d-flex">
                                        <div>
                                            <h5 class="mb-2">Tentang KursusPedia</h5>

                                            <p class="mb-0">KursusPedia adalah platform marketplace kursus terpercaya yang menghubungkan para pencari ilmu dengan penyedia kursus terbaik di Indonesia. Kami hadir sebagai solusi untuk memudahkan akses pendidikan berkualitas bagi semua kalangan yang ingin mengembangkan skill dan karier.</p>
                                        </div>
                                    </div>

                                    <img src="{{ asset('images/topics/undraw_Remote_design_team_re_urdx.png') }}" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="{{ asset('images/businesswoman-using-tablet-analysis.jpg') }}" class="custom-block-image img-fluid" alt="">

                                    <div class="custom-block-overlay-text d-flex">
                                        <div>
                                            <h5 class="text-white mb-2">Tentang KursusPedia</h5>

                                            <p class="text-white"> Kami berkomitmen untuk terus berinovasi dalam memberikan pengalaman terbaik bagi pelajar dan penyedia kursus. Dengan mengutamakan transparansi, kualitas, dan kemudahan akses, kami berupaya menciptakan ekosistem pembelajaran yang saling menguntungkan dan mendukung pengembangan sumber daya manusia Indonesia.</p>
                                            <a href="{{ asset('topics-detail-user.html')}} " class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                        </div>
                                    </div>

                                    <div class="section-overlay"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>



            <section class="explore-section section-padding" id="section_2">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Kategori Kursus</h1>
                        </div>

                    </div>

                <div class="container-fluid">
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Design</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Programming & IT</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="{{ route('course.show', 'web-design') }}">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Belajar membuat tampilan website dengan HTML, CSS, dan Figma</p>
                                                        </div>
                                                    </div>

                                                    <img src="{{ asset('assets/web.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="{{ route('course.show', 'graphic') }}">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graphic</h5>

                                                                <p class="mb-0">Pelajari cara membuat desain visual dengan Photoshop & Illustrator</p>
                                                        </div>
                                                    </div>

                                                    <img src="{{ asset('assets/grafik.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="{{ route('course.show', 'uiux-design') }}">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">UI/UX Design</h5>

                                                                <p class="mb-0">Desain logo kreatif untuk brand profesional</p>
                                                        </div>
                                                    </div>

                                                    <img src="{{ asset('assets/uiux.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="{{ route('course.show', 'affiliate') }}">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Affiliate Marketing</h5>

                                                                <p class="mb-0">Dapatkan penghasilan dari promosi produk orang lain</p>
                                                            </div>
                                                        </div>

                                                        <img src="{{ asset('assets/affiliate.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="{{ route('course.show', 'sosmed') }}">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Social Media Marketing</h5>

                                                                <p class="mb-0">Optimalkan Instagram, Facebook, TikTok untuk bisnis</p>
                                                            </div>
                                                        </div>

                                                        <img src="{{ asset('assets/medsos.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="custom-block bg-white shadow-lg">
                                                    <a href="{{ route('course.show', 'digital') }}">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mb-2">Digital Marketing</h5>

                                                                <p class="mb-0">Strategi pemasaran online menggunakan iklan, SEO, dan content</p>
                                                            </div>
                                                        </div>

                                                        <img src="{{ asset('assets/digital.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                                        <div class="col-lg-6 col-md-8 col-12 mb-4 mx-auto">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="{{ route('course.show', 'finansial') }}">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Financial Planning</h5>

                                                            <p class="mb-0">Merencanakan keuangan pribadi untuk masa depan</p>
                                                        </div>
                                                    </div>

                                                    <img src="{{ asset('images/topics/undraw_Finance_re_gnv2.png') }}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="{{ route('course.show', 'laravel') }}">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Laravel PHP Framework</h5>

                                                            <p class="mb-0">Membangun aplikasi web menggunakan Laravel</p>
                                                        </div>
                                                    </div>

                                                    <img src="{{ asset('assets/laravel.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="{{ route('course.show', 'mobile') }}">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Mobile Development Flutter</h5>

                                                            <p class="mb-0">Buat aplikasi Android/iOS dalam 1 codebase</p>
                                                        </div>
                                                    </div>

                                                    <img src="{{ asset('assets/mobile.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="{{ route('course.show', 'cyber') }}">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Cyber Security Basic</h5>

                                                            <p class="mb-0">Mengenal ancaman, perlindungan data, dan privasi online</p>
                                                        </div>
                                                    </div>

                                                    <img src="{{ asset('assets/cyber.jpeg') }}" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>


            <section class="team-section section-padding" id="section_3">
                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-12 text-center">
                            <h2 class="mb-4">Tim Kami</h2>
                            <p class="text-muted">Berikut adalah anggota tim KursusPedia.</p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        
                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-member text-center shadow-sm p-4 rounded" style="background-color: #e1fcf9;">
                                <img src="{{ asset('assets/jeje.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Team Member 1" width="120" height="120">
                                <h5 class="mb-1">Jesulin Noni Novelis Wattilete</h5>
                                <p class="text-muted mb-0">Founder & CEO</p>
                                <small class="text-muted">Mengatur visi dan arah strategis perusahaan.</small>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-member text-center shadow-sm p-4 rounded" style="background-color: #e1fcf9;">
                                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto;" class="mb-3">
                                    <img src="{{ asset('assets/ghefira.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Team Member 2">
                                </div>
                                <h5 class="mb-1">Ghefira Novita Puti</h5> <br>
                                <p class="text-muted mb-0">CTO & Backend Engineer</p>
                                <small class="text-muted">Mengelola server, database, dan keamanan sistem.</small>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-member text-center shadow-sm p-4 rounded" style="background-color: #e1fcf9;">
                                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto;" class="mb-3">
                                    <img src="{{ asset('assets/dila.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Team Member 2">
                                </div>
                                <h5 class="mb-1">Andi Nurilah Darsiah</h5> <br>
                                <p class="text-muted mb-0">UI/UX Designer</p>
                                <small class="text-muted">Merancang antarmuka dan pengalaman pengguna.</small>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-member text-center shadow-sm p-4 rounded" style="background-color: #e1fcf9;">
                                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto;" class="mb-3">
                                    <img src="{{ asset('assets/melda.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Team Member 2">
                                </div>
                                <h5 class="mb-1">Melda Olivia Lesbatta</h5>
                                <p class="text-muted mb-0">Marketing Specialist</p>
                                <small class="text-muted">Menjalankan strategi pemasaran dan promosi.</small>
                            </div>
                        </div> <br>

                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-member text-center shadow-sm p-4 rounded" style="background-color: #e1fcf9;">
                                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto;" class="mb-3">
                                    <img src="{{ asset('assets/dani.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Team Member 2">
                                </div>
                                <h5 class="mb-1">Danny F B Tahir</h5> <br>
                                <p class="text-muted mb-0">Content Creator</p>
                                <small class="text-muted">Membuat materi kursus dan konten sosial media.</small>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-member text-center shadow-sm p-4 rounded" style="background-color: #e1fcf9;">
                                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto;" class="mb-3">
                                    <img src="{{ asset('assets/noval.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Team Member 2">
                                </div>
                                <h5 class="mb-1">Novaldy Brayn Rumteh</h5>
                                <p class="text-muted mb-0">Frontend Developer</p>
                                <small class="text-muted">Membangun tampilan web responsif dan interaktif.</small>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-member text-center shadow-sm p-4 rounded" style="background-color: #e1fcf9;">
                                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto;" class="mb-3">
                                    <img src="{{ asset('assets/fahmi.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Team Member 2">
                                </div>
                                <h5 class="mb-1">Fahmi Ahmad</h5> <br>
                                <p class="text-muted mb-0">Customer Support</p>
                                <small class="text-muted">Membantu pelanggan dalam proses belajar dan kendala teknis.</small>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-member text-center shadow-sm p-4 rounded" style="background-color: #e1fcf9;">
                                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto;" class="mb-3">
                                    <img src="{{ asset('assets/kevin.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;" alt="Team Member 2">
                                </div>
                                <h5 class="mb-1">Christhoper Kevin Lay</h5>
                                <p class="text-muted mb-0">Project Manager</p>
                                <small class="text-muted">Memastikan semua proyek berjalan sesuai timeline.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5">Alamat & Kontak</h2>
                        </div>

                        <div class="row justify-content-center align-items-start g-4">
                            <div class="col-md-5">
                                <iframe class="rounded shadow" 
                                    src="https://www.google.com/maps/embed?pb=..." 
                                    width="100%" 
                                    height="250" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>

                            <div class="col-md-4">
                                <h4 class="fw-bold mb-3">KursusPedia</h4>
                                <p>Jl. A. Y. Patty, Kel Honipopu, Kec. Sirimau, Kota Ambon, Maluku</p>
                                <hr>
                                <p class="mb-1"><strong>Telepon</strong> <a href="tel:+6282197813699" class="text-success">+62-821-9781-3699</a></p>
                                <p><strong>Email</strong> <a href="mailto:info@kursuspedia.com" class="text-info">info@kursuspedia.com</a></p>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </section>
        </main>

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="index.html">
                            <img src="{{ asset('assets/KURSUSPEDIAlogo.png') }}" alt="Logo KursusPedia" style="height: 70px;">
                            <span>KursusPedia</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Information</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel:+6282197813699" class="site-footer-link">
                               +62-821-9781-3699
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@kursuspedia.com" class="site-footer-link">
                                info@kursuspedia.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <p class="copyright-text mt-lg-5 mt-4">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a> Distribution <a href="https://themewagon.com">ThemeWagon</a></p>
                        
                    </div>

                </div>
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>
