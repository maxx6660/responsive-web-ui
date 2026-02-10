<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/fonts.css">
<!-- Fontawesome CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Alexandria:300|Spectral:200italic|Shippori+Antique:regular|Spectral:200|Spectral:300" rel="stylesheet" type="text/css"/>
</head>
<body>
	<nav class="navbar custom-navbar px-4 py-3">
<!-- left -->
<div class="social-icons d-flex gap-3">
	<img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/facebook.svg">
	<img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/instagram.svg">
	<img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/x.svg">
</div>
<!-- center -->
<div class="">
	<a class="navbar-brand text-center" href="#">ELEANOR JEAN <br><span style="font-weight: 100;">interior designs</span></a>
</div>
<!-- right -->
<div class="d-flex align-items-center gap-3">
	<span class="home-text">Home</span>
	<button class="menu-btn"
	data-bs-toggle="offcanvas"
	data-bs-target="#menuOffcanvas">
	<span class="menu-line"></span>
	<span class="menu-line"></span>
	<span class="menu-line"></span>
</button>
</div>
</nav>
<div class="offcanvas offcanvas-end custom-offcanvas" id="menuOffcanvas">
	<div class="offcanvas-header justify-content-end">
		<button class="menu-btn close-btn" data-bs-dismiss="offcanvas">
			<span class="menu-line"></span>
			<span class="menu-line"></span>
			<span class="menu-line"></span>
		</button>
	</div>
	<div class="offcanvas-body d-flex flex-column align-items-center justify-content-center">
		<div class="m-ejlogo">EJ</div>
		<div class="menu-links text-center">
			<a href="#">Home</a>
			<a href="#">About Us</a>
			<a href="#">Portfolio</a>
			<a href="#">Contact</a>
			<a href="#">Shop</a>
			<a href="#">Call Us</a>
		</div>
	</div>
</div>
<main class="hero-section">
	<h1>We create spaces that feel <br>cozy and comfortable.</h1>
	<span></span>
	<h6><i>established 2015&nbsp;&nbsp;&#9679;&nbsp;&nbsp;Aspen, CO</i></h6>
	<i class="fa fa-arrow-down" aria-hidden="true"></i>
</main>
<section id="work-section" class="bg-san">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto">
					<div class="work1">
						<div class="ejlogo">EJ</div>
						<h1 class="text-center">Cozy homes designed to<br>be lived in and loved.</h1>
						<p class="text-center">Taiyaki irony stumptown bespoke, normcore cold-pressed man bun portland tilde blackbird spyplane organic VHS jean shorts. Man braid bruh portland gentrify, try-hard jianbing pabst.</p>
						<div class="subheading">
							SEE THE WORK
						</div>
					</div>
				</div>
			</div>
			<div class="row stw-row text-center">
				<div class="col-lg-4">
					<div class="stw">
						<img src="assets/images/stw1.jpg" alt="" class="img-fluid">
						<h6>01</h6>
						<h2>NEW BUILD</h2>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="stw mt-5">
						<img src="assets/images/stw2.jpg" alt="" class="img-fluid">
						<h6>02</h6>
						<h2>RENOVATIONS</h2>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="stw">
						<img src="assets/images/stw3.jpg" alt="" class="img-fluid">
						<h6>03</h6>
						<h2>DESIGN CONSULTS</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container-fluid">
	<div class="row" style="background-color: #3E2F27; color: #fff;">
		<div class="col-md-6 p-0">
			<div class="owner-img">
				<img src="assets/images/owner.jpg" alt="">
			</div>
		</div>
		<div class="col-md-4 d-flex align-items-center">
			<div class="owner-details">
				<i>designer + founder</i>
				<h1>ELEANOR <br>JEAN</h1>
				<p>
					Mustache leggings mumblecore, food truck selfies bitters ramps fashion axe waistcoat four dollar toast. Heirloom sus viral freegan pickled brunch actually flannel. Venmo freegan taiyaki pug cliche mlkshk, hella slow-carb meh. Iceland chia drinking vinegar poutine kickstarter, taxidermy DSA. Poutine slow-carb banjo skateboard selfies ethical retro hoodie occupy salvia bodega boys.
				</p>
				<span class="m-0">READ MY STORY</span>
			</div>
		</div>
	</div>
