<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/adda-preview/adda/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jan 2020 10:28:34 GMT -->
<head>
<meta charset="<?= Yii::$app->charset ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon"
	href="<?= $this->theme->getUrl('/toddlerassets/images/favicon.ico')?>">

<!-- CSS
	============================================ -->
<!-- google fonts -->
<link
	href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900"
	rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/vendor/bootstrap.min.css'); ?>">
<!-- Icon Font CSS -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/vendor/bicon.min.css')?>">
<!-- Flat Icon CSS -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/vendor/flaticon.css')?>">
<!-- audio & video player CSS -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/plugins/plyr.css')?>">
<!-- Slick CSS -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/plugins/slick.min.css')?>">
<!-- nice-select CSS -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/plugins/nice-select.css')?>">
<!-- perfect scrollbar css -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/plugins/perfect-scrollbar.css')?>">
<!-- light gallery css -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/plugins/lightgallery.min.css')?>">
<!-- Main Style CSS -->
<link rel="stylesheet"
	href="<?= $this->theme->getUrl('/toddlerassets/css/style.css')?>">

</head>

<body>
<?php $this->beginBody() ?>
    <!-- header area start -->
	<header>
		<div class="header-top sticky bg-white d-none d-lg-block">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-5">
						<!-- header top navigation start -->
						<div class="header-top-navigation">
							<nav>
								<ul>
									<li class="active"><a href="<?= Url::home()?>">home</a></li>
									<li class="msg-trigger"><a class="msg-trigger-btn" href="#a">message</a>
										<div class="message-dropdown" id="a">
											<div class="dropdown-title">
												<p class="recent-msg">recent message</p>
												<div class="message-btn-group">
													<button>New group</button>
													<button>New Message</button>
												</div>
											</div>
											<ul class="dropdown-msg-list">
												<li class="msg-list-item d-flex justify-content-between">
													<!-- profile picture end -->
													<div class="profile-thumb">
														<figure class="profile-thumb-middle">
															<img
																src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-3.jpg')?>"
																alt="profile picture">
														</figure>
													</div> <!-- profile picture end --> <!-- message content start -->
													<div class="msg-content">
														<h6 class="author">
															<a href="#">Mili Raoulin</a>
														</h6>
														<p>Many desktop publishing packages and web page editors
															now use Lorem Ipsum as their default</p>
													</div> <!-- message content end --> <!-- message time start -->
													<div class="msg-time">
														<p>25 Apr 2019</p>
													</div> <!-- message time end -->
												</li>

											</ul>
											<div class="msg-dropdown-footer">
												<button>See all in messenger</button>
												<button>Mark All as Read</button>
											</div>
										</div></li>
									<li class="notification-trigger"><a class="msg-trigger-btn"
										href="#b">notification</a>
										<div class="message-dropdown" id="b">
											<div class="dropdown-title">
												<p class="recent-msg">Notification</p>
												<button>
													<i class="flaticon-settings"></i>
												</button>
											</div>
											<ul class="dropdown-msg-list">

												<li class="msg-list-item d-flex justify-content-between">
													<!-- profile picture end -->
													<div class="profile-thumb">
														<figure class="profile-thumb-middle">
															<img
																src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-4.jpg')?>"
																alt="profile picture">
														</figure>
													</div> <!-- profile picture end --> <!-- message content start -->
													<div class="msg-content notification-content">
														<a href="#">Robert mushkil</a>, <a href="#">Terry jhon</a>
														<p>and 20 other people reacted to your photo</p>
													</div> <!-- message content end --> <!-- message time start -->
													<div class="msg-time">
														<p>20 May 2019</p>
													</div> <!-- message time end -->
												</li>

											</ul>
											<div class="msg-dropdown-footer">
												<button>See all in messenger</button>
												<button>Mark All as Read</button>
											</div>
										</div></li>
								</ul>
							</nav>
						</div>
						<!-- header top navigation start -->
					</div>

					<div class="col-md-2">
						<!-- brand logo start -->
						<div class="brand-logo text-center">
							<a href="<?= Url::home()?>"> <img
								src="<?= $this->theme->getUrl('/toddlerassets/images/logo/logo.png')?>"
								alt="brand logo">
							</a>
						</div>
						<!-- brand logo end -->
					</div>

					<div class="col-md-5">
						<div
							class="header-top-right d-flex align-items-center justify-content-end">
							<!-- header top search start -->
							<div class="header-top-search">
								<form class="top-search-box">
									<input type="text" placeholder="Search"
										class="top-search-field">
									<button class="top-search-btn">
										<i class="flaticon-search"></i>
									</button>
								</form>
							</div>
							<!-- header top search end -->

							<!-- profile picture start -->
							<div class="profile-setting-box">
								<div class="profile-thumb-small">
									<a href="javascript:void(0)" class="profile-triger">
										<figure>
											<img
												src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-1.jpg')?>"
												alt="profile picture">
										</figure>
									</a>
									<div class="profile-dropdown">
										<div class="profile-head">
											<h5 class="name">
												<a href="#"><?= Yii::$app->user->identity['username'];?></a>
											</h5>
											<a class="mail" href="#"><?= Yii::$app->user->identity['email']?></a>
										</div>
										<div class="profile-body">
											<ul>
											<li><?php

