<?php include_once 'Views/template/header_principal.php'; ?>



<!-- ============================ Sale Offer End =========================== -->
<!-- ==================== Header Start Here ==================== -->
<header class="header">
    <div class="container container-full">
        <nav class="header-inner flx-between">
            <!-- Logo Start -->
            <div class="logo">
                <a href="index.html" class="link white-version">
                    <img src="assets/images/logo/logo-two.png" alt="Logo">
                </a>
                <a href="index.html" class="link dark-version">
                    <img src="assets/images/logo/white-logo.png" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->

            <!-- Menu Start  -->
            <div class="header-menu d-lg-block d-none">

                <ul class="nav-menu flx-align">
                    <li class="nav-menu__item">
                        <a href="contact.html" class="nav-menu__link">Inicio</a>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Tienda</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="all-product.html" class="nav-submenu__link"> Todos los Productos</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="product-details.html" class="nav-submenu__link"> Detalles del Producto</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Plantillas</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="profile.html" class="nav-submenu__link"> Perfil</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart.html" class="nav-submenu__link"> Carrito de Compras</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-personal.html" class="nav-submenu__link"> Dirección de Envío</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-payment.html" class="nav-submenu__link"> Método de Pago</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-thank-you.html" class="nav-submenu__link"> Vista Previa del Pedido</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="dashboard.html" class="nav-submenu__link"> Panel de Control</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="blog.html" class="nav-submenu__link"> Blog</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="blog-details.html" class="nav-submenu__link"> Detalles del Blog</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="blog-details-sidebar.html" class="nav-submenu__link"> Detalles del Blog con
                                    Barra Lateral</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.html" class="nav-menu__link">Contacto</a>
                    </li>
                </ul>

            </div>
            <!-- Menu End  -->

            <!-- Header Right start -->
            <div class="header-right flx-align">
                <a href="cart.html" class="header-right__button cart-btn position-relative">
                    <img src="assets/images/icons/cart.svg" alt="" class="white-version">
                    <img src="assets/images/icons/cart-white.svg" alt="" class="dark-version">
                    <span class="qty-badge font-12">0</span>
                </a>

                <!-- Light Dark Mode -->
                <div class="theme-switch-wrapper position-relative">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" class="d-none" id="checkbox">
                        <span class="slider text-black header-right__button white-version">
                            <img src="assets/images/icons/sun.svg" alt="">
                        </span>
                        <span class="slider text-black header-right__button dark-version">
                            <img src="assets/images/icons/moon.svg" alt="">
                        </span>
                    </label>
                </div>

                <div class="header-right__inner gap-3 flx-align d-lg-flex d-none">

                    <a href="register.html" class="btn btn-main pill">
                        <span class="icon-left icon">
                            <img src="assets/images/icons/user.svg" alt="">
                        </span>Crear una cuenta
                    </a>
                    <div class="language-select flx-align select-has-icon">
                        <img src="assets/images/icons/globe.svg" alt="" class="globe-icon white-version">
                        <img src="assets/images/icons/globe-white.svg" alt="" class="globe-icon dark-version">
                        <select class="select py-0 ps-2 border-0 fw-500">
                            <option value="1">Eng</option>
                            <option value="2">Bn</option>
                            <option value="3">Eur</option>
                            <option value="4">Urd</option>
                        </select>
                    </div>
                </div>
                <button type="button" class="toggle-mobileMenu d-lg-none"> <i class="las la-bars"></i> </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>


