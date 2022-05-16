<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laravel Backpack</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">Laravel Backpack</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#pengertian" class="nav-item nav-link">Pengertian</a>
                        <a href="#kenapa" class="nav-item nav-link">Kelebihan</a>
                        <a href="" class="nav-item nav-link">Fitur</a>
                    </div>
                    <a href="/admin" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Demo</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Apa itu Laravel Backpack?</h1>
                            <p class="text-white pb-3 animated slideInDown">Laravel Backpack adalah package Laravel yang mempermudahmu untuk membuat dashboard admin dengan mudah cepat. Laravel Backpack sudah digunakan oleh beribu-ribu web developer sejak 2016.</p>
                            
                            <a href="/admin" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Demo</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/tas.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">Pengertian<span></span></p>
                        <h1 class="mb-5">Apa Laravel Backpack itu?</h1>
                        <p class="mb-4">Laravel Backpak menggunakan arsitektur mvc yang simple  untuk membuat fitur CRUD,selain itu laravel backpack hanya menggunakan teknologi yang sedikit yaitu laravel,bootstrap, dan jquery. kamu bisa menggunakan teknologi yang lain seperti vue,react,Mix,NPM dll, tetapi kamu tidak harus melakukannya.</p>
                        {{-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a> --}}
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/tas.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

               <!-- Newsletter Start -->
               <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 text-center">
                            <p class="section-title text-white justify-content-center"><span></span>Kelebihan<span></span></p>
                            <h1 class="text-center text-white mb-4">Kenapa harus Laravel Backpack</h1>
                            <p class="text-white mb-4"> Laravel Breeze itu ramah untuk pemula, jadi unutk kalian yang baru menggunakan framework laravel laravel breeze ini adalah pilihan starter kit yang bagus untuk kalian pelajari. Tidak seperti Jetstream, Breeze ini lebih simple dan mudah untuk di kustomisasi</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->
    

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Fitur-fitur<span></span></p>
                    <h1 class="text-center mb-5">Fitur apa yang ada di laravel backpack</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">List</h5>
                            <p class="m-0">Difitur ini terdapat search ,read,pagination,filter,dan export.</p>
                            {{-- <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Create & Update</h5>
                            <p class="m-0">Kamu dapat memasukan data banyak di database dalam satu input, selain itu terdapat validaton ,dan multi language  .</p>
                            {{-- <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Delete</h5>
                            <p class="m-0">Kamu dapat menghapus data atau banyak data sekaligus, kamu juga dapat menjadikanya soft delete
                                .</p>
                            {{-- <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-mail-bulk fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Clone</h5>
                            <p class="m-0">Kamu dapat mengduplikat data yang telah ada, daripada kamu membuatnya ulang.</p>
                            {{-- <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Reorder</h5>
                            <p class="m-0">Izinkan admin Kamu untuk menarik & melepas entri untuk menyusun ulang dan menyusunnya. Kedalaman satu tingkat, kedalaman dua tingkat... atau dalam hierarki bersarang tak terbatas.</p>
                            {{-- <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Revise</h5>
                            <p class="m-0">Selalu tahu siapa yang mengubah apa. Kemudian izinkan admin kamu untuk Membatalkan dan Mengulangi perubahan. alias sifat audit atau log audit.</p>
                            {{-- <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


 

        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Sumber Informasi<span></span></p>
                        <a class="btn btn-link" href="https://backpackforlaravel.com/docs">Dokumentasi</a>
                        <a class="btn btn-link" href="https://github.com/Laravel-Backpack">Laravel Backpak Github</a>
                        <a class="btn btn-link" href="https://www.youtube.com/watch?v=GP91IUZ6DGI">Tutorial</a>
                        <a class="btn btn-link" href="https://github.com/IRS-dev/Laravel-Backpack-008">Github Repo</a>
                        
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <p>Created by IRSDEV</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>