<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('common/head.php');?>
<?php include('common/header.php');?>

<section class="top-post-area pt-10">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-nav-area">
                    <h1 class="text-white"><?=$category['name']?></h1>
                    <p class="text-white link-nav"><a href="/">Главная </a>  <span class="lnr lnr-arrow-right"></span><?=$category['name']?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-post-area pb-120">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-8 post-list">
                <!-- Start latest-post Area -->
                <div class="latest-post-wrap">
                    <h4 class="cat-title">Последние статьи</h4>

                    <?php foreach ($articles as $article): ?>
                    <div class="single-latest-post row align-items-center">
                        <div class="col-lg-5 post-left">
                            <div class="feature-img relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="/assets/img/l1.jpg" alt="">
                            </div>
                            <ul class="tags">
                                <li><a href="#">Lifestyle</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-7 post-right">
                            <a href="/article/<?=$article['id']?>">
                                <h4><?=$article['title']?></h4>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                            </ul>
                            <p class="excert"><?= substr_replace(substr($article['text'], 0, 100), '...', 100)?></p>
                        </div>
                    </div>
                    <?php endforeach ?>

                    <div class="load-more">
                        <a href="#" class="primary-btn">Посмотреть все</a>
                    </div>
                    <!-- пагинация -->

                </div>
                <!-- End latest-post Area -->
            </div>
            <div class="col-lg-4">
                <div class="sidebars-area">
                    <div class="single-sidebar-widget most-popular-widget">
                        <h6 class="title">Most Popular</h6>
                        <div class="single-list flex-row d-flex">
                            <div class="thumb">
                                <img src="/assets/img/m1.jpg" alt="">
                            </div>
                            <div class="details">
                                <a href="image-post.html">
                                    <h6>Help Finding Information
                                    Online is so easy</h6>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-list flex-row d-flex">
                            <div class="thumb">
                                <img src="/assets/img/m2.jpg" alt="">
                            </div>
                            <div class="details">
                                <a href="image-post.html">
                                    <h6>Compatible Inkjet Cartr
                                    world famous</h6>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-list flex-row d-flex">
                            <div class="thumb">
                                <img src="/assets/img/m3.jpg" alt="">
                            </div>
                            <div class="details">
                                <a href="image-post.html">
                                    <h6>5 Tips For Offshore Soft
                                    Development </h6>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-list flex-row d-flex">
                            <div class="thumb">
                                <img src="/assets/img/m4.jpg" alt="">
                            </div>
                            <div class="details">
                                <a href="image-post.html">
                                    <h6>5 Tips For Offshore Soft
                                    Development </h6>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-widget newsletter-widget">
                        <h6 class="title">Newsletter</h6>
                        <p>
                            Here, I focus on a range of items
                            andfeatures that we use in life without
                            giving them a second thought.
                        </p>
                        <div class="form-group d-flex flex-row">
                            <div class="col-autos">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
                                </div>
                            </div>
                            <a href="#" class="bbtns">Subcribe</a>
                        </div>
                        <p>
                            You can unsubscribe us at any time
                        </p>
                    </div>
                    <div class="single-sidebar-widget tagslist-widget">
                        <h6 class="title">Tags</h6>
                        <ul class="tags">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'common/footer.php'; ?>