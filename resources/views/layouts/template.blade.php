<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>{{ $pagetitle }}</title>


    <!-- G-FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Jacques+Francois&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Itim&family=Jacques+Francois&display=swap"
        rel="stylesheet">
    <!-- poppins extrabold -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Itim&family=Jacques+Francois&family=Poppins:wght@800&display=swap"
        rel="stylesheet">
    <!-- inter bold -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Itim&family=Jacques+Francois&family=Poppins:wght@800&display=swap"
        rel="stylesheet">
    <!-- AKHIR G-FONT -->

    <!-- panggil css file di dalam laravel -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- akhir panggil css file di dalam laravel -->

</head>

<body>

    <!-- awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top nav-template">
        <!-- akhir logo three toruz -->
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('image/Logo.PNG') }}" alt="" width="80" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item {{ Request::segment(1) === null ? 'active' : '' }}">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) == 'product' ? 'active' : '' }}">
                        <a class="nav-link" href="product">PRODUCT</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) == 'promo' ? 'active' : '' }}">
                        <a class="nav-link" href="promo">PROMO</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) == 'article' ? 'active' : '' }}">
                        <a class="nav-link" href="article">ARTICLE</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) == 'aboutUs' ? 'active' : '' }}">
                        <a class="nav-link" href="aboutUs">ABOUT US</a>
                    </li>
                    <li class="nav-item {{ Request::segment(1) == 'contact' ? 'active' : '' }}">
                        <a class="nav-link" href="contact">CONTACT US</a>
                    </li>
                    {{-- <li class="nav-item {{ Request::segment(1) == '/banner/read' ? 'active' : '' }}">
                        <a class="nav-link" href="/banner/read">ADMIN</a>
                    </li> --}}
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="/banner_view">Home Banner</a></li>
                            <li><a class="dropdown-item" href="/category_view">Category</a></li>
                            <li><a class="dropdown-item" href="/product_view">Product</a></li>
                            <li><a class="dropdown-item" href="/review_view">Customer Review</a></li>
                            <li><a class="dropdown-item" href="/promo_view">Promo</a></li>
                            <li><a class="dropdown-item" href="/locTime_view">Location & Operational Hours</a></li>
                            <li><a class="dropdown-item" href="/article_view">Article</a></li>
                            <li><a class="dropdown-item" href="/funfact_view">Products & Articles</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->


    <!-- Bagian isi dari tiap page -->
    <div id="layout-content-container">

        <!-- Content here -->

        @yield('layout_content')

    </div>
    <!-- Akhir isi dari tiap page -->

    {{-- ==================================================== --}}
    {{-- FOOTER --}}
    <footer class="pt-lg-10 pt-5 footer border-top shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- about company -->
                    <div class="mb-4">
                        <img src="../assets/images/brand/logo/logo.svg" alt="" class="logo-inverse ">
                        <div class="mt-4">
                            <h3 class="fw-bold mb-3">THREE TORUZ</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo.
                            </p>
                            <!-- social media -->
                            <div class="fs-4 mt-4">
                                <!--Facebook-->
                                <a href="https://www.facebook.com/profile.php?id=100071521481050" class="icon me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                                <!--Youtube-->
                                <a href="https://www.youtube.com/@GKIMojokerto" class="icon me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path
                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                    </svg>
                                </a>

                                <!--Instagram-->
                                <a href="https://www.instagram.com/threetoruz/" class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <!-- list -->
                        <h3 class="fw-bold mb-3">Menu</h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="/" class="nav-footers"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="product" class="nav-footers"><i class="fa fa-shopping-cart"></i> Product</a>
                            </li>
                            <li><a href="promo" class="nav-footers"><i class="fa fa-percent"></i> Promo</a></li>
                            <li><a href="article" class="nav-footers"><i class="fa fa-newspaper-o"></i> Article</a>
                            </li>
                            <li><a href="aboutUs" class="nav-footers"><i class="fa fa-info-circle"></i> About Us</a>
                            </li>
                            <li><a href="contact" class="nav-footers"><i class="fa fa-phone"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <!-- contact info -->
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3">Get in touch</h3>

                        <p> <i class="fa fa-map-marker"></i> Citraland, Surabaya Barat</p>

                        <p class="mb-1"> <i class="fa fa-envelope"></i> Email: <a
                                href="mailto:gki.mojokerto@gmail.com">threetoruz@gmail.com</a></p>
                        <p><i class="fa fa-phone"></i> Phone: <span class=" fw-semibold">+62 (?)</span></p>

                    </div>
                </div>
            </div>
            <div class="row align-items-center g-0 border-top py-2 mt-6">
                <!-- Desc -->
                <div class="col-lg-4 col-md-5 col-12">
                    <span>© <span id="copyright2">
                            <script>
                                document.getElementById('copyright2').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>
                        </span>Three Toruz</span>
                        <p style="font-size: 12px;">Developed by: Marshanda 0706012210056 & Sophia Madlentsy Tambunan 0706012210058</p>
                </div>

                <!-- Links -->
                <div class="col-12 col-md-7 col-lg-8 d-md-flex justify-content-end">
                    <nav class="nav nav-footer">
                        <a class="nav-footers ps-0"
                            href="https://www.termsfeed.com/dictionary/privacy-policy-definition/">Privacy Policy</a>
                        <a class="nav-footers px-2 px-md-3"
                            href="https://www.privacypolicies.com/blog/sample-cookies-policy-template/">Cookie Notice
                        </a>
                        <a class="nav-footers"
                            href="https://termly.io/resources/templates/terms-of-use-template/">Terms
                            of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    {{-- END OF FOOTER --}}

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->

    <!-- Javascriptnya -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
