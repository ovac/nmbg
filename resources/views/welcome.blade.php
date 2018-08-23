@extends('layouts.app')

@section('content')
    <section class="intro_section page_mainslider ds">

        @section('slide-buttons')
            <div class="intro-layer inline-content" data-animation="fadeInUp">
                <a class="theme_button color2" href="/about">About us</a>
                <a class="theme_button inverse" href="/portfolio">Portfolio</a>
            </div>
        @endsection
        <div class="flexslider" data-nav="false">
            <ul class="slides">

                <li>
                    <img src="//res.cloudinary.com/ovac/image/upload/v1535040924/1H7A4314-Copy_wfscif.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description text-center">

                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2 class="text-uppercase big">Nigeria</h2>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3 class="text-uppercase">
                                                Most Beautiful
                                            </h3>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2 class="text-uppercase big">Ghana</h2>
                                        </div>
                                        @yield('slide-buttons')
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

                <li>
                    <img src="//res.cloudinary.com/ovac/image/upload/v1535041045/MG_7697_qyqpev.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description text-center">
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h3 class="text-uppercase">
                                                A platform to
                                            </h3>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2 class="text-uppercase big">
                                                Discover
                                                <br> Tallent
                                            </h2>
                                        </div>
                                        @yield('slide-buttons')
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

                <li>
                    <img src="//img.youtube.com/vi/TlRylHBMcs4/maxresdefault.jpg" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description text-center">
                                        {{-- <div class="intro-layer" data-animation="fadeInUp">
                                            <h3 class="text-uppercase">
                                                welcome to the
                                            </h3>
                                        </div>
                                        <div class="intro-layer" data-animation="fadeInUp">
                                            <h2 class="text-uppercase big">
                                                Fashion
                                                <br> Vogue
                                            </h2>
                                        </div> --}}
                                        @yield('slide-buttons')
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>

            </ul>
        </div>
        <!-- eof flexslider -->
    </section>

    <section class="ds section_padding_100 columns_margin_bottom_20">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">Nigeria Most Beautiful Ghana 2018 Prizes</h2>
                </div>
            </div>

            <div class="row price-row">
                <div class="col-md-4 col-sm-6">
                    <ul class="price-table with_background grey style1">
                        <li class="plan-name">
                            <h3>First Runner Up</h3>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <b>
                                <span>C</span>5,000.00
                                <div class="plan-description small-text lusitana">CASH PRIZE</div>
                            </b>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <span>Movie Contract</span>
                            <div class="plan-description small-text lusitana">Complementary</div>
                        </li>
                        {{-- <li class="features-list">
                            <ul>
                                <li>Meatball kielbasa ball</li>
                                <li>Boudin jerky shank</li>
                                <li>Venison ham ham</li>
                                <li>Turducken kielbasa sausage</li>
                                <li>Tri-tip beef ribs</li>
                            </ul>
                        </li>
                        <li class="call-to-action">
                            <a href="#" class="theme_button inverse">select now</a>
                        </li> --}}
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 col-md-push-4">
                    <ul class="price-table with_background grey style1">
                        <li class="plan-name">
                            <h3>Second Runner Up</h3>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <span>C</span>3,000.00
                            <div class="plan-description small-text lusitana">CASH PRIZE</div>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <span>Look Book</span>
                            <div class="plan-description small-text lusitana">Complementary</div>
                        </li>
                        {{-- <li class="features-list">
                            <ul>
                                <li>Official Car</li>
                                <li>Ribs alcatra pork andouille</li>
                                <li>Rump biltong jerky</li>
                                <li>Sirloin porchetta swine</li>
                                <li>Brisket pork pork chop</li>
                            </ul>
                        </li>
                        <li class="call-to-action">
                            <a href="#" class="theme_button inverse">select now</a>
                        </li> --}}
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 col-md-pull-4 col-sm-offset-3 col-md-offset-0">
                    <ul class="price-table with_background grey style1 centered">
                        <li class="plan-name">
                            <h3>Winner</h3>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <span>C</span>10,000.00
                            <div class="plan-description small-text lusitana">Cash Prize</div>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <span>Official Car</span>
                            <div class="plan-description small-text lusitana">Complementary</div>
                        </li>
                        {{-- <li class="features-list">
                            <ul>
                                <li>Tenderloin strip steak</li>
                                <li>Cow sausage filet</li>
                                <li>Mignon t-bone sirloin</li>
                                <li>Shank ham hock</li>
                                <li>Tongue leberkas pastrami</li>
                                <li>Beef ribs cow chicken</li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section id="about" class="ds ms page_about parallax section_padding_100 columns_padding_25 columns_margin_bottom_30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">About</h2>
                    <p class="small-text highlight lusitana">Nigeria Most Beautiful Ghana</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p class="fontsize_20">
                        Nigeria's Most Beautiful Ghana (NMBG) is a beauty pageant established for young Nigerian ladies between the ages of 18 and 26 schooling or residence in Ghana. This initiative aims at building role models who can serve as beauty ambassadors for Nigeria and Nigerians living in Ghana.
                    </p>
                    {{-- <p class="fontsize_20">
                        The vision is to empower young Nigerian women to be great future leaders both at home and in the diaspora. This beauty pageant as part of its vision is to create a platform to enable contestants to display the rich Nigerian culture to Ghanaians and the rest of the world through fasion show, cultural and talent performances. ​
                    </p> --}}
                </div>
                <div class="col-sm-12 text-center">
                    <a href="/about" class="theme_button color2">Read more</a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="prices" class="ds section_padding_100 columns_margin_bottom_20">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">Photo Shoot Prices</h2>
                    <p class="small-text highlight lusitana">Select your option</p>
                </div>
            </div>

            <div class="row price-row">
                <div class="col-md-4 col-sm-6">
                    <ul class="price-table with_background grey style1">
                        <li class="plan-name">
                            <h3>Regular</h3>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <span>$</span>269
                            <div class="plan-description small-text lusitana">per shoot</div>
                        </li>
                        <li class="features-list">
                            <ul>
                                <li>Meatball kielbasa ball</li>
                                <li>Boudin jerky shank</li>
                                <li>Venison ham ham</li>
                                <li>Turducken kielbasa sausage</li>
                                <li>Tri-tip beef ribs</li>
                            </ul>
                        </li>
                        <li class="call-to-action">
                            <a href="#" class="theme_button inverse">select now</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 col-md-push-4">
                    <ul class="price-table with_background grey style1">
                        <li class="plan-name">
                            <h3>Extended</h3>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <span>$</span>899
                            <div class="plan-description small-text lusitana">per shoot</div>
                        </li>
                        <li class="features-list">
                            <ul>
                                <li>Bacon ham hock spare</li>
                                <li>Ribs alcatra pork andouille</li>
                                <li>Rump biltong jerky</li>
                                <li>Sirloin porchetta swine</li>
                                <li>Brisket pork pork chop</li>
                            </ul>
                        </li>
                        <li class="call-to-action">
                            <a href="#" class="theme_button inverse">select now</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 col-md-pull-4 col-sm-offset-3 col-md-offset-0">
                    <ul class="price-table with_background grey style1 centered">
                        <li class="plan-name">
                            <h3>Unlimited</h3>
                        </li>
                        <li class="plan-price grey main_bg_color2">
                            <span>$</span>599
                            <div class="plan-description small-text lusitana">per shoot</div>
                        </li>
                        <li class="features-list">
                            <ul>
                                <li>Tenderloin strip steak</li>
                                <li>Cow sausage filet</li>
                                <li>Mignon t-bone sirloin</li>
                                <li>Shank ham hock</li>
                                <li>Tongue leberkas pastrami</li>
                                <li>Beef ribs cow chicken</li>
                            </ul>
                        </li>
                        <li class="call-to-action">
                            <a href="#" class="theme_button inverse">select now</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section> --}}

    <section id="models" class="ds ms section_padding_top_50 container_padding_60 bottompadding_10">
        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-md-push-7 text-md-right">

                    <form class="inline-form inline-content" method="post" action="./">
                        <div class="select-group">
                            <label for="sorting" class="sr-only">Sorting
                                <span class="required">*</span>
                            </label>
                            <!-- <div class="input-group"> -->
                            <select aria-required="true" id="sorting" name="sorting" class="choice empty form-control">
                                <option value="default">Default sorting</option>
                                <option value="jan">Sort by name</option>
                                <option value="feb">Sort by date</option>
                                <option value="mar">Random sorting</option>
                            </select>
                            <i class="fa fa-caret-down theme_button" aria-hidden="true"></i>
                            <!-- </div> -->
                        </div>
                        <div class="select-group">
                            <label for="order" class="sr-only">Order
                                <span class="required">*</span>
                            </label>
                            <!-- <div class="input-group"> -->
                            <select aria-required="true" id="order" name="order" class="choice empty form-control">
                                <option value="default">Descending</option>
                                <option value="jan">Ascendanting</option>
                            </select>
                            <i class="fa fa-caret-down theme_button" aria-hidden="true"></i>
                            <!-- </div> -->
                        </div>
                    </form>

                </div>
                <div class="col-md-7 col-md-pull-5">
                    <div class="filters carousel_filters">
                        <a href="#" class="theme_button inverse selected" data-filter="*">All</a>
                        <a href="#" class="theme_button inverse" data-filter=".fashion">Fashion</a>
                        <a href="#" class="theme_button inverse" data-filter=".studio">Studio</a>
                        <a href="#" class="theme_button inverse" data-filter=".session">Session</a>
                        <a href="#" class="theme_button inverse" data-filter=".top">Top</a>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="owl-carousel text-nav" data-nav="true" data-dots="false" data-margin="0" data-filters=".carousel_filters">

            <div class="vertical-item content-absolute hover-content text-center fashion">
                <div class="item-media">
                    <img src="images/models_rectangle/03.jpg" alt="" />
                </div>
                <div class="item-content transp_gradient_bg">
                    <h3 class="model-name">
                        <a href="#">Rachel Tale</a>
                    </h3>
                    <p class="small-text lusitana highlight">Top model</p>

                    <div class="fontsize_16 lusitana text-uppercase grey parameters">
                        <span>
                            Height
                            <br>
                            <span class="highlight">185</span>
                        </span>
                        <span>
                            Bust
                            <br>
                            <span class="highlight">79</span>
                        </span>
                        <span>
                            Waist
                            <br>
                            <span class="highlight">59</span>
                        </span>
                        <span>
                            Hips
                            <br>
                            <span class="highlight">87</span>
                        </span>
                        <span>
                            Shoes
                            <br>
                            <span class="highlight">39</span>
                        </span>
                        <span>
                            Eyes
                            <br>
                            <span class="highlight">Green</span>
                        </span>
                        <span>
                            Hair
                            <br>
                            <span class="highlight">Brown</span>
                        </span>
                        <span>
                            Size
                            <br>
                            <span class="highlight">8</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="vertical-item content-absolute hover-content text-center studio">
                <div class="item-media">
                    <img src="images/models_rectangle/10.jpg" alt="" />
                </div>
                <div class="item-content transp_gradient_bg">
                    <h3 class="model-name">
                        <a href="#">Rachel Tale</a>
                    </h3>
                    <p class="small-text lusitana highlight">Top model</p>

                    <div class="fontsize_16 lusitana text-uppercase grey parameters">
                        <span>
                            Height
                            <br>
                            <span class="highlight">185</span>
                        </span>
                        <span>
                            Bust
                            <br>
                            <span class="highlight">79</span>
                        </span>
                        <span>
                            Waist
                            <br>
                            <span class="highlight">59</span>
                        </span>
                        <span>
                            Hips
                            <br>
                            <span class="highlight">87</span>
                        </span>
                        <span>
                            Shoes
                            <br>
                            <span class="highlight">39</span>
                        </span>
                        <span>
                            Eyes
                            <br>
                            <span class="highlight">Green</span>
                        </span>
                        <span>
                            Hair
                            <br>
                            <span class="highlight">Brown</span>
                        </span>
                        <span>
                            Size
                            <br>
                            <span class="highlight">8</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="vertical-item content-absolute hover-content text-center session">
                <div class="item-media">
                    <img src="images/models_rectangle/02.jpg" alt="" />
                </div>
                <div class="item-content transp_gradient_bg">
                    <h3 class="model-name">
                        <a href="#">Rachel Tale</a>
                    </h3>
                    <p class="small-text lusitana highlight">Top model</p>

                    <div class="fontsize_16 lusitana text-uppercase grey parameters">
                        <span>
                            Height
                            <br>
                            <span class="highlight">185</span>
                        </span>
                        <span>
                            Bust
                            <br>
                            <span class="highlight">79</span>
                        </span>
                        <span>
                            Waist
                            <br>
                            <span class="highlight">59</span>
                        </span>
                        <span>
                            Hips
                            <br>
                            <span class="highlight">87</span>
                        </span>
                        <span>
                            Shoes
                            <br>
                            <span class="highlight">39</span>
                        </span>
                        <span>
                            Eyes
                            <br>
                            <span class="highlight">Green</span>
                        </span>
                        <span>
                            Hair
                            <br>
                            <span class="highlight">Brown</span>
                        </span>
                        <span>
                            Size
                            <br>
                            <span class="highlight">8</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="vertical-item content-absolute hover-content text-center top">
                <div class="item-media">
                    <img src="images/models_rectangle/17.jpg" alt="" />
                </div>
                <div class="item-content transp_gradient_bg">
                    <h3 class="model-name">
                        <a href="#">Rachel Tale</a>
                    </h3>
                    <p class="small-text lusitana highlight">Top model</p>

                    <div class="fontsize_16 lusitana text-uppercase grey parameters">
                        <span>
                            Height
                            <br>
                            <span class="highlight">185</span>
                        </span>
                        <span>
                            Bust
                            <br>
                            <span class="highlight">79</span>
                        </span>
                        <span>
                            Waist
                            <br>
                            <span class="highlight">59</span>
                        </span>
                        <span>
                            Hips
                            <br>
                            <span class="highlight">87</span>
                        </span>
                        <span>
                            Shoes
                            <br>
                            <span class="highlight">39</span>
                        </span>
                        <span>
                            Eyes
                            <br>
                            <span class="highlight">Green</span>
                        </span>
                        <span>
                            Hair
                            <br>
                            <span class="highlight">Brown</span>
                        </span>
                        <span>
                            Size
                            <br>
                            <span class="highlight">8</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="vertical-item content-absolute hover-content text-center fashion">
                <div class="item-media">
                    <img src="images/models_rectangle/12.jpg" alt="" />
                </div>
                <div class="item-content transp_gradient_bg">
                    <h3 class="model-name">
                        <a href="#">Rachel Tale</a>
                    </h3>
                    <p class="small-text lusitana highlight">Top model</p>

                    <div class="fontsize_16 lusitana text-uppercase grey parameters">
                        <span>
                            Height
                            <br>
                            <span class="highlight">185</span>
                        </span>
                        <span>
                            Bust
                            <br>
                            <span class="highlight">79</span>
                        </span>
                        <span>
                            Waist
                            <br>
                            <span class="highlight">59</span>
                        </span>
                        <span>
                            Hips
                            <br>
                            <span class="highlight">87</span>
                        </span>
                        <span>
                            Shoes
                            <br>
                            <span class="highlight">39</span>
                        </span>
                        <span>
                            Eyes
                            <br>
                            <span class="highlight">Green</span>
                        </span>
                        <span>
                            Hair
                            <br>
                            <span class="highlight">Brown</span>
                        </span>
                        <span>
                            Size
                            <br>
                            <span class="highlight">8</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="vertical-item content-absolute hover-content text-center studio">
                <div class="item-media">
                    <img src="images/models_rectangle/08.jpg" alt="" />
                </div>
                <div class="item-content transp_gradient_bg">
                    <h3 class="model-name">
                        <a href="#">Rachel Tale</a>
                    </h3>
                    <p class="small-text lusitana highlight">Top model</p>

                    <div class="fontsize_16 lusitana text-uppercase grey parameters">
                        <span>
                            Height
                            <br>
                            <span class="highlight">185</span>
                        </span>
                        <span>
                            Bust
                            <br>
                            <span class="highlight">79</span>
                        </span>
                        <span>
                            Waist
                            <br>
                            <span class="highlight">59</span>
                        </span>
                        <span>
                            Hips
                            <br>
                            <span class="highlight">87</span>
                        </span>
                        <span>
                            Shoes
                            <br>
                            <span class="highlight">39</span>
                        </span>
                        <span>
                            Eyes
                            <br>
                            <span class="highlight">Green</span>
                        </span>
                        <span>
                            Hair
                            <br>
                            <span class="highlight">Brown</span>
                        </span>
                        <span>
                            Size
                            <br>
                            <span class="highlight">8</span>
                        </span>
                    </div>
                </div>
            </div>

        </div> --}}
    </section>

    {{-- <section id="reviews" class="ds page_testimonials section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true">

                        <blockquote class="with_quotes text-center">
                            <img src="images/faces/01.jpg" alt="" />
                            <div class="item-meta">
                                <h5>
                                    <a href="#">Helen Thompson</a>
                                </h5>
                                <p class="small-text lusitana highlight">photographer</p>
                            </div>
                            Pork loin andouille rump, corned beef bacon kevin venison tail. Tri-tip boudin pig tenderloin ham. Meatloaf cupim picanha pork chop landjaeger pork chicken andouille jerky, shoulder flank turkey.
                        </blockquote>

                        <blockquote class="with_quotes text-center">
                            <img src="images/faces/01.jpg" alt="" />
                            <div class="item-meta">
                                <h5>
                                    <a href="#">Helen Thompson</a>
                                </h5>
                                <p class="small-text lusitana highlight">photographer</p>
                            </div>
                            Pork loin andouille rump, corned beef bacon kevin venison tail. Tri-tip boudin pig tenderloin ham. Meatloaf cupim picanha pork chop landjaeger pork chicken andouille jerky, shoulder flank turkey.
                        </blockquote>

                        <blockquote class="with_quotes text-center">
                            <img src="images/faces/01.jpg" alt="" />
                            <div class="item-meta">
                                <h5>
                                    <a href="#">Helen Thompson</a>
                                </h5>
                                <p class="small-text lusitana highlight">photographer</p>
                            </div>
                            Pork loin andouille rump, corned beef bacon kevin venison tail. Tri-tip boudin pig tenderloin ham. Meatloaf cupim picanha pork chop landjaeger pork chicken andouille jerky, shoulder flank turkey.
                        </blockquote>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="casting" class="ds ms parallax page_contact section_padding_top_100 section_padding_bottom_75 columns_padding_25 columns_margin_bottom_30">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">Casting</h2>
                    <p class="small-text highlight lusitana">For a chance to join us</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="fontsize_20">
            Do you want to be a famous supermodel of the best model agency in the world?
        </p>
                    <p>
            Chicken meatball tail t-bone. Rump sirloin turkey meatball. Spare ribs frankfurter beef brisket ribeye tongue bacon kevin fatback swine meatloaf ball tip rump corned beef. Swine sirloin turducken kielbasa ground round porchetta sausage doner filet mignon landjaeger. Bresaola porchetta sirloin.
        </p>
                    <ul class="list2">
                        <li>Vestibulum ac diam sit amet quam vehicula</li>
                        <li>Quisque velit nisi, pretium ut lacinia in</li>
                        <li>Nulla quis lorem ut libero malesuada feugiat</li>
                    </ul>
                </div>
                <div class="col-md-6">

                    <form class="contact-form row columns_padding_10 columns_margin_bottom_10" method="post" action="./">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control with_icon" placeholder="Name">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="country">Country
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="country" id="country" class="form-control with_icon" placeholder="Country">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone number
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control with_icon" placeholder="Phone number">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with_icon" placeholder="Email Address">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-sm-12">

                            <div class="form-group">
                                <label for="message">Your Resume</label>
                                <textarea aria-required="true" rows="7" cols="45" name="message" id="message" class="form-control with_icon" placeholder="Your resume"></textarea>
                                <i class="fa fa-folder-open" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">

                            <div class="contact-form-submit topmargin_20">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color2">Submit</button>
                                <button type="reset" id="contact_form_reset" name="contact_reset" class="theme_button inverse">Clear</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ds section_padding_100 columns_margin_bottom_20">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">Our Blog</h2>
                    <p class="small-text highlight lusitana">Latest trends of the industry</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_background bottom_color_border text-center">
                        <div class="item-media">
                            <img src="images/gallery/03.jpg" alt="">
                            <div class="media-links">
                                <a href="blog-single-right.html" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <span class="entry-date highlight lusitana">
                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                        March 13, 2017
                                    </time>
                                </span>
                                <h3 class="entry-title">
                                    <a href="blog-single-right.html">
                            To Keep Makeup...
                        </a>
                                </h3>
                                <p>
                        Bacon alcatra shankle meatloaf kevin. Capicola pork beef ribs ball tip. Strip steak turkey drumstick sirloin...
                    </p>
                                <p>
                        <a class="social-icon theme-color-icon soc-facebook" href="#" title="Facebook"></a>
                        <a class="social-icon theme-color-icon soc-twitter" href="#" title="Twitter"></a>
                        <a class="social-icon theme-color-icon soc-google" href="#" title="Google"></a>
                    </p>
                            </header>

                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6">
                    <article class="vertical-item content-padding with_background bottom_color_border text-center">
                        <div class="item-media">
                            <img src="images/gallery/04.jpg" alt="">
                            <div class="media-links">
                                <a href="blog-single-right.html" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <span class="entry-date highlight lusitana">
                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                        March 16, 2017
                                    </time>
                                </span>
                                <h3 class="entry-title">
                                    <a href="blog-single-right.html">
                            Luxury Watches...
                        </a>
                                </h3>
                                <p>
                        Short ribs t-bone bresaola jerky pastrami ham hock filet mignon. Picanha turkey tail, shank fatback bresaola...
                    </p>
                                <p>
                        <a class="social-icon theme-color-icon soc-facebook" href="#" title="Facebook"></a>
                        <a class="social-icon theme-color-icon soc-twitter" href="#" title="Twitter"></a>
                        <a class="social-icon theme-color-icon soc-google" href="#" title="Google"></a>
                    </p>
                            </header>

                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                    <article class="vertical-item content-padding with_background bottom_color_border text-center">
                        <div class="item-media">
                            <img src="images/gallery/05.jpg" alt="">
                            <div class="media-links">
                                <a href="blog-single-right.html" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <span class="entry-date highlight lusitana">
                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                        March 16, 2017
                                    </time>
                                </span>
                                <h3 class="entry-title">
                                    <a href="blog-single-right.html">
                            Is The Herbal Way...
                        </a>
                                </h3>
                                <p>
                        Filet mignon tongue kielbasa t-bone. Pork belly pork short loin, fatback pancetta corned beef tenderloin hamburger...
                    </p>
                                <p>
                        <a class="social-icon theme-color-icon soc-facebook" href="#" title="Facebook"></a>
                        <a class="social-icon theme-color-icon soc-twitter" href="#" title="Twitter"></a>
                        <a class="social-icon theme-color-icon soc-google" href="#" title="Google"></a>
                    </p>
                            </header>

                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="contacts" class="cs background_cover page_banner section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <span class="small-text main_bg_color2">24/7 support</span>
                    <p class="big playfair topmargin_10">1-800-123-4567</p>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