echo Html::a(Html::tag('i', '', [
                'class' => 'flaticon-user'
            ]) . 'Profile', [
                '/user/profile'
            ], [
                'data' => [
                    'method' => 'post'
                ]
            ], [
                'style' => [
                    'color' => 'white',
                    'font-weight' => '600'
                ]
            ]);
            ?></li>
												
												<li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
												<li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
											</ul>
											<ul>
												<li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
												<li><?php

echo Html::a(Html::tag('i', '', [
                'class' => 'flaticon-unlock'
            ]) . 'Logout', [
                '/site/logout'
            ], [
                'data' => [
                    'method' => 'post'
                ]
            ], [
                'style' => [
                    'color' => 'white',
                    'font-weight' => '600'
                ]
            ]);
            ?></li>

											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- profile picture end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header area end -->
	<!-- header area start -->
	<header>
		<div class="mobile-header-wrapper sticky d-block d-lg-none">
			<div class="mobile-header position-relative ">
				<div class="mobile-logo">
					<a href="<?= Url::home()?>"> <img
						src="<?= $this->theme->getUrl('/toddlerassets/images/logo/logo-white.png')?>"
						alt="logo">
					</a>
				</div>
				<div class="mobile-menu w-100">
					<ul>
						<li>
							<button class="notification request-trigger">
								<i class="flaticon-users"></i> <span>01</span>
							</button>
							<ul class="frnd-request-list">
								<li>
									<div class="frnd-request-member">
										<figure class="request-thumb">
											<a href="#"> <img
												src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-midle-1.jpg')?>"
												alt="proflie author">
											</a>
										</figure>
										<div class="frnd-content">
											<h6 class="author">
												<a href="#">merry watson</a>
											</h6>
											<p class="author-subtitle">Works at HasTech</p>
											<div class="request-btn-inner">
												<button class="frnd-btn">confirm</button>
												<button class="frnd-btn delete">delete</button>
											</div>
										</div>
									</div>
								</li>

							</ul>
						</li>
						<li>
							<button class="notification">
								<i class="flaticon-notification"></i> <span>03</span>
							</button>
						</li>
						<li>
							<button class="chat-trigger notification">
								<i class="flaticon-chats"></i> <span>04</span>
							</button>
							<div class="mobile-chat-box">
								<div class="live-chat-title">
									<!-- profile picture end -->
									<div class="profile-thumb">
										<a href="#">
											<figure class="profile-thumb-small profile-active">
												<img
													src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-15.jpg')?>"
													alt="profile picture">
											</figure>
										</a>
									</div>
									<!-- profile picture end -->
									<div class="posted-author">
										<h6 class="author">
											<a href="#">Robart Marloyan</a>
										</h6>
										<span class="active-pro">active now</span>
									</div>
									<div class="live-chat-settings ml-auto">
										<button class="chat-settings">
											<img
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/settings.png')?>"
												alt="">
										</button>
										<button class="close-btn">
											<img
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/close.png')?>"
												alt="">
										</button>
									</div>
								</div>
								<div class="message-list-inner">
									<ul class="message-list custom-scroll">
										<li class="text-friends">
											<p>Many desktop publishing packages and web page editors now
												use Lorem Ipsum as their default model text</p>
											<div class="message-time">10 minute ago</div>
										</li>
										<li class="text-author">
											<p>Many desktop publishing packages and web page editors</p>
											<div class="message-time">5 minute ago</div>
										</li>

									</ul>
								</div>
								<div class="chat-text-field mob-text-box">
									<textarea class="live-chat-field custom-scroll"
										placeholder="Text Message"></textarea>
									<button class="chat-message-send" type="submit" value="submit">
										<img
											src="<?= $this->theme->getUrl('/toddlerassets/images/icons/plane.png')?>"
											alt="">
									</button>
								</div>
							</div>
						</li>
						<li>
							<button class="search-trigger">
								<i class="search-icon flaticon-search"></i> <i
									class="close-icon flaticon-cross-out"></i>
							</button>
							<div class="mob-search-box">
								<form class="mob-search-inner">
									<input type="text" placeholder="Search Here"
										class="mob-search-field">
									<button class="mob-search-btn">
										<i class="flaticon-search"></i>
									</button>
								</form>
							</div>
						</li>
					</ul>
				</div>
				<div class="mobile-header-profile">
					<!-- profile picture end -->
					<div class="profile-thumb profile-setting-box">
						<a href="javascript:void(0)" class="profile-triger">
							<figure class="profile-thumb-middle">
								<img
									src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-1.jpg')?>"
									alt="profile picture">
							</figure>
						</a>
						<div class="profile-dropdown text-left">
							<div class="profile-head">
								<h5 class="name">
									<a href="#"><?= Yii::$app->user->identity['username'];?></a>
								</h5>
								<a class="mail" href="#"><?= Yii::$app->user->identity['email'];?></a>
							</div>
							<div class="profile-body">
								<ul>
									<li><?php

