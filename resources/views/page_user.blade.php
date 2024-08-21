<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MPRO Farm</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="<?= asset('') ?>assets_user/img/icon/IconM.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= asset('') ?>assets_user/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= asset('') ?>assets_user/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="<?= asset('') ?>assets_user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= asset('') ?>assets_user/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="<?= asset('') ?>assets_user/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Pondok Indah Estate, Kota Malang, INA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+62 896-2597-6080</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" target="_blank" href="https://www.facebook.com/marcello.ilham"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" target="_blank" href="https://wa.me/6289625976080"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" target="_blank" href="https://www.tiktok.com/@finfantasyfarm_malang"><i class="fab fa-tiktok"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" target="_blank" href="https://www.instagram.com/finfantasyfarm_malang"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <div id="home"></div>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="<?= asset('') ?>assets_user/fontFinFantasy.png" width="200px" alt="Icon" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#service" class="nav-item nav-link">Services</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <div>
                @if(!empty(session('user')))
                <button type="button" class="btn btn-outline-danger" onclick="location.href=`{{ url('logout') }}`">Logout</button>
                @else
                <button type="button" class="btn btn-outline-primary" onclick="location.href=`{{ url('login') }}`">Login</button>
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                    <h1 class="display-4 text-light mb-5">
                        Enjoy Wonderful Day With Your Family
                    </h1>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Read More</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="#" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="<?= asset('') ?>assets_user/img/carousel-1.jpg" alt="" />
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="<?= asset('') ?>assets_user/img/carousel-2.jpg" alt="" />
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="<?= asset('') ?>assets_user/img/carousel-3.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div id="about"></div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Welcome To FinFantasy Farm</p>
                    <h1 class="display-5 mb-4">
                        Why You Should Visit
                        <span class="text-primary">FinFantasy</span> Farm!
                    </h1>
                    <p class="mb-4">
                        We are very proud of the quality of our fish and we are happy to share our experience with visitors who want to learn more about our fish farm.
                    </p>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Quality Fish
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Free Parking
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Natural
                        Environment
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Professional
                        Guide & Security
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Other Fish Equipment Available
                    </h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="<?= asset('') ?>assets_user/img/logo.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">{{ $banners->all_kinds }}</h1>
                    <p class="text-white mb-0">All Kinds Of Fish</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">{{ $banners->total_buyers }}</h1>
                    <p class="text-white mb-0">Total Buyers</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-box-open fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">{{ $banners->fish_package }}</h1>
                    <p class="text-white mb-0">Total Fish Package</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-road fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">{{ $banners->delivery }}</h1>
                    <p class="text-white mb-0">Out Of Town Delivery</p>
                </div>
            </div>
        </div>
        <div id="service"></div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Services</p>
                    <h1 class="display-5 mb-0">
                        Special Services For
                        <span class="text-primary">FinFantasy Farm</span> Visitors
                    </h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Call for more info</p>
                            <h2 class="text-white mb-0">+62 896 2597 6080</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="<?= asset('') ?>assets_user/img/icon/icon-2.png" alt="Icon" />
                    <h5 class="mb-3">Free Parking</h5>
                    <span>
                        Car and motorcycle parking is available which can be used free of charge at our location.
                    </span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="<?= asset('') ?>assets_user/img/icon/icon-3.png" alt="Icon" />
                    <h5 class="mb-3">Animal Photos</h5>
                    <span>
                        You can capture the moment of seeing the results of our fish farming by taking photos.
                    </span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="<?= asset('') ?>assets_user/img/icon/icon-4.png" alt="Icon" />
                    <h5 class="mb-3">Guide Services</h5>
                    <span>
                        We are happy to help answer questions about our livestock products. Please contact our service.
                    </span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="<?= asset('') ?>assets_user/img/icon/icon-6.png" alt="Icon" />
                    <h5 class="mb-3">Shopping</h5>
                    <span>
                        We have a wide variety of fish available for sale, as well as fish supplies such as fish food.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Animal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Fish</p>
                    <h1 class="display-5 mb-0">
                        Let`s See Our <span class="text-primary">FinFantasy Farm</span> Awsome
                        Animals
                    </h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-md-1.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="<?= asset('') ?>assets_user/img/animal-md-1.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Guppy</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-lg-1.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="<?= asset('') ?>assets_user/img/animal-lg-1.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Guppy</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-lg-2.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="<?= asset('') ?>assets_user/img/animal-lg-2.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Guppy</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-md-2.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="<?= asset('') ?>assets_user/img/animal-md-2.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Guppy</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="<?= asset('') ?>assets_user/img/animal-md-3.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="<?= asset('') ?>assets_user/img/animal-md-3.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Guppy</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="<?= asset('') ?>assets_user/img/animal-lg-3.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="<?= asset('') ?>assets_user/img/animal-lg-3.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Guppy</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="contact"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Animal End -->

    <!-- Visiting Hours Start -->
    <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Monday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Tuesday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Wednesday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Thursday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Friday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Saturday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-white mb-5">Contact Info</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Farm</td>
                                <td>Pondok Indah Estate, Kota Malang, INA</td>
                            </tr>
                            <tr>
                                <td>Fish Packages</td>
                                <td>
                                    <p class="mb-2">+62 896-2597-6080</p>
                                    <p class="mb-0">mproguppyfarm@gmail.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>
                                    <p class="mb-2">+62 881-0264-33688</p>
                                    <p class="mb-0">mprobusinessaja@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Visiting Hours End -->

    <!-- Membership Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Fish Package</p>
                    <h1 class="display-5 mb-0">
                        You Can Buy Fish Packages Cheaply
                        <!-- <span class="text-primary">Zoofari</span> -->
                    </h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Special Pricing</a>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($packages as $package)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="{{ asset('assets_user/img/animal-lg-1.jpg') }}" alt="" />
                        <h1 class="display-1">{{ $package->id_package }}</h1>
                        <h4 class="text-white mb-3">{{ $package->type_package }}</h4>
                        <h3 class="text-primary mb-4">{{ $package->price_package }}</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>{{ $package->first_item }}</p>
                        <p><i class="fa fa-check text-primary me-3"></i>{{ $package->second_item }}</p>
                        <p><i class="fa fa-check text-primary me-3"></i>{{ $package->third_item }}</p>
                        <a class="btn btn-outline-light px-4 mt-3" href="{{ $package->buy_now }}">Buy Now</a>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="<?= asset('') ?>assets_user/img/animal-lg-2.jpg" alt="" />
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">Standard</h4>
                        <h3 class="text-primary mb-4">Rp 250.000</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                        <p>
                            <i class="fa fa-check text-primary me-3"></i>Get 4 Pair
                        </p>
                        <p>
                            <i class="fa fa-check text-primary me-3"></i>Free packing
                        </p>
                        <a class="btn btn-outline-light px-4 mt-3" href="">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="membership-item position-relative">
                        <img class="img-fluid" src="<?= asset('') ?>assets_user/img/animal-lg-3.jpg" alt="" />
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">Premium</h4>
                        <h3 class="text-primary mb-4">Rp 500.000</h3>
                        <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
                        <p>
                            <i class="fa fa-check text-primary me-3"></i>Get 6 Pair
                        </p>
                        <p>
                            <i class="fa fa-check text-primary me-3"></i>Free packing and fish food
                        </p>
                        <a class="btn btn-outline-light px-4 mt-3" href="">Buy Now</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Membership End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                Our Clients Say!
            </h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= asset('') ?>assets_user/img/testimonial-1.jpeg" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Ikannya lincah-lincah, dan makan e Joss mas, sehat" semua ikan nya. Makasih loh ada bonus e 😊👍🏻
                        </p>
                        <h5 class="mb-1">Gogiek Seto</h5>
                        <span class="fst-italic">Malang</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= asset('') ?>assets_user/img/testimonial-2.jpeg" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Sudah sampai.. aman semua.. dapet bonus 1pair, terimakasih banyak🙏🏻
                        </p>
                        <h5 class="mb-1">Hendra Prabowo</h5>
                        <span class="fst-italic">Yogyakarta</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= asset('') ?>assets_user/img/testimonial-3.jpeg" style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Beli ikan guppy hasil ternak di sini emang worth it. Kualitasnya bagus, harganya masih terjangkau, dan penjualnya juga ramah.
                        </p>
                        <h5 class="mb-1">Abby Decta</h5>
                        <span class="fst-italic">Malang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>Kota Malang, Indonesia
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>+62 896-2597-6080
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>finfantasyfarm@gmail.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-sm-square bg-white text-primary me-1" target="_blank" href="https://www.facebook.com/marcello.ilham"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" target="_blank" href="https://wa.me/6289625976080"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" target="_blank" href="https://www.tiktok.com/@finfantasyfarm_malang"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-0" target="_blank" href="https://www.instagram.com/finfantasyfarm_malang"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Don't miss our latest information! Sign up now to get updates straight to your inbox.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">FinFantasy Team</a>, All
                        Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('') ?>assets_user/lib/wow/wow.min.js"></script>
    <script src="<?= asset('') ?>assets_user/lib/easing/easing.min.js"></script>
    <script src="<?= asset('') ?>assets_user/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= asset('') ?>assets_user/lib/counterup/counterup.min.js"></script>
    <script src="<?= asset('') ?>assets_user/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= asset('') ?>assets_user/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= asset('') ?>assets_user/js/main.js"></script>
</body>

</html>