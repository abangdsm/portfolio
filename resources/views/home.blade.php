<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Main CSS File -->
    <link href="css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex flex-column justify-content-center">

        <i class="header-toggle d-xl-none bi bi-list"></i>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
                {{-- <li><a href="#portfolio"><i class="bi bi-hdd-stack navicon"></i><span>Portfolio</span></a></li> --}}
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
            </ul>
        </nav>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="img/hero-bg.jpg" alt="">

            <div class="container" data-aos="zoom-out">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h2>Dwi Star Muda</h2>
                        <p>Saya adalah <span class="typed"
                                data-typed-items="Web Developer, Mobile Apps Developer, Freelancer, Enterpreneur">Web
                                Developer</span><span class="typed-cursor typed-cursor--blink"
                                aria-hidden="true"></span></p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/dwistar007" target="_blank"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://www.youtube.com/@dwistarmuda" target="_blank"><i
                                    class="bi bi-youtube"></i></a>
                            <a href="https://www.linkedin.com/in/dwi-star-muda-6b3b05259" target="_blank"><i
                                    class="bi bi-linkedin"></i></a>
                            <a href="https://github.com/abangdsm" target="_blank"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Saya</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Full Stack Developer</h2>
                        <p>
                            <i>Berikut adalah <q>War Tools</q> saya dalam bekerja.</i>
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Framework PHP:</strong>
                                        <span>Laravel</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Framework Mobile Apps:</strong>
                                        <span>Flutter</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Text Editor:</strong>
                                        <span>Visual Studio Code</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Version Control:</strong>
                                        <span>GitHub</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Unit Test:</strong>
                                        <span>PHP Unit</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i>
                                        <strong>Hosting:</strong>
                                        <span>Shared Hosting</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Skill Ngoding</h2>
                <p>Sebagai <q>Full Stack Developer</q> tentu saya tidak melampui ekspektasi Anda. Skill saya tidak
                    banyak, namun saya belajar banyak untuk itu.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">

                    <div class="col-lg-6">

                        <p><strong>Bahasa Pemrograman</strong></p>

                        <div class="progress">
                            <span class="skill"><span>HTML</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>PHP</span> <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>SQL</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Dart</span> <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                    <div class="col-lg-6">

                        <p><strong>PHP Framework</strong></p>

                        <div class="progress">
                            <span class="skill"><span>Laravel</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>CodeIgniter</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <p><strong>CSS Framework</strong></p>

                        <div class="progress">
                            <span class="skill"><span>Bootstrap</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Tailwind CSS</span> <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <p><strong>Mobile Apps Framework</strong></p>

                        <div class="progress">
                            <span class="skill"><span>Flutter</span> <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Services Section -->
        {{-- <section id="portfolio" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Nesciunt Mete</h3>
                            </a>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                iure perferendis tempore et consequatur.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Eosle Commodi</h3>
                            </a>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                                hic non ut nesciunt dolorem.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bi bi-easel"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Ledo Markt</h3>
                            </a>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                voluptas adipisci eos earum corrupti.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Asperiores Commodit</h3>
                            </a>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                                sit provident adipisci neque.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bi bi-calendar4-week icon"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Velit Doloremque</h3>
                            </a>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                                animi at autem alias eius labore.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-pink position-relative">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Dolori Architecto</h3>
                            </a>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section> --}}
        <!-- /Services Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak Saya</h2>
            </div>
            <!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Huta I, Timbaan, Kec. Bandar</p>
                                <p>Kab. Simalungun, Sumatera Utara.</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    {{-- End of col --}}

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            {{-- <i class="bi bi-telephone flex-shrink-0"></i> --}}
                            <i class="bi bi-whatsapp flex-shrink-0"></i>
                            <div>
                                <h3>Whatsapp</h3>
                                <p>+6281264643110</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>dsm@mwsender.com</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container">
            <h3 class="sitename">Dwi Star Muda</h3>
            <p>Web Developer | Mobile Apps Developer | Freelancer | Enterpreneur</p>
            <div class="social-links d-flex justify-content-center">

                <a href="https://www.facebook.com/dwistar007" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.youtube.com/@dwistarmuda" target="_blank"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/in/dwi-star-muda-6b3b05259" target="_blank"><i
                        class="bi bi-linkedin"></i></a>
                <a href="https://github.com/abangdsm" target="_blank"><i class="bi bi-github"></i></a>
            </div>
            <div class="container">
                <div class="copyright">
                    <p>Copyright &copy; <?= date('Y') ?> PT. Digital Berdaya Solusi &mdash; Crafted with &#10084; By Dwi
                        Star Muda</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/typed.js/typed.umd.js"></script>
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/waypoints/noframework.waypoints.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>