</div>
<section id="client-reviews" class="bg-san">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 text-switcher text-center mx-auto">
				<span>WHAT OUR CLIENTS ARE SAYING</span>
				<h3 id="client-reviews-text" class="m-5">"Our home went from being a place that caused me stress to being an absolute refuge. I never want to leave."</h3>
				<div class="nav-controls mt-3">
					<span id="prevBtn" class="nav-btn"><span style='font-size:25px;padding-right: 10px'>&#8592;</span> PREVIOUS</span>
					<span class="divider"> | </span>
					<span id="nextBtn" class="nav-btn">NEXT <span style='font-size:25px;padding-left: 10px'>&#8594;</span></span>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="projects">
	<div class="container-fluid prj">
		<div class="row">
			<div class="col-lg-4 p-0 d-lg-block d-none"><img src="assets/images/1a.jpg" alt=""></div>
			<div class="col-lg-8 p-0"><img src="assets/images/1b.jpg" alt=""></div>
		</div>
		<div class="row">
			<div class="col-lg-4 p-0 d-lg-block d-none"><img src="assets/images/2a.jpg" alt=""></div>
			<div class="col-lg-8 p-0"><img src="assets/images/2b.jpg" alt=""></div>
		</div>
		<div class="row">
			<div class="col-lg-4 p-0 d-lg-block d-none"><img src="assets/images/3a.jpg" alt=""></div>
			<div class="col-lg-8 p-0"><img src="assets/images/3b.jpg" alt=""></div>
		</div>
		<div class="controls">
			<span id="prev">&#8592;</span>
			<span id="next">&#8594;</span>
			<h4></h4>
		</div>
	</div>
</div>
<div id="blog">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="blog blog-1">
						<div class="blog-img">
							<img src="assets/images/blog-1.jpg" alt="" class="img-fluid">
							<div class="blog-img-overlay"></div>
						</div>
						<h6 class="blog-desc">DESIGN TIPS</h6>
						<h3>How to Use Green in your Space</h3>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog blog-2">
						<div class="blog-img">
							<img src="assets/images/blog-2.jpg" alt="" class="img-fluid">
							<div class="blog-img-overlay"></div>
						</div>
						<h6 class="blog-desc">organization</h6>
						<h3>10 Amazing Hacks for Keeping your Closet Tidy</h3>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog blog-3">
						<div class="blog-img">
							<img src="assets/images/blog-3.jpg" alt="" class="img-fluid">
							<div class="blog-img-overlay"></div>
						</div>
						<h6 class="blog-desc">DESiGN</h6>
						<h3>Should You Add a Double Island to your Kitchen?</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="subscribe">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="subscribe-img d-flex justify-content-end">
					<img src="assets/images/subscribe.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="subs-text d-flex flex-column justify-content-center">
					<div class="subs-title">FREE DOWNLOAD</div>
					<div class="subs-head">PERFECT PAINT COLOT GUIDE</div>
					<div class="subs-desc">
						Struggling to pick paint colors for your home? Download our list of the best paint colors for your home. Soft, muted and pure perfection!
					</div>
					<div class="row">
						<div class="col-lg-6">
							<input type="text" class="form-control" placeholder="Email Address">
						</div>
						<div class="col-lg-6">
							<button class="btn">SUBSCRIBE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-2 p-0">
				<img src="assets/images/footer-1.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-2 p-0">
				<img src="assets/images/footer-2.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-2 p-0">
				<img src="assets/images/footer-3.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-2 p-0">
				<img src="assets/images/footer-4.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-2 p-0">
				<img src="assets/images/footer-5.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-2 p-0">
				<img src="assets/images/footer-6.jpg" alt="" class="img-fluid">
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-4">
				<ul class="p-0 m-0">
					<li>HOME</li>
					<li>SERVICES</li>
					<li>PORTFOLIO</li>
					<li>ABOUT</li>
					<li>BLOG</li>
					<li>ENQUIRE</li>
				</ul>
			</div>
			<div class="col-lg-4">
				<div class="footer-name">
					<div class="footer-ejlogo">EJ</div>
					<div class="f-logo-name">ELEANOR JEAN</div>
					<span>interior design</span>
				</div>
			</div>
			<div class="col-lg-4 d-flex align-items-center justify-content-end">
				<div class="f-contact d-flex flex-column justify-content-end align-items-center gap-5">
					<div class="f-social-icons d-flex gap-4 justify-content-end">
						<img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/facebook.svg">
						<img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/instagram.svg">
						<img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/x.svg">
						<img src="https://cdn.jsdelivr.net/npm/simple-icons@v11/icons/pinterest.svg">
					</div>
					<div class="f-subs">SUBSCRIBE</div>					
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<span class="cpy">COPYRIGHT 2024 eleanor jean. ALL RIGHTS RESERVED. MADE BY BLAIR STAKY</span>
			</div>
		</div>
	</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