echo Html::a(Html::tag('i', '', [
                'class' => 'flaticon-user'
            ]) . 'Profile', [
                '/user/profile'
            ], [
                'data' => [
                    'method' => 'post'
                ]
            ], [
                'style' => [
                    'color' => 'white',
                    'font-weight' => '600'
                ]
            ]);
            ?></li>
									<li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
									<li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
								</ul>
								<ul>
									<li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
									<li><?php

echo Html::a(Html::tag('i', '', [
            'class' => 'flaticon-unlock'
        ]) . 'Logout', [
            '/site/logout'
        ], [
            'data' => [
                'method' => 'post'
            ]
        ], [
            'style' => [
                'color' => 'white',
                'font-weight' => '600'
            ]
        ]);
        ?></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- profile picture end -->
				</div>
			</div>
		</div>
	</header>
    
    <?=Breadcrumbs::widget ( [ 'links' => isset ( $this->params ['breadcrumbs'] ) ? $this->params ['breadcrumbs'] : [ ] ] )?>
        <?= $content ?>
        
        <footer class="footer bg-primary">
		<div class="container">
			<p class="pull-left">&copy; <?= \Yii::$app->name ?> <?= date('Y') ?></p>

			<p class="pull-right">Powered By: <?= \Yii::$app->name?></p>
		</div>
	</footer>



	<!-- Modernizer JS -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/vendor/modernizr-3.6.0.min.js')?>"></script>
	<!-- jQuery JS -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/vendor/jquery-3.3.1.min.js')?>"></script>
	<!-- Popper JS -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/vendor/popper.min.js')?>"></script>
	<!-- Bootstrap JS -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/vendor/bootstrap.min.js')?>"></script>
	<!-- Slick Slider JS -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/plugins/slick.min.js')?>"></script>
	<!-- nice select JS -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/plugins/nice-select.min.js')?>"></script>
	<!-- audio video player JS -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/plugins/plyr.min.js')?>"></script>
	<!-- perfect scrollbar js -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/plugins/perfect-scrollbar.min.js')?>"></script>
	<!-- light gallery js -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/plugins/lightgallery-all.min.js')?>"></script>
	<!-- image loaded js -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/plugins/imagesloaded.pkgd.min.js')?>"></script>
	<!-- isotope filter js -->
	<script
		src="<?= $this->theme->getUrl('/toddlerassets/js/plugins/isotope.pkgd.min.js')?>"></script>
	<!-- Main JS -->
	<script src="<?= $this->theme->getUrl('/toddlerassets/js/main.js')?>"></script>
    
    <?php $this->endBody() ?> 
    </body>
</html>
<?php $this->endPage() ?> 