<!-- ==================== Fin del Encabezado ==================== -->
<!--========================== Inicio de la Sección del Banner ==========================-->
<section class="hero section-bg z-index-1">
    <img src="assets/images/gradients/banner-gradient.png" alt="" class="bg--gradient white-version">

    <img src="assets/images/shapes/element-moon1.png" alt="" class="element one">
    <img src="assets/images/shapes/element-moon2.png" alt="" class="element two">


    <div class="container container-two">
        <div class="row align-items-center gy-sm-5 gy-4">
            <div class="col-lg-6">
                <div class="hero-inner position-relative pe-lg-5">
                    <div>
                        <h1 class="hero-inner__title">Proyectos y Plantillas Únicas</h1>
                        <p class="hero-inner__desc font-18">Descubre una selección única de proyectos personales y
                            plantillas premium creadas por un programador backend apasionado. Inspírate, aprende y
                            encuentra soluciones que se adapten a tus necesidades.</p>
                        <div class="position-relative">
                            <div class="search-box">
                                <input type="text"
                                    class="common-input common-input--lg pill shadow-sm auto-suggestion-input"
                                    placeholder="Buscar tema, complementos y más...">
                                <button type="submit" class="btn btn-main btn-icon icon border-0"><img
                                        src="assets/images/icons/search.svg" alt=""></button>
                            </div>

                            <ul class="auto-suggestion-list">
                                <li>
                                    <a href="#" class="auto-suggestion-list__item w-100 text-body">Negocios en
                                        HTML</a>
                                </li>
                                <li>
                                    <a href="#" class="auto-suggestion-list__item w-100 text-body">Negocios en
                                        WordPress</a>
                                </li>
                                <li>
                                    <a href="#" class="auto-suggestion-list__item w-100 text-body">Negocios en
                                        CMS</a>
                                </li>
                                <li>
                                    <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce en
                                        HTML</a>
                                </li>
                                <li>
                                    <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce en
                                        WordPress</a>
                                </li>
                                <li>
                                    <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce en
                                        CMS</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Lista de Tecnologías Inicio -->
                        <div class="product-category-list">
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="WordPress">
                                <img src="assets/images/thumbs/tech-icon1.png" alt="" class="white-version">
                                <img src="assets/images/thumbs/tech-icon-white1.png" alt="" class="dark-version">
                            </a>
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Laravel">
                                <img src="assets/images/thumbs/tech-icon2.png" alt="">
                            </a>
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="PHP">
                                <img src="assets/images/thumbs/tech-icon3.png" alt="" class="white-version">
                                <img src="assets/images/thumbs/tech-icon-white3.png" alt="" class="dark-version">
                            </a>
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="HTML">
                                <img src="assets/images/thumbs/tech-icon4.png" alt="">
                            </a>
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Sketch">
                                <img src="assets/images/thumbs/tech-icon5.png" alt="">
                            </a>
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Figma">
                                <img src="assets/images/thumbs/tech-icon6.png" alt="">
                            </a>
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Bootstrap">
                                <img src="assets/images/thumbs/tech-icon7.png" alt="">
                            </a>
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Tailwind">
                                <img src="assets/images/thumbs/tech-icon8.png" alt="">
                            </a>
                            <a href="all-product.html" class="product-category-list__item" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="React">
                                <img src="assets/images/thumbs/tech-icon9.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-thumb">
                    <img src="assets/images/thumbs/banner-img.png" alt="">
                    <img src="assets/images/shapes/dots.png" alt="" class="dotted-img white-version">
                    <img src="assets/images/shapes/dots-white.png" alt="" class="dotted-img dark-version">
                    <img src="assets/images/shapes/element2.png" alt="" class="element two end-0">
                    <img src="assets/images/shapes/element2.png" alt="" class="element two end-1">


                    <div class="statistics animation bg-main text-center">
                        <h5 class="statistics__amount text-white">50k</h5>
                        <span class="statistics__text text-white font-14">Clientes</span>
                    </div>

                    <div class="statistics style-two bg-white text-center">
                        <h5 class="statistics__amount statistics__amount-two text-heading">22k</h5>
                        <span class="statistics__text text-heading font-14">Temas y Complementos</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!--========================== Banner Section End ==========================-->

