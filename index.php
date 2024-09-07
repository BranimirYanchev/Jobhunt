<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <?php include 'assets/elements/head.php' ?>
    <link rel="stylesheet" href="assets/elements/form/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="assets/imgs/theme/loading.gif" alt="jobhub" />
                </div>
            </div>
        </div>
    </div>
    
    <!-- HEADER -->

    <?php include 'assets/elements/header.php' ?>

    <!-- END-HEADER -->
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="user-account">
                    <img src="assets/imgs/avatar/ava_1.png" alt="jobhub" />
                    <div class="content">
                        <h6 class="user-name">Howdy, <span class="text-brand">AliThemes</span></h6>
                        <p class="font-xs text-muted">You have 2 new messages</p>
                    </div>
                </div>
                <div class="burger-icon burger-icon-white">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search for jobs…" />
                            <i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class="has-children">
                                    <a class="active" href="index.html">Начало</a>
                                </li>
                                 <li class="has-children">
                                    <a href="">Намери</a>
                                    <ul class="sub-menu">
                                        <li><a href="job-list.html">Работа</a></li>
                                        <li><a href="candidates-list.html">Човек</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="page-about.html">About Us</a>
                                </li>
                                <li class="has-children">
                                    <a href="page-contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">My Boosted Shots</a></li>
                            <li><a href="#">My Collections</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon mb-50">
                        <h6 class="mb-25">Follow Us</h6>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt="jobhub" /></a>
                    </div>
                    <div class="site-copyright">Copyright 2022 © JobHub. <br />Designed by AliThemes.</div>
                </div>
            </div>
        </div>
    </div>
    <!--End header-->
    <!-- Content -->
    <main class="main">

        <?php include "assets/elements/form/index.php" ?>

        <section class="section-box">
            <div class="banner-hero banner-homepage-3">
                <div class="banner-inner">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="block-banner">
                                <span class="text-small-primary text-small-primary--disk text-uppercase  wow animate__animated animate__fadeInUp">Най-доброто място за вас!</span>
                                <h1 class="heading-banner wow animate__animated animate__fadeInUp">Най-лесният начин да намерите нова работа.</h1>
                                <div class="banner-description mt-30 wow animate__animated animate__fadeInUp">Бързо и лесно намерете работа или подходящия кандидат за вашата позиция само с няколко клика.</div>
                                <div class="form-find mt-60 wow animate__animated animate__fadeInUp">
                                    <form>
                                        <input type="text" class="form-input input-keysearch mr-10" placeholder="Работна позиция" />
                                        <select class="form-input mr-10 select-active">
                                            <option value="">Град</option>
                                            <option value="adzhali">Аджали</option>
                                            <option value="aleksandria">Александрия</option>
                                            <option value="aleksandrovac">Александровац</option>
                                            <option value="aleksandropoli">Александрополи</option>
                                            <option value="balchik">Балчик</option>
                                            <option value="berkovitsa">Берковица</option>
                                            <option value="blagoevgrad">Благоевград</option>
                                            <option value="bobovdol">Бобов дол</option>
                                            <option value="botevgrad">Ботевград</option>
                                            <option value="brestovitsa">Брестовица</option>
                                            <option value="burgas">Бургас</option>
                                            <option value="byala">Бяла</option>
                                            <option value="byala_varna">Бяла (Варна)</option>
                                            <option value="byala_ruse">Бяла (Русе)</option>
                                            <option value="vidin">Видин</option>
                                            <option value="varna">Варна</option>
                                            <option value="velingrad">Велинград</option>
                                            <option value="veliko_tarnovo">Велико Търново</option>
                                            <option value="vrshets">Вършец</option>
                                            <option value="gabrovo">Габрово</option>
                                            <option value="gorna_orehova">Горна Оряховица</option>
                                            <option value="gotse_delchev">Гоце Делчев</option>
                                            <option value="dragoman">Драгоман</option>
                                            <option value="dupnis">Дупница</option>
                                            <option value="dobrich">Добрич</option>
                                            <option value="draganovo">Драганово</option>
                                            <option value="kardzhali">Кърджали</option>
                                            <option value="kazanlak">Казанлък</option>
                                            <option value="kalofer">Калофер</option>
                                            <option value="kaspichan">Каспичан</option>
                                            <option value="kiustendil">Кюстендил</option>
                                            <option value="kresna">Кресна</option>
                                            <option value="mad">Мадан</option>
                                            <option value="montana">Монтана</option>
                                            <option value="nesebar">Несебър</option>
                                            <option value="nikopol">Никопол</option>
                                            <option value="novi_pazar">Нови пазар</option>
                                            <option value="obshtina_burgas">Община Бургас</option>
                                            <option value="omurtag">Омуртаг</option>
                                            <option value="panagyurishte">Панагюрище</option>
                                            <option value="parvomay">Първомай</option>
                                            <option value="pleven">Плевен</option>
                                            <option value="plovdiv">Пловдив</option>
                                            <option value="pomorie">Поморие</option>
                                            <option value="povet">Повет</option>
                                            <option value="ruse">Русе</option>
                                            <option value="sandanski">Сандански</option>
                                            <option value="sliven">Сливен</option>
                                            <option value="smolyan">Смолян</option>
                                            <option value="sofia">София</option>
                                            <option value="stara_zagora">Стара Загора</option>
                                            <option value="svishtov">Свищов</option>
                                            <option value="targovishte">Търговище</option>
                                            <option value="troyan">Троян</option>
                                            <option value="yambol">Ямбол</option>
                                        </select>
                                        <button class="btn btn-default btn-find">Търси</button>
                                    </form>
                                </div>
                                <div class="list-tags-banner mt-60 wow animate__animated animate__fadeInUp">
                                    <strong>Популярни търсения:</strong>
                                    <a href="#">Designer</a>, <a href="#">Developer</a>, <a href="#">Web</a>, <a href="#">Engineer</a>, <a href="#">Senior</a>,
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="banner-imgs">
                                <img alt="jobhub" src="assets/imgs/page/homepage3/banner-main.png" class="img-responsive shape-1" />
                                <span class="banner-sm1"><img alt="jobhub" src="assets/imgs/page/homepage3/banner-sm1.png" class="img-responsive shape-3" /></span>
                                <span class="banner-sm2"><img alt="jobhub" src="assets/imgs/page/homepage3/banner-sm2.png" class="img-responsive shape-2" /></span>
                                <span class="banner-sm3"><img alt="jobhub" src="assets/imgs/page/homepage3/banner-sm3.png" class="img-responsive shape-2" /></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-40">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-4">
                        <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp">Нови обяви</h2>
                        <p class="text-md-lh28 color-black-5wow animate__animated animate__fadeInUp" data-wow-delay=".1s">8 нови обяви публикувани днес!</p>
                    </div>
                    <div class="col-lg-8 text-xl-end text-start">
                        <ul class="nav nav-right float-xl-end float-start" role="tablist">
                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".1s"><button id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one-1" aria-selected="true" class="active">Design</button></li>
                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".2s"><button id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two-1" aria-selected="false">Marketing</button></li>
                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".3s"><button id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three-1" aria-selected="false">Design</button></li>
                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".4s"><button id="nav-tab-four-1" data-bs-toggle="tab" data-bs-target="#tab-four-1" type="button" role="tab" aria-controls="tab-four-1" aria-selected="false">Service</button></li>
                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".5s"><button id="nav-tab-five-1" data-bs-toggle="tab" data-bs-target="#tab-five-1" type="button" role="tab" aria-controls="tab-five-1" aria-selected="false">Health Care</button></li>
                            <li class="wow animate__animated animate__fadeIn" data-wow-delay=".6s"><button id="nav-tab-six-1" data-bs-toggle="tab" data-bs-target="#tab-six-1" type="button" role="tab" aria-controls="tab-six-1" aria-selected="false">Writing</button></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-70">
                    <div class="tab-content" id="myTabContent-1">
                        <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="text-center card-grid-2-image">
                                            <a href="job-single.html">
                                                <figure><img src="assets/imgs/jobs/job-1.png" alt="jobhub" /></figure>
                                            </a>
                                            <label class="btn-urgent">Спешно</label>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="row">
                                                <div class="col-lg-7 col-6">
                                                    <a href="employers-single.html" class="card-2-img-text">
                                                        <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-1.svg" alt="jobhub" /></span> <span>Alithemes</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 col-6 text-end">
                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                                </div>
                                            </div>
                                            <h5 class="mt-20"><a href="job-single.html">Старши инженер по цялостни решения</a></h5>
                                            <div class="mt-15">
                                                <span class="card-location">София</span>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-8">
                                                        <span class="card-text-price"> 3200лв. <span>/Месец</span> </span>
                                                    </div>
                                                    <div class="col-lg-5 col-4 text-end">
                                                        <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                        <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="text-center card-grid-2-image">
                                            <a href="job-single.html">
                                                <figure><img src="assets/imgs/jobs/job-2.png" alt="jobhub" /></figure>
                                            </a>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="row">
                                                <div class="col-lg-7 col-6">
                                                    <a href="employers-single.html" class="card-2-img-text">
                                                        <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-2.svg" alt="jobhub" /></span> <span>Gucci</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 col-6 text-end">
                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                                </div>
                                            </div>
                                            <h5 class="mt-20"><a href="job-single.html">Професионален дизайн на банер за корица на Facebook</a></h5>
                                            <div class="mt-15">
                                                <span class="card-location">София</span>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-8">
                                                        <span class="card-text-price"> 1200лв. <span>/Месец</span> </span>
                                                    </div>
                                                    <div class="col-lg-5 col-4 text-end">
                                                        <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                        <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="text-center card-grid-2-image">
                                            <a href="job-single.html">
                                                <figure><img src="assets/imgs/jobs/job-3.png" alt="jobhub" /></figure>
                                            </a>
                                            <label class="btn-urgent">Спешно</label>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="row">
                                                <div class="col-lg-7 col-6">
                                                    <a href="employers-single.html" class="card-2-img-text">
                                                        <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-3.svg" alt="jobhub" /></span> <span>Versace</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 col-6 text-end">
                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                                </div>
                                            </div>
                                            <h5 class="mt-20"><a href="job-single.html">Създаване на изображения за публикации в Instagram</a></h5>
                                            <div class="mt-15">
                                                <span class="card-location">София</span>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-8">
                                                        <span class="card-text-price"> 2600лв. <span>/Месец</span> </span>
                                                    </div>
                                                    <div class="col-lg-5 col-4 text-end">
                                                        <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                        <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="text-center card-grid-2-image">
                                            <a href="job-single.html">
                                                <figure><img src="assets/imgs/jobs/job-4.png" alt="jobhub" /></figure>
                                            </a>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="row">
                                                <div class="col-lg-7 col-6">
                                                    <a href="employers-single.html" class="card-2-img-text">
                                                        <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-4.svg" alt="jobhub" /></span> <span>Hermes</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 col-6 text-end">
                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                                </div>
                                            </div>
                                            <h5 class="mt-20"><a href="job-single.html">Премиум качество на публикации в Instagram</a></h5>
                                            <div class="mt-15">
                                                <span class="card-location">София</span>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-8">
                                                        <span class="card-text-price"> 120лв. <span>/Месец</span> </span>
                                                    </div>
                                                    <div class="col-lg-5 col-4 text-end">
                                                        <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                        <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="text-center card-grid-2-image">
                                            <a href="job-single.html">
                                                <figure><img src="assets/imgs/jobs/job-5.png" alt="jobhub" /></figure>
                                            </a>
                                            <label class="btn-urgent">Спешно</label>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="row">
                                                <div class="col-lg-7 col-6">
                                                    <a href="employers-single.html" class="card-2-img-text">
                                                        <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-5.svg" alt="jobhub" /></span> <span>Burberry</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 col-6 text-end">
                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                                </div>
                                            </div>
                                            <h5 class="mt-20"><a href="job-single.html">Удивителен банер и дизайн на корица за Facebook</a></h5>
                                            <div class="mt-15">
                                                <span class="card-location">София</span>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-8">
                                                        <span class="card-text-price"> 125лв. <span>/Месец</span> </span>
                                                    </div>
                                                    <div class="col-lg-5 col-4 text-end">
                                                        <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                        <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="text-center card-grid-2-image">
                                            <a href="job-single.html">
                                                <figure><img src="assets/imgs/jobs/job-6.png" alt="jobhub" /></figure>
                                            </a>
                                            <label class="btn-urgent">Спешно</label>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="row">
                                                <div class="col-lg-7 col-6">
                                                    <a href="employers-single.html" class="card-2-img-text">
                                                        <span class="card-grid-2-img-small"><img src="assets/imgs/jobs/logos/logo-6.svg" alt="jobhub" /></span> <span>Louis Vuitton</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 col-6 text-end">
                                                    <a href="#" class="btn btn-grey-small disc-btn">Fulltime</a>
                                                </div>
                                            </div>
                                            <h5 class="mt-20"><a href="job-single.html">Пълна настройка на бизнес страници в социалните медии</a></h5>
                                            <div class="mt-15">
                                                <span class="card-location">София</span>
                                            </div>
                                            <div class="card-2-bottom mt-30">
                                                <div class="row">
                                                    <div class="col-lg-7 col-8">
                                                        <span class="card-text-price"> 120лв. <span>/Месец</span> </span>
                                                    </div>
                                                    <div class="col-lg-5 col-4 text-end">
                                                        <span><img src="assets/imgs/theme/icons/shield-check.svg" alt="jobhub" /></span>
                                                        <span class="ml-5"><img src="assets/imgs/theme/icons/bookmark.svg" alt="jobhub" /></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <h2 class="section-title mb-20 wow animate__animated animate__fadeInUp">Търсене по категории</h2>
                        <p class="text-md-lh28 color-black-5 wow animate__animated animate__fadeInUp">Намерете типа работа, който ви е необходим, ясно определен и готов за стартиране. Работата започва веднага след като направите покупка и предоставите изискванията.</p>
                    </div>
                    <div class="col-lg-5 text-lg-end text-start wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <a href="job-grid-2.html" class="mt-sm-15 mt-lg-30 btn btn-border icon-chevron-right">Всички категории</a>
                    </div>
                </div>
                <div class="row mt-70">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp">
                            <div class="text-center">
                                <a href="job-grid.html">
                                    <figure><img alt="jobhub" src="assets/imgs/theme/icons/marketing.svg" /></figure>
                                </a>
                            </div>
                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">IT област</a>
                            </h5>
                            <p class="text-center text-stroke-40 mt-20">156 Налични позиции</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="text-center">
                                <a href="job-grid.html">
                                    <figure><img alt="jobhub" src="assets/imgs/theme/icons/content-writer.svg" /></figure>
                                </a>
                            </div>
                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Медии & Издателство</a></h5>
                            <p class="text-center text-stroke-40 mt-20">268 Налични позиции</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <div class="card-grid hover-up">
                            <div class="text-center">
                                <a href="job-grid.html">
                                    <figure><img src="assets/imgs/theme/icons/marketing-director.svg" alt="jobhub" /></figure>
                                </a>
                            </div>
                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Дизайн & Криейтив</a></h5>
                            <p class="text-center text-stroke-40 mt-20">145 Налични позиции</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="text-center">
                                <a href="job-grid.html">
                                    <figure><img src="assets/imgs/theme/icons/system-analyst.svg" alt="jobhub" /></figure>
                                </a>
                            </div>
                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Сигурност & Охрана</a></h5>
                            <p class="text-center text-stroke-40 mt-20">236 Налични позиции</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp">
                            <div class="text-center">
                                <a href="job-grid.html">
                                    <figure><img src="assets/imgs/theme/icons/business-development.svg" alt="jobhub" /></figure>
                                </a>
                            </div>
                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Маркетинг & Реклама</a></h5>
                            <p class="text-center text-stroke-40 mt-20">56 Налични позиции</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="text-center">
                                <a href="job-grid.html">
                                    <figure><img src="assets/imgs/theme/icons/proof-reading.svg" alt="jobhub" /></figure>
                                </a>
                            </div>
                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Търговия & Продажби</a></h5>
                            <p class="text-center text-stroke-40 mt-20">168 Налични позиции</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="text-center card-img">
                                <a href="job-grid.html">
                                    <figure>
                                        <img src="assets/imgs/theme/icons/testing.svg" alt="jobhub" />
                                    </figure>
                                </a>
                            </div>
                            <h5 class="text-center mt-20 card-heading"><a href="job-grid.html">Автомобили & Автосервизи</a></h5>
                            <p class="text-center text-stroke-40 mt-20">628 Налични позиции</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="card-grid hover-up wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="text-center mt-15">
                                <h3>1,000+</h3>
                            </div>
                            <p class="text-center mt-30 text-stroke-40">Работните места те чакат.</p>
                            <div class="text-center mt-30">
                                <div class="box-button-shadow"><a href="job-grid.html" class="btn btn-default">Разгледай повече</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-image-findjob box-image-about ml-0">
                            <figure><img alt="jobhub" class="h-500" src="assets/imgs/page/about/banner-price.png"></figure>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-info-job box-info-about pl-90">
                            <span class="text-blue text-uppercase wow animate__animated animate__fadeInUp">За нас</span>
                            <h5 class="heading-36 mb-30 mt-10 wow animate__animated animate__fadeInUp">Post your job and find the people you need</h5>
                            <p class="text-md mb-10 wow animate__animated animate__fadeInUp">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered.
                            </p>
                            <h5 class="heading-md-regular mt-30 mb-10 wow animate__animated animate__fadeInUp">Защо го създадохме?</h5>
                            <p class="text-md wow animate__animated animate__fadeInUp">
                                Създадохме го с цел: Намиране на работа бързо и лесно!
                            </p>
                            <h5 class="heading-md-regular mt-30 mb-10 wow animate__animated animate__fadeInUp">За какво се борим?</h5>
                            <p class="text-md wow animate__animated animate__fadeInUp">
                                Борим се за: Развитието на младото поколение!                            </p>
                            <div class="mt-50 wow animate__animated animate__fadeInUp">
                                <a href="job-grid-2.html" class="mt-sm-15 mt-lg-30 btn btn-border icon-chevron-right">Още за нас</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box mt-70">
            <div class="container">
                <h2 class="section-title mb-15 wow animate__animated animate__fadeInUp">Мнения</h2>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text-md-lh24 color-black-5 wow animate__animated animate__fadeInUp">
                            Вашето мнение е много важно за нас, защото искаме да се развиваме възможно най-добре в тази сфера!                      </div>
                    </div>
                </div>
                <div class="row mt-50">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-2">
                            <div class="swiper-wrapper pb-70 pt-5">
                                <div class="swiper-slide">
                                    <div class="card-two-collumn hover-up">
                                        <div class="text-center card-grid-3-image">
                                            <a href="#">
                                                <figure><img alt="jobhub" src="assets/imgs/page/services/profile-m.png" /></figure>
                                            </a>
                                        </div>
                                        <div class="card-block-info quote-left mt-10">
                                            <p class="text-md">Сайтът е изключително удобен и лесен за използване. Намерих идеалната работа за мен за броени дни! Препоръчвам го на всеки, който търси нови възможности.</p>
                                            <div class="card-bottom-bd">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card-profile">
                                                            <strong>Бранимир Янчев</strong>
                                                            <span>CSPLUS Създател</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mt-15 text-end">
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rate" value="5" />
                                                                <label for="star5" title="text" class="checked">5 stars</label>
                                                                <input type="radio" id="star4" name="rate" value="4" />
                                                                <label for="star4" title="text" class="checked">4 stars</label>
                                                                <input type="radio" id="star3" name="rate" value="3" />
                                                                <label for="star3" title="text" class="checked">3 stars</label>
                                                                <input type="radio" id="star2" name="rate" value="2" />
                                                                <label for="star2" title="text" class="checked">2 stars</label>
                                                                <input type="radio" id="star1" name="rate" value="1" />
                                                                <label for="star1" title="text" class="checked">1 star</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-two-collumn hover-up">
                                        <div class="text-center card-grid-3-image">
                                            <a href="#">
                                                <figure><img alt="jobhub" src="assets/imgs/page/services/profile-m.png" /></figure>
                                            </a>
                                        </div>
                                        <div class="card-block-info quote-left mt-10">
                                            <p class="text-md">Този сайт е истинско откритие! Приложението е бързо и ефективно, а обявите са актуални и разнообразни. Отлично място за намиране на работа и за работодатели, които търсят таланти.</p>
                                            <div class="card-bottom-bd">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card-profile">
                                                            <strong>Спас Китанов</strong>
                                                            <span>CSPLUS Създател</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="rate">
                                                            <input type="radio" id="star52" name="rate" value="5" />
                                                            <label for="star52" title="text" class="checked">5 stars</label>
                                                            <input type="radio" id="star42" name="rate" value="4" />
                                                            <label for="star42" title="text" class="checked">4 stars</label>
                                                            <input type="radio" id="star32" name="rate" value="3" />
                                                            <label for="star32" title="text" class="checked">3 stars</label>
                                                            <input type="radio" id="star22" name="rate" value="2" />
                                                            <label for="star22" title="text" class="checked">2 stars</label>
                                                            <input type="radio" id="star12" name="rate" value="1" />
                                                            <label for="star12" title="text" class="checked">1 star</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-two-collumn">
                                        <div class="text-center card-grid-3-image">
                                            <a href="#">
                                                <figure><img alt="jobhub" src="assets/imgs/page/services/profile-m.png" /></figure>
                                            </a>
                                        </div>
                                        <div class="card-block-info quote-left mt-10">
                                            <p class="text-md">Благодарение на този сайт успях да намеря стаж, който съответства на моите интереси и умения. Сайтът е чудесен ресурс за всеки, който търси професионален растеж и нови възможности.</p>
                                            <div class="card-bottom-bd">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="card-profile">
                                                            <strong>Иван Иванов</strong>
                                                            <span>Безработен</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mt-15 text-end">
                                                            <div class="rate">
                                                                <input type="radio" id="star53" name="rate" value="5" />
                                                                <label for="star53" title="text" class="checked">5 stars</label>
                                                                <input type="radio" id="star43" name="rate" value="4" />
                                                                <label for="star43" title="text" class="checked">4 stars</label>
                                                                <input type="radio" id="star33" name="rate" value="3" />
                                                                <label for="star33" title="text" class="checked">3 stars</label>
                                                                <input type="radio" id="star23" name="rate" value="2" />
                                                                <label for="star23" title="text" class="checked">2 stars</label>
                                                                <input type="radio" id="star13" name="rate" value="1" />
                                                                <label for="star13" title="text" class="checked">1 star</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Content -->
    <!-- Footer -->
    
    <?php include 'assets/elements/footer.php' ?>

    <!-- End Footer -->
    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <!-- Template  JS -->
    <script src="assets/js/main.js?v=1.0"></script>
    <script src="assets/js/login-register.js"></script>
</body>

</html>