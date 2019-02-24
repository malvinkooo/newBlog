<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('head.php');?>
<?php include('header.php');?>

<div class="site-main-container">
	<!-- Start top-post Area -->
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row small-gutters">
				<div class="col-lg-8 top-post-left">
					<div class="feature-image-thumb relative">
						<div class="overlay overlay-bg"></div>
						<img class="img-fluid" src="/assets/img/top-post1.jpg" alt="">
					</div>
					<div class="top-post-details">
						<ul class="tags">
							<li><a href="#">Food Habit</a></li>
						</ul>
						<a href="image-post.html">
							<h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
						</a>
						<ul class="meta">
							<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
							<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
							<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 top-post-right">
					<div class="single-top-post">
						<div class="feature-image-thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="/assets/img/top-post2.jpg" alt="">
						</div>
						<div class="top-post-details">
							<ul class="tags">
								<li><a href="#">Food Habit</a></li>
							</ul>
							<a href="image-post.html">
								<h4>A Discount Toner Cartridge Is Better Than Ever.</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
								<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
							</ul>
						</div>
					</div>
					<div class="single-top-post mt-10">
						<div class="feature-image-thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="/assets/img/top-post3.jpg" alt="">
						</div>
						<div class="top-post-details">
							<ul class="tags">
								<li><a href="#">Food Habit</a></li>
							</ul>
							<a href="image-post.html">
								<h4>A Discount Toner Cartridge Is Better</h4>
							</a>
							<ul class="meta">
								<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
								<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
								<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="news-tracker-wrap">
						<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-post Area -->
	<!-- Start latest-post Area -->
	<section class="latest-post-area pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					
					<?php include('latest_news.php'); ?>

					<!-- Start banner-ads Area -->
					<div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
						<img class="img-fluid" src="/assets/img/banner-ad.jpg" alt="">
					</div>
					<!-- End banner-ads Area -->
					<?php include('popular_posts.php'); ?>
				</div>
				<div class="col-lg-4">
					<?php include('sidebar.php'); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End latest-post Area -->
</div>

<?php include 'footer.php'; ?>