<!-- ======================== popular Section Start =========================== -->
<section class="popular padding-y-120 overflow-hidden">
    <div class="container container-two">
        <div class="section-heading style-left mb-64">
            <h5 class="section-heading__title">Categorias Populares</h5>
        </div>
        <div class="popular-slider arrow-style-two row gy-4">
            <div class="col-lg-2">
                <a href="all-product.html" class="popular-item w-100">
                    <span class="popular-item__icon">
                        <img src="assets/images/icons/popular-icon1.svg" alt="">
                    </span>
                    <h6 class="popular-item__title font-18">WordPress</h6>
                    <span class="popular-item__qty text-body">15,296</span>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="all-product.html" class="popular-item w-100">
                    <span class="popular-item__icon">
                        <img src="assets/images/icons/popular-icon2.svg" alt="">
                    </span>
                    <h6 class="popular-item__title font-18">Plugin</h6>
                    <span class="popular-item__qty text-body">15,296</span>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="all-product.html" class="popular-item w-100">
                    <span class="popular-item__icon">
                        <img src="assets/images/icons/popular-icon3.svg" alt="">
                    </span>
                    <h6 class="popular-item__title font-18">HTML</h6>
                    <span class="popular-item__qty text-body">15,296</span>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="all-product.html" class="popular-item w-100">
                    <span class="popular-item__icon">
                        <img src="assets/images/icons/popular-icon4.svg" alt="">
                    </span>
                    <h6 class="popular-item__title font-18">Java Script</h6>
                    <span class="popular-item__qty text-body">15,296</span>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="all-product.html" class="popular-item w-100">
                    <span class="popular-item__icon">
                        <img src="assets/images/icons/popular-icon5.svg" alt="">
                    </span>
                    <h6 class="popular-item__title font-18">Mobile App</h6>
                    <span class="popular-item__qty text-body">15,296</span>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="all-product.html" class="popular-item w-100">
                    <span class="popular-item__icon">
                        <img src="assets/images/icons/popular-icon6.svg" alt="">
                    </span>
                    <h6 class="popular-item__title font-18">PHP Script</h6>
                    <span class="popular-item__qty text-body">15,296</span>
                </a>
            </div>
            <div class="col-lg-2">
                <a href="all-product.html" class="popular-item w-100">
                    <span class="popular-item__icon">
                        <img src="assets/images/icons/popular-icon4.svg" alt="">
                    </span>
                    <h6 class="popular-item__title font-18">Java Script</h6>
                    <span class="popular-item__qty text-body">15,296</span>
                </a>
            </div>
        </div>
        <div class="popular__button text-center">
            <a href="all-product.html"
                class="font-18 fw-600 text-heading hover-text-main text-decoration-underline font-heading">Explorar mas
            </a>
        </div>
    </div>
</section>


<!-- ======================== popular Section End =========================== -->
<!-- =========================== Arrival Product Section Start ========================== -->
<section class="arrival-product padding-y-120 section-bg position-relative z-index-1">
    <img src="assets/images/gradients/product-gradient.png" alt="" class="bg--gradient white-version">

    <img src="assets/images/shapes/element2.png" alt="" class="element one">

    <div class="container container-two">
        <div class="section-heading">
            <h3 class="section-heading__title">Nuevos Proyectos</h3>
        </div>


        <ul class="nav common-tab justify-content-center nav-pills mb-48" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                    type="button" role="tab" aria-controls="pills-all" aria-selected="true">All Item</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-wordPress-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-wordPress" type="button" role="tab" aria-controls="pills-wordPress"
                    aria-selected="false">wordPress</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-php-tab" data-bs-toggle="pill" data-bs-target="#pills-php"
                    type="button" role="tab" aria-controls="pills-php" aria-selected="false">php</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-siteTemplate-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-siteTemplate" type="button" role="tab" aria-controls="pills-siteTemplate"
                    aria-selected="false">java</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-blogging-tab" data-bs-toggle="pill" data-bs-target="#pills-blogging"
                    type="button" role="tab" aria-controls="pills-blogging" aria-selected="false">crud</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing"
                    aria-selected="false">js</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-plugins-tab" data-bs-toggle="pill" data-bs-target="#pills-plugins"
                    type="button" role="tab" aria-controls="pills-plugins" aria-selected="false">plugins</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-uiTemplate-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-uiTemplate" type="button" role="tab" aria-controls="pills-uiTemplate"
                    aria-selected="false">UI Template</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                tabindex="0">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS productos digitales título
                                        aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$120</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">(16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Vista en
                                        Vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS productos digitales título
                                        aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">(16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Vista en
                                        Vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS productos digitales título
                                        aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">(16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Vista en
                                        Vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS productos digitales título
                                        aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">(16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Vista en
                                        Vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS para productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$99</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1300 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo
                                        en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repite las mismas traducciones para los siguientes bloques -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS para productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo
                                        en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS para productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">500 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo
                                        en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS para productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">2100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo
                                        en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-wordPress" role="tabpanel" aria-labelledby="pills-wordPress-tab"
                tabindex="0">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$120</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$99</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1300 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">500 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">2100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab" tabindex="0">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$120</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$99</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1300 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">500 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">2100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="tab-pane fade" id="pills-siteTemplate" role="tabpanel" aria-labelledby="pills-siteTemplate-tab"
                tabindex="0">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$120</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$99</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1300 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">500 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">2100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-blogging" role="tabpanel" aria-labelledby="pills-blogging-tab"
                tabindex="0">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$120</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$99</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1300 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">500 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">2100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab"
                tabindex="0">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$120</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$99</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1300 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">500 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">2100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="tab-pane fade" id="pills-plugins" role="tabpanel" aria-labelledby="pills-plugins-tab"
                tabindex="0">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$120</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$99</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1300 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">500 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">2100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-uiTemplate" role="tabpanel" aria-labelledby="pills-uiTemplate-tab"
                tabindex="0">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$120</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Tablero SaaS - Productos digitales
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html"
                                        class="btn btn-outline-light btn-sm pill">Demostración en vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$99</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1300 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$256</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">200 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img7.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">500 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="product-item ">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img8.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de panel de control
                                        SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">2100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-64">
            <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">
                Ver mas productos
            </a>
        </div>

    </div>
