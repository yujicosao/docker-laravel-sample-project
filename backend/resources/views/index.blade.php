@extends('base')

@section('title', 'Apart TOPPAGE')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_2.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="mb-4">Excellent Space For Your Next Home</h1>
            <p class="mb-5">1105 Madison Plaza Suite 120 Chesapeake, CA, California</p>
            <p><a href="#" class="btn btn-primary px-5 py-3">Take a Tour</a></p>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="featured-property-half d-flex">
        <div class="image" style="background-image: url('images/hero_bg_1.jpg')"></div>
        <div class="text">
            <h2>東京の天気</h2>
            <p class="mb-5">取得日時：{{ $weather_info['weather_created_at'] }}</p>
            <img src="{{ $weather_info['weather_image'] }}" alt="">
            <p class="mb-5">{{ $weather_info['weather_text'] }}</p>
            <p class="mb-5">{{ $weather_info['weather_body'] }}</p>
        </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
                <h2 class="mb-5">この学習サイトで実装したこと</h2>
                <ul class="text-left">
                    <li>AWSを用いてのサイトデプロイ(EC2・S3・CloudFront使用)</li>
                    <li>画像保存をS3にて行う</li>
                    <li>S3に保存した画像表示をCloudFront経由に変更</li>
                    <li>AWS route53を用いた独自ドメインの取得/紐付け</li>
                    <li>dockerを用いての環境構築(webサーバー[nginx]・appサーバー・dbサーバー[mysql])</li>
                    <li>CRUD実装</li>
                    <li>phpunitを用いてのユニットテスト実装</li>
                    <li>dockerコンテナを用いてテスト用dbサーバー構築</li>
                    <li>管理者ユーザー機能実装</li>
                    <li>ページネーション機能実装</li>
                    <li>外部apiを用いての天気情報表示機能実装</li>
                    <li>vuejs、axiosによる非同期通信の実装</li>
                    <li>git/githubを用いての実装管理</li>
                    <li>redis環境構築及び、redisを用いてのデータ管理</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="unit-9">
                <div class="image" style="background-image: url('images/img_1.jpg');"></div>
                <div class="unit-9-content">
                <h2>Nashville</h2>
                <span>$130/night</span>
                <!-- <span>with Wendy Matos</span> -->
                </div>
            </a>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="unit-9">
                <div class="image" style="background-image: url('images/img_2.jpg');"></div>
                <div class="unit-9-content">
                <h2>Baltimore</h2>
                <span>$230/night</span>
                </div>
            </a>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="unit-9">
                <div class="image" style="background-image: url('images/img_3.jpg');"></div>
                <div class="unit-9-content">
                <h2>Austin</h2>
                <span>$130/night</span>
                </div>
            </a>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="unit-9">
                <div class="image" style="background-image: url('images/img_4.jpg');"></div>
                <div class="unit-9-content">
                <h2>Atlanta</h2>
                <span>$150/night</span>
                </div>
            </a>
            </div>

            <div class="col-md-12 text-center mt-5" data-aos="fade-up">
            <a href="#" class="btn btn-primary">Browse All Apartments</a>
            </div>
        </div>
        </div>
    </div>



    <div class="site-section">

        <div class="container">

        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">Featured Apartments</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
            </div>
        </div>

        <div class="site-block-retro d-block d-md-flex">

            <a href="#" class="col1 unit-9 no-height" data-aos="fade-up" data-aos-delay="100">
            <div class="image" style="background-image: url('images/img_2.jpg');"></div>
            <div class="unit-9-content">
                <h2>Baltimore Apartment</h2>
                <span>$600/night</span>
            </div>
            </a>

            <div class="col2 ml-auto">

            <a href="#" class="col2-row1 unit-9 no-height" data-aos="fade-up" data-aos-delay="200">
                <div class="image" style="background-image: url('images/img_3.jpg');"></div>
                <div class="unit-9-content">
                <h2>Austin Apartment</h2>
                <span>$290/night</span>
                </div>
            </a>

            <a href="#" class="col2-row2 unit-9 no-height" data-aos="fade-up" data-aos-delay="300">
                <div class="image" style="background-image: url('images/img_1.jpg');"></div>
                <div class="unit-9-content">
                <h2>Atlanta Apartment</h2>
                <span>$1,290/night</span>
                </div>
            </a>

            </div>

        </div>

        </div>
    </div>


    <div class="site-section block-13">
        <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Love By Our Customers</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
            </div>
        </div>
        <div class="nonloop-block-13 owl-carousel">

            <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">
                <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-black">
                <h3 class="font-weight-light h5">Megan Smith</h3>
                <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-black">
                <h3 class="font-weight-light h5">Brooke Cagle</h3>
                <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-black">
                <h3 class="font-weight-light h5">Philip Martin</h3>
                <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">
                <img src="images/person_1.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-black">
                <h3 class="font-weight-light h5">Steven Ericson</h3>
                <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-black">
                <h3 class="font-weight-light h5">Nathan Dumlao</h3>
                <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
            </div>

            <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="text-black">
                <h3 class="font-weight-light h5">Brook Smith</h3>
                <p class="font-italic">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum sed ea? Ducimus quos, ea?&rdquo;</p>
            </div>
            </div>

        </div>
        </div>
    </div>





    <div class="site-section bg-light">
        <div class="container">
        <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">News &amp; Events</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt officia, error reiciendis ab quod?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <a href="single.html"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                <h2 class="h5 text-black mb-3"><a href="single.html">Fugit nam obcaecati fuga itaque</a></h2>

            </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                <h2 class="h5 text-black mb-3"><a href="single.html">Fugit nam obcaecati fuga itaque</a></h2>

            </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
                <h2 class="h5 text-black mb-3"><a href="single.html">Fugit nam obcaecati fuga itaque</a></h2>

            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="bg-primary" data-aos="fade">
        <div class="container">
        <div class="row">
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-pinterest text-white"></span></a>
            <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
        </div>
    </div>


@stop
