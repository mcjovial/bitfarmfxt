@extends('layout')
@section('css')

@stop
@section('content')

    <title> Bitfarmfxt investment firm </title>

    <!--<link rel="stylesheet" type="text/css" href="/stylesheet/vid.css">-->
    {{-- <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/clone/stylesheet/theme.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/asset/clone/stylesheet/home.css">

    <main>
        <section>
            <div class="swiper-container swiper1">
                <div class="swiper-wrapper swiper">
                    <!-- Slides -->
                    <div class="swiper-slide swiper__bg" id="first-slide">
                        <div class="bg-darken"></div>
                        <div class="swiper__cont hundper">
                            <div class="swiper__body">
                                <div class="swiper__body--text text-center" id="swiper__body-1">
                                    <div>
                                        <h2 class="wel-h3 text-center coloured" id="wel-h3-sec">BITFARMFXT CRYPTOCURRENCY INVESTMENTS</h2>
                                    </div>
                                    <p>Your single point of access to professional cryptoasset investment solution. Built for investors interested in stable returns and high liquidity.
                                        We offer an array of cryptocurrency investment products.</p>
                                    <div id="wel-btn-first">
                                        <div class="btn__normal transparent mt15 take-tour">take a tour &nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-angle-double-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper__bg" id="second-slide">
                        <div class="bg-darken enhance"></div>
                        <div class="swiper__cont hundper">
                            <div class="swiper__body" id="swiper__body-2">
                                <div class="swiper__body--text text-right">
                                    <div>
                                        <h1 class="wel-h3 text-right coloured" id="wel-h3-sec">More investment options. <br> More opportunities to grow.</h1>
                                    </div>
                                    <p id="wel-para-sec">With over 5 years of experience we've developed unique strategies to offer you unparalleled trades. </p>
                                    <p>Join our Platform today to get started</p>
                                    <div id="wel-btn-sec">
                                        <a class="btn__normal roll--text coloured mt15" data-text="Open free account" href="{{route('register')}}">Open free account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-header-left">
                    <span class="ti-angle-left"></span>
                </div>
                <div class="swiper-header-right">
                    <span class="ti-angle-right"></span>
                </div>
            </div>
            <div class="tradingview-widget-container" style="width: 100%; height: 72px;">
                <iframe scrolling="no" allowtransparency="true" frameborder="0"
                    src="https://s.tradingview.com/embed-widget/tickers/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A72%2C%22utm_source%22%3A%22ulscapital.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22tickers%22%7D"
                    style="box-sizing: border-box; height: 72px; width: 100%;"></iframe>
        
        
                <style>
                    .tradingview-widget-copyright {
                        font-size: 13px !important;
                        line-height: 32px !important;
                        text-align: center !important;
                        vertical-align: middle !important;
                        font-family: 'Trebuchet MS', Arial, sans-serif !important;
                        color: #9db2bd !important;
                    }
        
                    .tradingview-widget-copyright .blue-text {
                        color: #2196f3 !important;
                    }
        
                    .tradingview-widget-copyright a {
                        text-decoration: none !important;
                        color: #9db2bd !important;
                    }
        
                    .tradingview-widget-copyright a:visited {
                        color: #9db2bd !important;
                    }
        
                    .tradingview-widget-copyright a:hover .blue-text {
                        color: #38acdb !important;
                    }
        
                    .tradingview-widget-copyright a:active .blue-text {
                        color: #299dcd !important;
                    }
        
                    .tradingview-widget-copyright a:visited .blue-text {
                        color: #2196f3 !important;
                    }
                </style>
            </div>
        </section>

        <!--cover section slider end -->

        <!--event info -->
        {{-- <section class="t-center" style="padding: 0; overflow: hidden;"> --}}

        {{-- </section> --}}
        
        
        
        <div class="uk-section" data-animate="fadeIn">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-secondary uk-background-center-right uk-background-contain uk-background-image@m"
                            style="background-image: url({{url('/')}}/asset/nova/site-images/_87824397_1024final_2a.jpg);">
                            <!-- img/monee-content-image7.jpg -->
                            <div class="uk-card-body">
                                <div class="uk-grid">
                                    <div class="uk-width-1-2@m uk-margin-small-left">
                                        <h2 class="uk-margin-remove-bottom" style="text-transform: uppercase;     font-size: 23px;">Professional Cryptocurrency traders and analysts</h2>
                                        <p class="uk-margin-small-top">Bitfarmfxt Investments is an investment services company. We offer our investors access to high-growth investment opportunities in the Bitcoin markets.<br>
                                            Our professional team will take charge of trading and mining management. Your investment profit is secured.
                                        </p> <a
                                            class="uk-button uk-button-primary uk-border-rounded" href="{{route('about')}}">More Insights</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="uk-section" data-animate="fadeIn">
            <div class="uk-container">
            <div class="uk-grid">
            <div class="uk-width-1-1 in-wave-16">
                <div class="in-margin-medium-top@s">
                    <div class="uk-grid" data-uk-grid="">
                        <div class="uk-width-expand@s uk-width-2-5@m uk-card-media-right uk-cover-container uk-first-column">
                            <img class="uk-width-1-1 uk-margin-remove-bottom" src="{{url('/')}}/asset/nova/levo.jpg" alt="Bitfarmfxt Investments">
                        </div>
                        <div class="uk-width-1-2@s uk-width-expand@m uk-flex uk-flex-middle">
                            <div class="">
                                <h1 class="uk-margin-top uk-margin-remove-bottom" style="text-transform: uppercase; font-size: 22px">Trusted by more than 45 thousand cryptocurrecny investors around the world.</h1>
                                <hr>
                                <h4 class="uk-margin-remove-top uk-margin-remove-bottom">Fully regulated</h4>
                                <p class="uk-margin-small-top uk-margin-bottom">We adhere to the strictest regulatory
                                    standards, and are fully licensed and regulated across Europe, the Middle East and Asia.</p>
                                <h4 class="uk-margin-remove-bottom">Multi-award winner</h4>
                                <p class="uk-margin-small-top uk-margin-bottom">We’ve been consistently recognised by our industry
                                    and have won the highest accolades for our products, platform and investment services.</p>
                                <hr class="">
                                <div class="uk-child-width-1-3@m uk-text-center uk-visible@m uk-grid" data-uk-grid="">
                                    <div class="uk-first-column">
                                        <img src="{{url('/')}}/asset/nova/img/in-wave-award.svg" alt="wave-award">
                                        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Most Reliable International Crypto Trading Platform</h6>
                                        <p class="uk-text-small uk-margin-remove-top">BTC TradeON Summit 2017</p>
                                    </div>
                                    <div>
                                        <img src="{{url('/')}}/asset/nova/img/in-wave-award.svg" alt="wave-award">
                                        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Cryptocurrency Investments and Brokerage Platform</h6>
                                        <p class="uk-text-small uk-margin-remove-top">BTC CIS Awards EXPO 2020</p>
                                    </div>
                                    <div>
                                        <img src="{{url('/')}}/asset/nova/img/in-wave-award.svg" alt="wave-award">
                                        <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Blockchain Accelerator and Execution Broker </h6>
                                        <p class="uk-text-small uk-margin-remove-top">AZTOMARKETS EXPO Dubai 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="uk-width-1-1 uk-margin-medium-top">
                <div class="uk-grid-divider uk-grid" data-uk-grid="">
                    <div class="uk-width-auto@m uk-flex uk-flex-middle uk-first-column jc-sm">
                        <p class="uk-text-lead uk-text-muted uk-margin-right">As seen on</p>
                    </div>
                    <div class="uk-width-expand@m f-cont_888ji98">
                        <div class="uk-grid-medium uk-child-width-1-4@s uk-child-width-1-5@m uk-text-center in-client-logo-3 uk-grid" data-uk-grid="">
                            <div class="uk-tile uk-tile-default uk-first-column">
                                <img class="uk-margin-remove" src="{{url('/')}}/asset/nova/img/in-wave-media-1.svg" alt="client-logo" width="147" height="42">
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <img class="uk-margin-remove" src="{{url('/')}}/asset/nova/img/in-wave-media-2.svg" alt="client-logo" width="147" height="42">
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <img class="uk-margin-remove" src="{{url('/')}}/asset/nova/img/in-wave-media-3.svg" alt="client-logo" width="147" height="42">
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <img class="uk-margin-remove" src="{{url('/')}}/asset/nova/img/in-wave-media-4.svg" alt="client-logo" width="147" height="42">
                            </div>
                            <div class="uk-tile uk-tile-default uk-visible@m">
                                <img class="uk-margin-remove" src="{{url('/')}}/asset/nova/img/in-wave-media-5.svg" alt="client-logo" width="147" height="42">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            </div>
            </div>
        </div>


        <div id="tored"></div>
        {{-- <section class="mb80 mt80">
            <div class="container-custom" id="sec-intro">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="short" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
                            <div class="short__container">
                                <div class="short__icon">
                                    <div class="short__icon--holder">
                                        <span class="icon-speedometer short__icon-icon"></span>
                                    </div>
                                    <div class="short__icon--text">
                                        <span>Experienced</span>
                                    </div>
                                </div>

                                <div class="short__text pt10 text-center">
                                    <p class="pb10 pr15 pl15">
                                    With over 5 years of trading experience, our expert traders along with our enhanced AI trading bot are guaranteed to provide you with some of the best trading practices available on the crypto market. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="short" data-aos="zoom-in" data-aos-duration="1800" data-aos-once="true">
                            <div class="short__container">
                                <div class="short__icon">
                                    <div class="short__icon--holder">
                                        <span class="icon-equalizer short__icon-icon"></span>
                                    </div>
                                    <div class="short__icon--text">
                                        <span>Multi-crypto</span>
                                    </div>
                                </div>

                                <div class="short__text pt10 text-center">
                                    <p class="pb10 pr15 pl15">
                                        Here at Bitfarmfxt, we give our clients the opportunity to diversify their portfolio and invest in multiple cryptocurrencies. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="short" data-aos="fade-left" data-aos-duration="1500" data-aos-once="true"> 
                            <div class="short__container">
                                <div class="short__icon">
                                    <div class="short__icon--holder">
                                        <span class="icon-anchor short__icon-icon"></span>
                                    </div>
                                    <div class="short__icon--text">
                                        <span>Reduce risks</span>
                                    </div>
                                </div>

                                <div class="short__text pt10 text-center">
                                    <p class="pb10 pr15 pl15">
                                        Our Experts and AI enhanced statistical models help us scale the risks in Forex and Cryptocurrency markets, ensuring relatively low risk even during periods of volatility. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!--<section style="position: relative">-->
        <!--    <div class="container">-->
        <!--        <div class="row justify-content-center">-->
        <!--            <div class="col-md-7">-->
        <!--                <video-js id="my-about" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">-->
        <!--                    <source src="/videosw/trade.webm" type="video/webm">-->
        <!--                    <source src="/videosw/trade.webm" type="video/webm">-->
                        
        <!--                    <p class="vjs-no-js">-->
        <!--                        To view this video please enable JavaScript, and consider upgrading to a-->
        <!--                        web browser that supports HTML5 video.-->
        <!--                    </p>-->
        <!--                </video-js>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        

        <!--event countdown -->
        <section class="pb70">
            <div class="explain">
                <div class="row justify-content-center">
                    <div class="col-md-6 p0">
                        <div class="explain__text">
                            <div>
                                <h4 class="mb40">Our <span style="color: #9be547">Mission</span></h4>
                                <p class="text-left mb50 explit">
                                Helping our Clients earn Passive Income is our Major Goal. Here at Bitfarmfxt,
                                    we want to provide the most transparent and stable investment platform available. 
                                    Make no mistake, investing your money into Cryptocurrencies is always a risk, but when your trades are backed by the experience of our team and our AI enhanced trading models, you stand to gain much more than you risk losing. We are a professional and trusted wealth
                                    management company with specializations in Wealth Creation and Digital Assets. We offer different rates of return for Forex and Cryptocurrency trading, determined by our traders and AI blockchain systems.

                                </p>
                                <a class="btn__normal coloured" href="{{route('login')}}">Get started &nbsp;&nbsp;<i class="ti-stats-up"></i></a>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6 p0">
                        <div class="text-center explain__bg bg-img">
                            <!-- <img src="assets/img/hellit.jpg" data-aos="fade-left"> --> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
<style>
    .yuwnk7826stef img{
        height: 420px !important;
        object-fit: cover !important;
    }
</style>




<style>
    .jdjjwjwjw9292992_stef .in-wave-12-counter h1 {
        font-size: 30px !important;
        text-transform: uppercase !important;
    }

    .jdjjwjwjw9292992_stef .in-wave-12-counter h1 .in-wave-12-small{
        font-size: 17px !important;
    }

    .jdjjwjwjw9292992_stef .in-wave-12-counter .uk-text-muted.uk-margin-remove-top{
        font-size: 13px !important;
    }
    .jdjjwjwjw9292992_stef .in-wave-12-counter .uk-margin-top.uk-margin-remove-bottom{
        font-size: 14px !important;
    }


    .in-wave-12 blockquote .uk-label{
        background-color:  #016a01 !important;
    }

    .in-wave-12 .in-wave-12-counter {
        border-bottom: 1px solid #0d6a01 !important;
    }
</style>

        <section>
            <div data-animate="fadeIn" class="uk-section in-wave-12 in-offset-bottom-70" data-animate="fadeIn">
                <div class="uk-container">
                <div class="uk-grid">
                <div class="uk-width-3-4@m">
                    <h1 class="uk-margin-remove-bottom hhhsuusjsj9wjkwmkkw" style="text-transform: uppercase;
                    font-size: 30px; text-align: center;">Why Investors choose <span>Bitfarmfxt</span></h1>
                </div>
                </div>
                <div class="uk-grid-large uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top uk-grid jdjjwjwjw9292992_stef" data-uk-grid="">
                <div class="uk-first-column">
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="count" data-counter-end="20">7+ </span>  &nbsp;
                            <span class="in-wave-12-small">years</span>
                        </h1>
                        <h4 class="uk-margin-top uk-margin-remove-bottom">Experience</h4>
                        <p class="uk-text-muted uk-margin-remove-top">Since 2013</p>
                    </div>
                </div>
                <div>
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove">
                            <span class="count" data-counter-end="15">4+ </span> &nbsp;
                            <span class="in-wave-12-small">years</span>
                        </h1>
                        <h4 class="uk-margin-top uk-margin-remove-bottom">SEC Regulated</h4>
                        <p class="uk-text-muted uk-margin-remove-top">Since 2016</p>
                    </div>
                </div>
                <div>
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove" style="font-size: 28px !important;">
                            <span class="count" data-counter-end="18">Over 3 </span>  &nbsp;
                            <span class="in-wave-12-small">million</span>
                        </h1>
                        <h4 class="uk-margin-top uk-margin-remove-bottom">Active Investment Accounts</h4>
                        <p class="uk-text-muted uk-margin-remove-top">Worldwide Investors</p>
                    </div>
                </div>
                <div>
                    <div class="in-wave-12-counter">
                        <h1 class="uk-heading-medium uk-margin-remove" style="font-size: 28px !important;">
                            <span class="count" data-counter-end="24">$90+ </span>  &nbsp;
                            <span class="in-wave-12-small">Billion USD</span>
                        </h1>
                        <h4 class="uk-margin-top uk-margin-remove-bottom">In Active Investments</h4>
                        <p class="uk-text-muted uk-margin-remove-top">Capital Invested</p>
                    </div>
                </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center uk-background-contain uk-background-top-center in-testimoni-wrap uk-background-image@m" style="background-image: url(img/in-wave-testibg.jpg);">
                <div class="uk-width-3-4@m">
                    <div class="uk-flex uk-flex-middle uk-grid" data-uk-grid="">
                        <div class="uk-width-1-1 uk-width-auto@m uk-flex-last uk-flex-first@m uk-first-column">
                            <img class="uk-align-center uk-margin-remove-bottom" src="{{url('/')}}/asset/nova/img/in-testimoni-1.png" alt="client-testimoni" width="300">
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <blockquote>
                                <p class="uk-margin-bottom uk-text-large" style="font-size: 16px;">
            
                                I have been an investor at Bitfarmfxt the past few years. They have been great to work with and offer a good ROI (return of investment). As an investment banker for over 45 years, recently retired, I am a tough grader but this company met and surpassed my expectations. They are a reliable source to preserve principal and get a steady stream of income. Bitfarmfxt has always been professional and effective at meeting my financial needs.
            
            
                                </p>
                                <footer>Anthony Keiser<br><cite class="uk-label uk-text-small uk-border-pill">Investor since 2017</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </section>
        <!-- section content end -->
        
        <section>
            <div data-animate="fadeIn" class="uk-section">
                <div class="uk-container">
                    <div class="uk-grid" data-uk-grid="">
                        <div class="uk-width-1-3@m uk-margin-top uk-first-column">
                            <h2>Bitfarmfxt</h2>
                            <p>Invest with confidence and benefit from the reliability of a trusted broker with a proven record of
                                stability, security and strength.</p> <a
                                class="uk-button uk-button-primary uk-button-large uk-border-rounded" href="{{route('register')}}">Open an Account</a>
                            <p>Not ready? <a href="{{route('about')}}">Learn more about us.</a></p>
                        </div>
                        <div class="uk-width-expand@m">
                            <div
                                class="uk-grid uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center monee-custom-tile">
                                <div class="uk-tile uk-tile-default"> <img class="uk-margin-remove-bottom"
                                        src="{{url('/')}}/asset/nova/img/monee-content-feature1.svg"
                                        data-src="{{url('/')}}/asset/nova/img/monee-content-feature1.svg" alt="monee-feauture" width="50" height="48"
                                        data-uk-img="">
                                    <h5 class="uk-margin-small-top">Lucrative Returns</h5>
                                </div>
                                <div class="uk-tile uk-tile-default"> <img class="uk-margin-remove-bottom"
                                        src="{{url('/')}}/asset/nova/img/monee-content-feature2.svg"
                                        data-src="{{url('/')}}/asset/nova/img/monee-content-feature2.svg" alt="monee-feauture" width="50" height="48"
                                        data-uk-img="">
                                    <h5 class="uk-margin-small-top">Fast executions</h5>
                                </div>
                                <div class="uk-tile uk-tile-default"> <img class="uk-margin-remove-bottom"
                                        src="{{url('/')}}/asset/nova/img/monee-content-feature3.svg"
                                        data-src="{{url('/')}}/asset/nova/img/monee-content-feature3.svg" alt="monee-feauture" width="50" height="48"
                                        data-uk-img="">
                                    <h5 class="uk-margin-small-top" style="text-transform: capitalize">World class crypto trading technologies</h5>
                                </div>
                                <div class="uk-tile uk-tile-default"> <img class="uk-margin-remove-bottom"
                                        src="{{url('/')}}/asset/nova/img/monee-content-feature4.svg"
                                        data-src="{{url('/')}}/asset/nova/img/monee-content-feature4.svg" alt="monee-feauture" width="50" height="48"
                                        data-uk-img="">
                                    <h5 class="uk-margin-small-top">Investor Support &amp; guide</h5>
                                </div>
                                <div class="uk-tile uk-tile-default uk-visible@m"> <img class="uk-margin-remove-bottom"
                                        src="{{url('/')}}/asset/nova/img/monee-content-feature5.svg"
                                        data-src="{{url('/')}}/asset/nova/img/monee-content-feature5.svg" alt="monee-feauture" width="50" height="48"
                                        data-uk-img="">
                                    <h5 class="uk-margin-small-top">Investor Oriented</h5>
                                </div>
                                <div class="uk-tile uk-tile-default uk-visible@m"> <img class="uk-margin-remove-bottom"
                                        src="{{url('/')}}/asset/nova/img/monee-content-feature6.svg"
                                        data-src="{{url('/')}}/asset/nova/img/monee-content-feature6.svg" alt="monee-feauture" width="50" height="48"
                                        data-uk-img="">
                                    <h5 class="uk-margin-small-top">Strongly regulated</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section class="mt50">
            <div class="plan">
                <div class="plan__heading text-center">
                    {{-- <h3 class="h3-heading text-center">Price list</h3> --}}
                    <h1 class="mb15">plans we offer</h1>
                    <div class="divider">
                        <div class="divider__span">
                            <i class="ti-more-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="container-custom">
                    <div class="row mt60">
                        <div class="col-md-4 col-lg-4 mb100">
                            <div class="price" data-aos="fade-right">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                ROOKIE PLAN
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_first">3.0</per>
                                        </div>
                                        <div class="pricing__period mb15">/Weekly ROI</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-wallet"></i>
                                    </div>

                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$1,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>$9,999</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>3%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-1" onclick="planActivator('#duration-1')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per1">1 month <i class="fa fa-angle-double-down"></i></span> -->
                                    <!--</div>-->
                                    {{-- <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div> --}}
                                </div>

                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal coloured animated--text" 
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4 mb100">
                            <div class="price" data-aos="fade-right">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                PREMIUM PLAN
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_first">4.2</per>
                                        </div>
                                        <div class="pricing__period mb15">/Weekly ROI</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-wallet"></i>
                                    </div>

                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$10,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>$49,999</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>5%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-1" onclick="planActivator('#duration-1')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per1">1 month <i class="fa fa-angle-double-down"></i></span> -->
                                    <!--</div>-->
                                    {{-- <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div> --}}
                                </div>

                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal coloured animated--text" 
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4 col-lg-4 mb100">
                            <div class="price" data-aos="fade-up">
                                <div class="price__top">
                                    <div class="pricing text-center">
                                        <div class="pricing__name">
                                            <h4 class="mb40">
                                                ENTERPRISE PLAN
                                            </h4>
                                        </div>
                                        <div class="pricing__per mb30">
                                            <span>%</span><per id="percentage_sec">5</per>
                                        </div>
                                        <div class="pricing__period mb15">/Weekly ROI</div>
                                    </div>
                                </div>
                                <div class="price__description pr20 pl20">
                                    <div class="pricing__icon text-center">
                                        <i class="ti-pulse"></i>
                                    </div>

                                    <div class="price__description-item text-center">
                                        <!--<span class="black-friday"> Black Friday (-20%)</span>-->
                                        <span>Minimum deposit</span> &nbsp;-&nbsp; <span>$50,000</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Maximum deposit</span> &nbsp;-&nbsp; <span>Unlimited</span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Referral-commission</span> &nbsp;-&nbsp; <span>7%</span>
                                    </div>
                                    <!--<div class="price__description-item text-center duru" id="duru-2" onclick="planActivator('#duration-2')">-->
                                    <!--    <span>Plan-Duration</span> &nbsp;-&nbsp; <span id="changed_per2">1 month <i class="fa fa-angle-double-down"></i></span>-->
                                    <!--</div>-->
                                    {{-- <div class="price__description-item text-center">
                                        <span>Capital Protection</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div>
                                    <div class="price__description-item text-center">
                                        <span>Instant Payout</span> &nbsp;-&nbsp; <span> <i class="ti-check-box"></i></span>
                                    </div> --}}
                                </div>
                                <div class="price__submit mt30 mb30">
                                    <div class="text-center">
                                        <a class="btn__normal coloured animated--text" 
                                        
                                        
                                            href="{{route('login')}}"
                                        
                                        
                                        >Buy Plan </a>           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt20 hide-over">
            <div class="stats">
                <div class="stats__bg bg-img">
                    <div class="overlay_dark" style="background-color: rgba(0,0,0,.4)"></div>
                    <div class="stats__container container-custom">
                        <div class="row widthper">
                            <div class="col-md-3" data-aos="fade-in" data-aos-duration="1400">
                                <div class="text-center">
                                    <div class="stats__top mt20 mb10">
                                        <h4 class="m0">
                                            <span class="counter">463086</span>
                                        </h4>
                                    </div>
                                    <div class="stats__bottom">
                                        <div class="stats__icon mr10">
                                            <i class="pe-7s-alarm"></i>
                                        </div>
                                        <h5>Trades won</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" data-aos="fade-in" data-aos-duration="1400">
                                <div class="text-center">
                                    <div class="stats__top mt20 mb10">
                                        <h4 class="m0">
                                            <span class="counter">49879</span>
                                        </h4>
                                    </div>
                                    <div class="stats__bottom">
                                        <div class="stats__icon mr10">
                                            <i class="pe-7s-drop"></i>
                                        </div>
                                        <h5>Happy Clients</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center" data-aos="fade-in" data-aos-duration="1400">
                                    <div class="stats__top mt20 mb10">
                                        <h4 class="m0">
                                            <span class="counter">234562</span>
                                        </h4>
                                    </div>
                                    <div class="stats__bottom">
                                        <div class="stats__icon mr10">
                                            <i class="pe-7s-cloud-upload"></i>
                                        </div>
                                        <h5>Total Payout</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center" data-aos="fade-in" data-aos-duration="1400">
                                    <div class="stats__top mt20 mb10">
                                        <h4 class="m0">
                                            <span class="counter">9546</span>
                                        </h4>
                                    </div>
                                    <div class="stats__bottom">
                                        <div class="stats__icon mr10">
                                            <i class="pe-7s-add-user"></i>
                                        </div>
                                        <h5>Referrals</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        {{-- <section class="mt100 mb20" id="prices">
            <div class="container">
                <div class="crypto-price">
                    <div class="crypto-price__heading mb50">
                        crypto <span style="color: #9be547">price</span>
                    </div>
                    <div class="row m0">
                        <div class="col-md-3 p0">
                            <div class="crypto-price__container">
                                <div class="text-center crypto-price__name">
                                    <span class="name">Bitcoin</span>
                                    <h2 class="mt5 mb10"><span id="btc-price">0.0</span> $</h2>
                                </div>

                                <div class="crypto-price__icon text-center">
                                    <span class="cc BTC-alt BTC"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p0">
                            <div class="crypto-price__container">
                                <div class="text-center crypto-price__name">
                                    <span class="name">Ether</span>
                                    <h2 class="mt5 mb10"><span id="eth-price">0.0</span> $</h2>
                                </div>

                                <div class="crypto-price__icon text-center">
                                    <span class="cc ETH-alt ETH"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p0">
                            <div class="crypto-price__container">
                                <div class="text-center crypto-price__name">
                                    <span class="name">Bitcash</span>
                                    <h2 class="mt5 mb10"><span id="bch-price">0.0</span> $</h2>
                                </div>

                                <div class="crypto-price__icon text-center">
                                    <span class="cc BCH-alt BCH-alt"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p0">
                            <div class="crypto-price__container">
                                <div class="text-center crypto-price__name">
                                    <span class="name">Litecoin</span>
                                    <h2 class="mt5 mb10"><span id="ltc-price">0.0</span> $</h2>
                                </div>

                                <div class="crypto-price__icon text-center">
                                    <span class="cc LTC-alt LTC"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section class="testimonial-bg">
            <div class="testimonial pt100 pb100" id="reviews">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="testimonial__heading text-center">
                                <h3 class="mb10">Clients <span class="primary">Reviews</span></h3>
                                <p class="mb10" style="font-weight: 500">Don't just take our word for it! &nbsp; See what our clients say</p>

                                <div class="divider" id="test-mon">
                                    <div class="divider__span" style="background: transparent">
                                        <i class="ti-more-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__carousel">
                        <div class="swiper-container pt35 swiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <!-- <video-js id="my-testimon" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">-->
                                            <!--    <source src="/videosw/testmon3.mp4" type="video/mp4">-->
                                            <!--    <source src="/videosw/testmon3.mp4" type="video/mp4">-->
                                            
                                            <!--    <p class="vjs-no-js">-->
                                            <!--        To view this video please enable JavaScript, and consider upgrading to a-->
                                            <!--        web browser that supports HTML5 video-->
                                            <!--    </p>-->
                                            <!--</video-js>-->
                                            
                                            <video width="100%" height="100%" controls>
                                                <source src="videosw/testmon3.mp4" type="video/mp4">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                                Your browser does not support the video tag.
                                            </video> 
                                            
                                            <div class="testimonial__text text-center pt10">
                                                <div class="client-name">Amelia Anderson.. <i class="ti-crown"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <!-- <video-js id="my-testimon2" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">-->
                                            <!--    <source src="/videosw/testmon2.webm" type="video/webm">-->
                                            <!--    <source src="/videosw/testmon2.webm" type="video/webm">-->
                                            
                                            <!--    <p class="vjs-no-js">-->
                                            <!--        To view this video please enable JavaScript, and consider upgrading to a-->
                                            <!--        web browser that supports HTML5 video-->
                                            <!--    </p>-->
                                            <!--</video-js>-->
                                            
                                            <video width="100%" height="100%" controls>
                                                <source src="videosw/testmon2.webm" type="video/mp4">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                                Your browser does not support the video tag.
                                            </video>
                                            
                                            <div class="testimonial__text text-center pt10">
                                                <div class="client-name">Harald Dammen.. <i class="ti-crown"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6">
                                            <!-- <video-js id="my-testimon3" data-setup='{"fluid": true}' class="video-js vjs-theme-city vjs-big-play-centered">-->
                                            <!--    <source src="/videosw/testmon1.webm" type="video/webm">-->
                                            <!--    <source src="/videosw/testmon1.webm" type="video/webm">-->
                                            
                                            <!--    <p class="vjs-no-js">-->
                                            <!--        To view this video please enable JavaScript, and consider upgrading to a-->
                                            <!--        web browser that supports HTML5 video-->
                                            <!--    </p>-->
                                            <!--</video-js>-->
                                            
                                            <video width="100%" height="100%" controls>
                                                <source src="videosw/testmon1.webm" type="video/mp4">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                                Your browser does not support the video tag.
                                            </video>
                                            
                                            <div class="testimonial__text text-center pt10">
                                                <div class="client-name">Zhang Li Yáng.. <i class="ti-crown"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--<div class="swiper-slide">-->
                                <!--    <div class="testimonial__client text-center pb30">-->
                                <!--        <div>-->
                                <!--            <img src="/img/testi/5.jpg" alt="client 1">-->
                                <!--            <div class="client__rating">99</div>-->
                                <!--        </div>-->
                                <!--    </div>-->
        
                                <!--    <div class="testimonial__text text-center">-->
                                <!--        <div class="mb10">-->
                                <!--            <p>-->
                                                
                                <!--                The Successful expansion of our business was made possible by Bitfarmfxt. We-->
                                <!--                were able to achieve this through compounding our profits over a period of Six-->
                                <!--                Months. It was the best decision we made in 2017, and perhaps even in the history of our company. They offered great assistance-->
                                <!--                and support throughout the process. JOIN Them today and they might just-->
                                <!--                change your story!-->


                                                    
                                <!--            </p>-->
                                <!--        </div>-->
                                <!--        <div class="client-name">Michelle Shirley.. <i class="ti-crown"></i></div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>

                            <div class="swiper-control-left">
                                <div class="ti-angle-left"></div>
                            </div>
                            <div class="swiper-control-right">
                                <div class="ti-angle-right"></div>
                            </div>
                            
                        </div>       
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section class="pb100" style="background-color: #fafbfb">
            <div class="embrace">
                <div class="embrace__bg bg-img">
                    <div class="overlay_dark" style="background-color: rgba(0,0,0,.4)"></div>
                    <div class="container main">
                        <div class="row m0">
                            <div class="col-md-6 pb40 pt40">
                                <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                    <h4 class="mb40">Embrace Cryptocurrency</h4>
                                    <p class="text-justify-s">
                                        <i class="ti-wallet"></i>&nbsp;&nbsp; A constant uptick in the price of cryptocurrency remains the biggest pull factor
                                        for most investors. People are encouraged to follow this trend in anticipation of a
                                        possible price hike in the future. Bitcoin has seen a drastic increase in its worth,
                                        and it’s market cap is exponentially larger than what it was at its inception. Other
                                        cryptocurrencies like Ethereum have also evolved in a similar manner since their creation and show absolutely no signs of slowing down. We leverage these emerging assets on a weekly, monthly, and yearly basis to provide our clients and our company with lucrative rewards. 

                                    </p>
                                </div>    
                            </div>
                            <div class="col-md-6 pb40">
                                <div class="text-right hundper">
                                    <div class="embrace__video hundper" data-aos="fade-left">
                                        <a href="http://www.youtube.com/watch?v=aVUqXuIcpZ4" class="" id="embrace">
                                            <i class="pe-7s-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section> --}}
                
        <style>
            .crypto-logos img{
                height: 70px;
            }
        </style>

        <div data-animate="fadeIn" class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-secondary">
                            <div class="uk-card-body">
                                <style>
                                    .uejje7893hh38 .uk-width-expand p{
                                        font-size: 14px !important;
                                    }

                                    .uejje7893hh38 .in-icon-wrapper.small.theme-color{
                                        font-size: 16px;
                                    }
                                </style>
                                <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m uejje7893hh38" data-uk-grid="">
                                    <div class="uk-first-column">
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrapper small theme-color"> 1 </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-margin-remove-bottom">Register</h3>
                                                <p class="uk-margin-small-top uk-margin-remove-bottom">To get started, you need to create a new Bitfarmfxt Account. <br> Fill in the required infomrmation on the "create account" page to create your free Bitfarmfxt investment account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrapper small theme-color"> 2 </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-margin-remove-bottom">Fund</h3>
                                                <p class="uk-margin-small-top uk-margin-remove-bottom">Before you can purchase an investment plan and commence investing you will need to fund your account. <br> You can fund your investment account using either Bitcoin, Ethereum or Bitcoin Cash.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-grid uk-grid-small">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrapper small theme-color"> 3 </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h3 class="uk-margin-remove-bottom">Earn</h3>
                                                <p class="uk-margin-small-top uk-margin-remove-bottom">After you have made an investment, you can sit back and watch your balance grow daily while our traders manage your risks for you. <br> You can withdraw your earnings (ROI) when they mature.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="uk-width-1-1 ryr93k3k monee-payment-list uk-margin-medium-top uk-grid-margin uk-first-column">
                                        <hr>
                                        <div class="uk-grid-divider crypto-logos uk-child-width-1-6@m uk-child-width-1-2@s uk-grid"
                                            data-uk-grid="">
                                            <div class="uk-first-column"> <img class="uk-align-center btc-crypto-logo"
                                                    src="{{url('/')}}/asset/nova/site-images/crypto-logos/bitcoin-logo.svg"
                                                    data-src="{{url('/')}}/asset/nova/img/monee-payment-mastercard.svg" alt="monee-mastercard"
                                                    width="103" height="32" data-uk-img=""> </div>
                                            <div> <img class="uk-align-center" style="width: 100% !important;"
                                                    src="{{url('/')}}/asset/nova/site-images/crypto-logos/ethereum.svg"
                                                    data-src="{{url('/')}}/asset/nova/img/monee-payment-visa.svg" alt="monee-visa" width="103"
                                                    height="32" data-uk-img=""> </div>
                                            <div> <img class="uk-align-center"
                                                    src="{{url('/')}}/asset/nova/site-images/crypto-logos/ripple.svg"
                                                    data-src="{{url('/')}}/asset/nova/img/monee-payment-paypal.svg" alt="monee-paypal" width="103"
                                                    height="32" data-uk-img=""> </div>
                                            <div> <img class="uk-align-center"
                                                    src="{{url('/')}}/asset/nova/site-images/crypto-logos/aricoin.svg"
                                                    data-src="{{url('/')}}/asset/nova/img/monee-payment-skrill.svg" alt="monee-skrill" width="103"
                                                    height="32" data-uk-img=""> </div>
                                            <div class="uk-visible@m"> <img class="uk-align-center"
                                                    src="{{url('/')}}/asset/nova/site-images/crypto-logos/libra-2.svg"
                                                    data-src="{{url('/')}}/asset/nova/img/monee-payment-neteller.svg" alt="monee-neteller" width="103"
                                                    height="32" data-uk-img=""> </div>
                                            <div class="uk-visible@m">
                                                <img class="uk-align-center"
                                                    src="{{url('/')}}/asset/nova/site-images/crypto-logos/husd-3.svg"
                                                    data-src="{{url('/')}}/asset/nova/img/monee-payment-unionpay.svg" alt="monee-unionpay" width="103"
                                                    height="32" data-uk-img=""> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .testimonial-item p{
                font-size: 14px !important;
            }
        </style>
        <section data-animate="fadeIn" style="padding-top: 35px; padding-bottom: 40px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <h2 class="tup" style="font-size: 23px;">What our investors are saying about us</h2>
                        <p class="lead" style="font-size: 15px">We use the reviews of our investors as the yard stick to measure how well or otherwise we are doing in the dispensation of our services to our investors all over the world. <br> We are always happy to share the positive reviews of our investors and improve on the areas we have been found wanting.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left" data-items="1" data-animate-in="fadeIn" data-animate-out="fadeOut" data-arrows="false">
                            <div class="testimonial-item">
                                <img src="{{url('/')}}/asset/nova/img/reviewer2.jpg" alt="">
                                <p>I've had incredible customer service since I started investing here, I'm a repeat investor. I've been investng with Bitfarmfxt Investments for nearly 3 years now and i've loved every bit of the experience so far.</p>
                                <span>Ron DiCicco</span>
                                <span>Florida, United States</span>
                            </div>
                            
                            <div class="testimonial-item">
                                <img src="{{url('/')}}/asset/nova/img/reviewer3.jpg" alt="">
                                <p>Transparent, profitable, and reliable bitcoin investment company that will make you real money. Thanks to all of you at Bitfarmfxt Investments for the excellent service.  </p>
                                <span>Diane Podmanik</span>
                                <span>Budapest, Hungary</span>
                            </div>
                            
                            <div class="testimonial-item">
                                <img src="{{url('/')}}/asset/nova/img/reviewer5.jpg" alt="">
                                <p>I have always been searching for an opportunity to earn on bitcoin and finally I found Bitfarmfxt investments and they have proven to be very reliable since I've been investing with them.</p>
                                <span>Joe Tantillo</span>
                                <span>Prague, Czech Republic</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section> <br><br>
        
        <div data-animate="fadeInLeft" class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-default uk-background-center-right uk-background-contain uk-background-image@m"
                            style="background-image: url({{url('/')}}/asset/nova/img/in-cta-background.png);">
                            <div class="uk-card-body">
                                <div class="uk-grid uk-flex-middle" data-uk-grid="">
                                    <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
                                        <h3>Lucrative CryptoCurrency Investment opportunity at your fingertips.</h3>
                                    </div>
                                    <div class="uk-width-auto"> <a
                                            class="uk-button uk-button-primary uk-button-large uk-border-rounded"
                                            href="{{route('register')}}">Open an Account</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <section class="tab pt200 pb150">
            <div class="tablist">
                <div class="tablist__container">
                    <ul>
                        <li class="tablist__item">
                            <input type="radio" class="tablist__radio" checked name="tab" id="tab-radio1">
                            <label for="tab-radio1" class="tab__label" data-tablist="tab-1">
                                <div class="first">
                                    <span>
                                        <i class="ti-lock"></i>
                                    </span>
                                    <span>secured</span>
                                </div>
                            </label>
                        </li>
                        <li class="tablist__item">
                            <input type="radio" class="tablist__radio" name="tab" id="tab-radio2">
                            <label for="tab-radio2" class="tab__label" data-tablist="tab-2">
                                <div>
                                    <span>
                                        <i class="ti-shield"></i>
                                    </span>
                                    <span>integrity</span>
                                </div>
                            </label>
                        </li>
                        <li class="tablist__item">
                            <input type="radio" class="tablist__radio" name="tab" id="tab-radio3">
                            <label for="tab-radio3" class="tab__label"  data-tablist="tab-3">
                                <div>
                                    <span>
                                        <i class="ti-pulse"></i>
                                    </span>
                                    <span>Development</span>
                                </div>
                            </label>
                        </li>
                        <li class="tablist__item">
                            <input type="radio" class="tablist__radio" name="tab" id="tab-radio4">
                            <label for="tab-radio4" class="tab__label"  data-tablist="tab-4">
                                <div class="last">
                                    <span>
                                        <i class="ti-check-box"></i>
                                    </span>
                                    <span>profit</span>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <div class="tablist__content text-center container">
                        <div class="tab-1 active tabo">
                            <p>
                                Real website security means end to end encryption, as well as user privacy within the system. We monitor every transaction 24/7 to help protect against fraud, email
                                phishing and identity theft. Every transaction is secured on our very own encrypted blockchain protocol, to which only we have access. Our security team works non-stop to protect against any suspicious activity. Remember that we will <strong>never</strong> ask for any sensitive information about you over email. 

                            </p>
                        </div>
                        <div class="tab-2 hide tabo">
                            <p>
                                We operate in an industry built on trust. Integrity is the central value of Bitfarmfxt.
                                We strive to be the best in our field and are constantly improving ourselves to meet the highest industry
                                Standards in our industry, without exceptions. We stay grounded by focusing on what works and
                                recognizing what could be improved. We appreciate and capitalize on what keeps
                                our <strong>clients</strong>, our <strong>employees</strong>, and our <strong>mission</strong> successful.

                            </p>
                        </div>
                        <div class="tab-3 hide tabo">
                            <p>
                                After our clients are compensated according to their registered interest rate, we use any leftover funds to further develop our technology, new products
                                and services, and partnerships with notable figures within the cryptocurrency space. We believe that we are leading our industry when it comes to ease of use, innovation and access to the most
                                up to date trading strategies available. This is because we have worked hard over the years to expand our partner network to
                                provide the best services available to our clients and work to identify the new 
                                increasingly diverse products which will provide the maximum benefit to our clients. We are currently seeking to improve investment profit turnaround times through our technology and partnerships,
                                providing the best, most reliable cryptocurrency and Forex investment service available.

                            </p>
                        </div>
                        <div class="tab-4 hide tabo">
                            <p>
                                Bitfarmfxt has an efficient forecast engine which was originally based on statistical analysis, and scientific research of the cryptocurrency market data and trade patterns. Its has since been upgraded into a vast neural network sourced directly by crawlers monitoring over 185,000 media channels and over 43,000 indicators. According to research, the cryptocurrency market has been directly influenced by trading behaviour. Our forecast engine is able to make objective forecasts at remarkable accuracy and analyse them in a fraction of time it would take manually. The analysis is then sent to our AI trading bot, which executes them as automatic exchange.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> <hr> --}}
        {{-- <section class="basic">
            <div class="container">
                <div class="basic-info">
                    <div class="row m0">
                        <div class="col-md-4">
                            <div class="basic-info__box first" data-aos="fade-in">
                                <div>
                                    <span class="pe-7s-mail"></span>
                                </div>
                                <div>
                                    <span>E-Mail</span>
                                    <p>support@Bitfarmfxt.org</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="basic-info__box" data-aos="fade-in" data-aos-delay="300">
                                <div>
                                    <span class="pe-7s-phone"></span>
                                </div>
                                <div>
                                    <span>Contact Us</span>
                                    <p>+1 917-985-7247</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 last">
                            <div class="basic-info__box" data-aos="fade-in" data-aos-delay="500">
                                <div>
                                    <span class="pe-7s-stopwatch"></span>
                                </div>
                                <div>
                                    <span>Work Hours</span>
                                    <p>Mon. - Fri. 8AM - 5PM</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            jaito laito..
                        </div> -->
                    </div>
                </div>
            </div>
        </section> --}}
    </main>

    {{-- <section class="pt100 join-bg pb100">
        <div class="join" id="parallax">
            <div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-5">
                        <p data-aos="fade-in" class="m0" data-aos-duration="1500">
                            <img src="img/planet.png" alt="">
                        </p>
                        <br>
                        <h4 class="mb30">Join over <span class="counter" data-counterup-time="2000">49879</span> clients that trust us.</h4>
                        
                        <div class="text-center">
                            <a class="btn__normal coloured" style="line-height: 3" data-aos-duration="2000" data-aos="fade-in" data-aos-delay="1000"
                            
                            
                                href="register.html"
                            
                            
                            >Join today &nbsp;&nbsp;&nbsp;<i class="ti-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@stop