</section>


<!-- =========================== Sección de Productos Nuevos Final ========================== -->
<!-- ======================= Productos Destacados Inicio =============================== -->
<section class="featured-product padding-y-120 position-relative z-index-1">
    <img src="assets/images/gradients/featured-gradient.png" alt="" class="bg--gradient white-version">
    <img src="assets/images/shapes/spider-net.png" alt=""
        class="spider-net position-absolute top-0 end-0 z-index--1 white-version">
    <img src="assets/images/shapes/spider-net-white.png" alt=""
        class="spider-net position-absolute top-0 end-0 z-index--1 dark-version">

    <img src="assets/images/shapes/element1.png" alt="" class="element two">

    <div class="container container-two">
        <div class="row gy-4 flex-wrap-reverse align-items-center">
            <div class="col-xl-6">
                <div class="row gy-4 card-wrapper">
                    
                <div class="col-sm-6">
                        <div class="product-item box-shadow">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de dashboard SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="product-item box-shadow">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img10.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de dashboard SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$129</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$236</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">100 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="product-item box-shadow">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img11.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de dashboard SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$79</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$99</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">900 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="product-item box-shadow">
                            <div class="product-item__thumb d-flex">
                                <a href="product-details.html" class="link w-100">
                                    <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                </a>
                                <button type="button" class="product-item__wishlist"><i
                                        class="fas fa-heart"></i></button>
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title">
                                    <a href="product-details.html" class="link">Productos digitales de dashboard SaaS
                                        Título aquí</a>
                                </h6>
                                <div class="product-item__info flx-between gap-2">
                                    <span class="product-item__author">
                                        por
                                        <a href="profile.html" class="link hover-text-decoration-underline">
                                            themepix</a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-item__price mb-0">$59</h6>
                                        <span class="product-item__prevPrice text-decoration-line-through">$129</span>
                                    </div>
                                </div>
                                <div class="product-item__bottom flx-between gap-2">
                                    <div>
                                        <span class="product-item__sales font-14 mb-2">1225 Ventas</span>
                                        <div class="d-flex align-items-center gap-1">
                                            <ul class="star-rating">
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="star-rating__text text-heading fw-500 font-14">
                                                (16)</span>
                                        </div>
                                    </div>
                                    <a href="product-details.html" class="btn btn-outline-light btn-sm pill">Demo en
                                        vivo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Resto de los productos traducidos de forma similar -->
                </div>
            </div>
            <div class="col-xl-1 d-xl-block d-none"></div>
            <div class="col-xl-5">
                <div class="section-content">
                    <div class="section-heading style-left">
                        <h3 class="section-heading__title">Productos Destacados</h3>
                        <p class="section-heading__desc font-18 w-sm">Cada mes seleccionamos algunos de los mejores
                            productos para ti. Los mejores temas y plantillas web de este mes han llegado, elegidos por
                            nuestros especialistas en contenido.</p>
                    </div>
                    <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">
                        Ver Todos los Artículos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Productos Destacados Fin =============================== -->
<!-- ======================= Productos en Venta Inicio ========================= -->

<section class="selling-product padding-y-120 position-relative z-index-1 overflow-hidden"> <img
        src="assets/images/gradients/selling-gradient.png" alt="" class="bg--gradient">
    <img src="assets/images/shapes/element2.png" alt="" class="element one">
    <img src="assets/images/shapes/element1.png" alt="" class="element two">

    <img src="assets/images/shapes/curve-pattern1.png" alt="" class="position-absolute start-0 top-0 z-index--1">
    <img src="assets/images/shapes/curve-pattern2.png" alt="" class="position-absolute end-0 top-0 z-index--1">

    <div class="container container-two">
        <div class="section-heading style-left style-white flx-between max-w-unset gap-4">
            <div>
                <h3 class="section-heading__title">Productos más vendidos de la semana</h3>
                <p class="section-heading__desc font-18">Cada mes seleccionamos los mejores productos para ti. Los
                    mejores temas y plantillas web de este mes han llegado, seleccionados por nuestros especialistas de
                    contenido.</p>
            </div>
            <a href="all-product.html" class="btn btn-main btn-lg pill fw-300">
                Ver todos los artículos
            </a>
        </div>
        <div class="selling-product-slider">
            <div class="product-item shadow-sm overlay-none">
                <div class="product-item__thumb d-flex max-h-unset">
                    <a href="product-details.html" class="link w-100">
                        <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                    </a>
                </div>
                <div class="product-item__content">
                    <h6 class="product-item__title">
                        <a href="product-details.html" class="link">Título aquí: nuevos temas del mercado de productos
                            digitales</a>
                    </h6>
                    <div class="product-item__info flx-between gap-2">
                        <span class="product-item__author">
                            por
                            <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                        </span>
                        <div class="flx-align gap-2">
                            <h6 class="product-item__price mb-0">$56</h6>
                            <span class="product-item__prevPrice text-decoration-line-through">$65</span>
                        </div>
                    </div>
                    <div class="product-item__bottom flx-between gap-2">
                        <div>
                            <span class="product-item__sales font-16 mb-2">1230 Ventas</span>
                            <ul class="star-rating gap-2">
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="flx-align gap-2">
                            <a href="product-details.html"
                                class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                <span class="icon">
                                    <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                    <img src="assets/images/icons/download-white.svg" alt="" class="dark-version">
                                </span>
                            </a>
                            <a href="product-details.html" class="btn btn-outline-light pill">Demo en Vivo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-item shadow-sm overlay-none">
                <div class="product-item__thumb d-flex max-h-unset">
                    <a href="product-details.html" class="link w-100">
                        <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                    </a>
                </div>
                <div class="product-item__content">
                    <h6 class="product-item__title">
                        <a href="product-details.html" class="link">Título aquí: nuevos temas del mercado de productos
                            digitales</a>
                    </h6>
                    <div class="product-item__info flx-between gap-2">
                        <span class="product-item__author">
                            por
                            <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                        </span>
                        <div class="flx-align gap-2">
                            <h6 class="product-item__price mb-0">$56</h6>
                            <span class="product-item__prevPrice text-decoration-line-through">$65</span>
                        </div>
                    </div>
                    <div class="product-item__bottom flx-between gap-2">
                        <div>
                            <span class="product-item__sales font-16 mb-2">1230 Ventas</span>
                            <ul class="star-rating gap-2">
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="flx-align gap-2">
                            <a href="product-details.html"
                                class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                <span class="icon">
                                    <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                    <img src="assets/images/icons/download-white.svg" alt="" class="dark-version">
                                </span>
                            </a>
                            <a href="product-details.html" class="btn btn-outline-light pill">Demo en Vivo</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-item shadow-sm overlay-none">
                <div class="product-item__thumb d-flex max-h-unset">
                    <a href="product-details.html" class="link w-100">
                        <img src="assets/images/thumbs/product-img12.png" alt="" class="cover-img">
                    </a>
                </div>
                <div class="product-item__content">
                    <h6 class="product-item__title">
                        <a href="product-details.html" class="link">Título aquí: nuevos temas del mercado de productos
                            digitales</a>
                    </h6>
                    <div class="product-item__info flx-between gap-2">
                        <span class="product-item__author">
                            por
                            <a href="profile.html" class="link hover-text-decoration-underline"> themepix</a>
                        </span>
                        <div class="flx-align gap-2">
                            <h6 class="product-item__price mb-0">$56</h6>
                            <span class="product-item__prevPrice text-decoration-line-through">$65</span>
                        </div>
                    </div>
                    <div class="product-item__bottom flx-between gap-2">
                        <div>
                            <span class="product-item__sales font-16 mb-2">1230 Ventas</span>
                            <ul class="star-rating gap-2">
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                                <li class="star-rating__item font-16"><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="flx-align gap-2">
                            <a href="product-details.html"
                                class="btn btn-outline-light download-icon btn-icon btn-icon--sm pill">
                                <span class="icon">
                                    <img src="assets/images/icons/download.svg" alt="" class="white-version">
                                    <img src="assets/images/icons/download-white.svg" alt="" class="dark-version">
                                </span>
                            </a>
                            <a href="product-details.html" class="btn btn-outline-light pill">Demo en Vivo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Selling Products End ========================= -->

    <!-- ======================= Al Autor Destacado Comienza =============================== -->
    <section class="top-author padding-y-120 section-bg position-relative z-index-1">
        <img src="assets/images/gradients/featured-gradient.png" alt="" class="bg--gradient white-version">
        <img src="assets/images/shapes/spider-net.png" alt=""
            class="spider-net position-absolute top-0 start-0 z-index--1 white-version">
        <img src="assets/images/shapes/spider-net-white2.png" alt=""
            class="spider-net position-absolute top-0 start-0 z-index--1 dark-version">
        <img src="assets/images/shapes/pattern-curve-three.png" alt="" class="position-absolute top-0 end-0 z-index--1">

        <img src="assets/images/shapes/element1.png" alt="" class="element two">

        <div class="container container-two">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-5">
                    <div class="section-content">
                        <div class="section-heading style-left">
                            <h3 class="section-heading__title">Autor Destacado Principal</h3>
                            <p class="section-heading__desc font-18 w-sm">Cada mes seleccionamos los mejores productos
                                para
                                ti. Los mejores temas y plantillas web de este mes han llegado, seleccionados por
                                nuestros especialistas en contenido.</p>
                        </div>
                        <div class="author-info d-flex align-items-center gap-3">
                            <div class="author-info__thumb">
                                <img src="assets/images/thumbs/author-img.png" alt="">
                            </div>
                            <div class="author-info__content">
                                <h4 class="author-info__name mb-1">Code Clean</h4>
                                <span class="author-info__text">Miembro desde 2022</span>
                            </div>
                        </div>
                        <div class="flx-align gap-2 mt-48">
                            <a href="profile.html" class="btn btn-main btn-lg pill fw-300"> Ver Perfil </a>
                            <button type="button" class="follow-btn btn btn-outline-light btn-lg pill">Seguir</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="circle-content position-relative">
                        <div class="circle static-circle">
                            <div class="circle__badge">
                                <img src="assets/images/icons/featured-badge.png" alt="">
                            </div>
                            <div class="circle__text">
                                <p>
                                    Naiker Gomez Caraballo
                                </p>
                            </div>
                        </div>
                        <div class="row gy-4 card-wrapper">
                            <div class="col-sm-6">
                                <div class="product-item box-shadow">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img9.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital
                                                products Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                por
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div>
                                                <span class="product-item__sales font-14 mb-2">1200 Ventas</span>
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i>
                                                        </li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i>
                                                        </li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i>
                                                        </li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i>
                                                        </li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                            </div>
                                            <a href="product-details.html"
                                                class="btn btn-outline-light btn-sm pill">Demo
                                                en Vivo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Se repiten las demás secciones del producto -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ======================= Fin de Autor Destacado =============================== -->
    <!-- ======================= Inicio de Autor con Mejor Rendimiento =============================== -->
    <section class="top-performance overflow-hidden padding-y-120 position-relative z-index-1">
        <img src="assets/images/shapes/spider-net.png" alt=""
            class="spider-net position-absolute top-0 end-0 z-index--1 white-version">
        <img src="assets/images/shapes/spider-net-white.png" alt=""
            class="spider-net position-absolute top-0 end-0 z-index--1 dark-version">
        <img src="assets/images/shapes/pattern-curve-four.png" alt=""
            class="position-absolute top-0 start-0 z-index--1">

        <img src="assets/images/shapes/element2.png" alt="" class="element two">

        <div class="container container-two">
            <div class="row gy-4 align-items-center flex-wrap-reverse">
                <div class="col-lg-7 pe-lg-5">
                    <div class="position-relative">
                        <div class="circle style-two static-circle">
                            <div class="circle__badge">
                                <img src="assets/images/icons/featured-badge.png" alt="">
                            </div>
                            <div class="circle__desc circle__text">
                                <p>
                                    Nuestro Mejor Rendimiento
                                </p>
                            </div>
                        </div>
                        <div class="performance-content">
                            <div class="performance-content__item">
                                <span class="performance-content__text font-18">Suscripciones por Correo</span>
                                <h4 class="performance-content__count">00,000+</h4>
                            </div>
                            <div class="performance-content__item">
                                <span class="performance-content__text font-18"> Total de plantillas</span>
                                <h4 class="performance-content__count">00,000+</h4>
                            </div>
                            <div class="performance-content__item">
                                <span class="performance-content__text font-18"> Total de Descargas</span>
                                <h4 class="performance-content__count">00,000+</h4>
                            </div>
                            <div class="performance-content__item">
                                <span class="performance-content__text font-18"> Visitantes Mensuales</span>
                                <h4 class="performance-content__count">00,000+</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-content">
                        <div class="section-heading style-left">
                            <h3 class="section-heading__title">Mejor Rendimiento</h3>
                            <p class="section-heading__desc font-18 w-sm">Cada mes seleccionamos algunos de los mejores
                                productos para ti. Los mejores temas y plantillas web de este mes han llegado,
                                seleccionados por nuestros especialistas de contenido.</p>
                        </div>
                        <a href="register.html" class="btn btn-main btn-lg pill fw-300"> Comenzar </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ======================= Fin de Autor con Mejor Rendimiento =============================== -->
    <!-- =========================== Inicio de la Sección de Blog ========================== -->
    <section class="blog padding-y-120 section-bg position-relative z-index-1 overflow-hidden">
        <img src="assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">
        <div class="container container-two">
            <div class="section-heading style-left style-flex flx-between align-items-end gap-3">
                <div class="section-heading__inner">
                    <h3 class="section-heading__title">Explora todos los blogs y artículos más recientes</h3>
                </div>
                <a href="blog.html" class="btn btn-main btn-lg pill">Ver Todos los Artículos</a>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="assets/images/thumbs/blog1.png" class="cover-img" alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Contratación</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="assets/images/icons/calendar.svg" alt="" class="white-version">
                                        <img src="assets/images/icons/calendar-white.svg" alt="" class="dark-version">
                                    </span>
                                    <span class="text">17 Ene, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">Cómo contratar a un ejecutivo de negocios
                                    adecuado para tu empresa</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Leer Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="assets/images/thumbs/blog2.png" class="cover-img" alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Taller</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="assets/images/icons/calendar.svg" alt="" class="white-version">
                                        <img src="assets/images/icons/calendar-white.svg" alt="" class="dark-version">
                                    </span>
                                    <span class="text">17 Ene, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">La Economía Gig: Adaptándose a una Fuerza
                                    Laboral Flexible</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Leer Más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="assets/images/thumbs/blog3.png" class="cover-img" alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Gestión de
                                    Proyectos</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="assets/images/icons/calendar.svg" alt="" class="white-version">
                                        <img src="assets/images/icons/calendar-white.svg" alt="" class="dark-version">
                                    </span>
                                    <span class="text">17 Ene, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">El Futuro del Trabajo Remoto: Estrategias para
                                    el Éxito</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Leer Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== Fin de la Sección de Blog ========================== -->


    <!-- ======================= Inicio de la sección Conviértete en vendedor ==================== -->
    <section class="seller padding-y-120">
        <div class="container container-two">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="seller-item position-relative z-index-1">
                        <img src="assets/images/shapes/seller-bg.png" class="position-absolute
                    start-0 top-0 z-index--1" alt="">
                        <h3 class="seller-item__title">Gana el 75% del precio del artículo</h3>
                        <p class="seller-item__desc fw-500 text-heading">Los vendedores reciben el 75% del precio del
                            artículo por los artículos vendidos de forma exclusiva y el 50% por los artículos vendidos
                            de forma no exclusiva. Consulta información detallada sobre la estructura de tarifas en el
                            mercado.</p>
                        <a href="register.html" class="btn btn-static-outline-black btn-xl pill fw-600">Conviértete en
                            Vendedor</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="seller-item bg-two position-relative z-index-1">
                        <img src="assets/images/shapes/seller-bg-two.png" class="position-absolute
                    start-0 top-0 z-index--1" alt="">
                        <h3 class="seller-item__title">Gana hasta el 40% de comisión</h3>
                        <p class="seller-item__desc fw-500 text-heading">Nuestro mercado es el lugar creativo más grande
                            del mundo, vendiendo millones de activos digitales cada año. ¡Con un 30% de comisión por
                            afiliado, ganar dinero nunca ha sido tan fácil!</p>
                        <a href="register.html" class="btn btn-static-outline-black btn-xl pill fw-600">Conviértete en
                            Afiliado</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="support position-relative z-index-1">
                        <img src="assets/images/shapes/spider-net-sm.png" alt=""
                            class="spider-net position-absolute top-0 end-0 z-index--1">
                        <img src="assets/images/shapes/arrow-shape.png" alt="" class="arrow-shape">
                        <div class="row align-items-center">
                            <div class="col-lg-1 d-lg-block d-none"></div>
                            <div class="col-lg-3 col-md-4 d-md-block d-none">
                                <div class="support-thumb text-center">
                                    <img src="assets/images/thumbs/support-img.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 d-lg-block d-none"></div>
                            <div class="col-lg-5 col-md-8">
                                <div class="support-content">
                                    <h3 class="support-content__title mb-3">Soporte 24/7</h3>
                                    <p class="support-content__desc">¿Quieres hablar? Envíanos un mensaje</p>
                                    <a href="mailto:infomail@office.com"
                                        class="btn btn-static-black btn-lg fw-300 pill">infomail@office.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Fin de la sección Conviértete en vendedor ==================== -->


    <!-- ======================== Brand Section Start ========================= -->
    <div class="brand ">
        <div class="container container">
            <div class="brand-slider">
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="assets/images/thumbs/brand-img1.png" alt="" class="white-version">
                    <img src="assets/images/thumbs/brand-white-img1.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="assets/images/thumbs/brand-img2.png" alt="" class="white-version">
                    <img src="assets/images/thumbs/brand-white-img2.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="assets/images/thumbs/brand-img3.png" alt="" class="white-version">
                    <img src="assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="assets/images/thumbs/brand-img4.png" alt="" class="white-version">
                    <img src="assets/images/thumbs/brand-white-img4.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="assets/images/thumbs/brand-img5.png" alt="" class="white-version">
                    <img src="assets/images/thumbs/brand-white-img5.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="assets/images/thumbs/brand-img3.png" alt="" class="white-version">
                    <img src="assets/images/thumbs/brand-white-img3.png" alt="" class="dark-version">
                </div>
            </div>
        </div>
    </div>
    <!-- ======================== Brand Section End ========================= -->


    <?php include_once 'Views/template/footer_principal.php'; ?>