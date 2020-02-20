<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use app\models\User;

AppAsset::register($this);
?>


<!doctype html>
<html class="no-js" lang="en">
<body>
<style>
.help-block{
position:absolute;
}
</style>
	<!-- header area end -->

	<main>

	<div class="main-wrapper pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<aside class="widget-area">
						<!-- widget single item start -->
						<div class="card card-profile widget-item p-0">
							<div class="profile-banner">
								<figure class="profile-banner-small">
									<a href="<?= Url::toRoute('user/profile');?>"> <img
										src="<?= $this->theme->getUrl('/toddlerassets/images/banner/banner-small.jpg')?>"
										alt="">
									</a>
									<a href="<?=Url::toRoute('user/profile');?>"
										class="profile-thumb-2"> <img
										src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-midle-1.jpg')?>"
										alt="">
									</a>
								</figure>
								<div class="profile-desc text-center">
									<h6 class="author">
										<a href="javascript:;"><?= Yii::$app->user->identity['username'];?></a>
									</h6>
									<p>Any one can join with but Social network us if you want Any
										one can join with us if you want</p>
								</div>
							</div>
						</div>
						<!-- widget single item start -->

						<!-- widget single item start -->
						<div class="card widget-item">
							<h4 class="widget-title">page you may like</h4>
							<div class="widget-body">
								<ul class="like-page-list-wrapper">
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-33.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">
</a>
											</h3>
											<p class="list-subtitle">
												<a href="#">adventure</a>
											</p>
										</div>
										<button class="like-button active">
											<img class="heart"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart.png')?>"
												alt=""> <img class="heart-color"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart-color.png')?>"
												alt="">
										</button>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-30.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Foodcort Nirala</a>
											</h3>
											<p class="list-subtitle">
												<a href="#">food</a>
											</p>
										</div>
										<button class="like-button">
											<img class="heart"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart.png')?>"
												alt=""> <img class="heart-color"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart-color.png')?>"
												alt="">
										</button>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-5.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Rolin Theitar</a>
											</h3>
											<p class="list-subtitle">
												<a href="#">drama</a>
											</p>
										</div>
										<button class="like-button">
											<img class="heart"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart.png')?>"
												alt=""> <img class="heart-color"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart-color.png')?>"
												alt="">
										</button>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-29.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Active Mind</a>
											</h3>
											<p class="list-subtitle">
												<a href="#">fitness</a>
											</p>
										</div>
										<button class="like-button">
											<img class="heart"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart.png')?>"
												alt=""> <img class="heart-color"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart-color.png')?>"
												alt="">
										</button>
									</li>
								</ul>
							</div>
						</div>
						<!-- widget single item end -->

						<!-- widget single item start -->
						<div class="card widget-item">
							<h4 class="widget-title">latest top news</h4>
							<div class="widget-body">
								<ul class="like-page-list-wrapper">
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-28.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">2 min ago</p>
										</div>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-31.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">20 min ago</p>
										</div>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-27.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">30 min ago</p>
										</div>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-34.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">40 min ago</p>
										</div>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-32.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">39 min ago</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- widget single item end -->
					</aside>
				</div>

				<div class="col-lg-6 order-1 order-lg-2">
					<!-- share box start -->
					<div class="card card-small">
						<div class="share-box-inner">
							<!-- profile picture end -->
							<div class="profile-thumb">
								<a href="#">
									<figure class="profile-thumb-middle">
										<img
											src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-37.jpg')?>"
											alt="profile picture">
									</figure>
								</a>
							</div>
							<!-- profile picture end -->

							<!-- share content box start -->
							<div class="share-content-box w-100">
								
                                    <?php

                                          $form = ActiveForm::begin([
                                         'action'=>['post/create'],
                                         'options' => [
                                             'class'=>'share-text-box'
                                         ]
                                     ]);
                                     ?>
                                    <?= $form->field($model, 'post')->textArea(['class'=>'share-text-field','aria-disabled'=>true, 'placeholder'=>'Say Something', 'data-toggle'=>'modal', 'data-target'=>'#textbox', 'id'=>'emailids'])->label(false); ?>
                                    <?= Html::submitButton('Share', ['class' => 'btn-share', 'name' => 'share-button']); ?>          
								<?php ActiveForm::end(); ?>
							</div>

                             
							<!-- share content box end -->

							<!-- Modal start -->
							<div class="modal" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Mood</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body custom-scroll">
                                            <?php

                                          $form = ActiveForm::begin([
                                         'action'=>['post/create'],
                                         'options' => [
                                             'class'=>'share-text-box'
                                         ]
                                     ]);
                                     ?>
                                     <?= $form->field($model, 'post')->textArea(['class'=>'share-field-big custom-scroll','placeholder'=>'Say Something..', 'id'=>'emailids'])->label(false); ?>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                                <?= Html::submitButton('Post', ['class' => 'post-share-btn']); ?> 
                                                <?php ActiveForm::end(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<!-- Modal end -->
						</div>
					</div>
					<!-- share box end -->

					<!-- post status start -->
					<?php foreach($status as $feed) {?>
					<div class="card">
						<!-- post title start -->
						<div class="post-title d-flex align-items-center">
							<!-- profile picture end -->
							<div class="profile-thumb">
								<a href="#">
									<figure class="profile-thumb-middle">
										<img
											src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-4.jpg')?>"
											alt="profile picture">
									</figure>
								</a>
							</div>
							<!-- profile picture end -->

							<div class="posted-author">
								<h6 class="author">
									<a href="javascript:;"><?=User::getUsername($feed->created_by_id);?></a>
								</h6>
								<span class="post-time">40 min ago</span>
							</div>

							<div class="post-settings-bar">
								<span></span> <span></span> <span></span>
								<div class="post-settings arrow-shape">
									<ul>
										<li><button>copy link to adda</button></li>
										<li><button>edit post</button></li>
										<li><button>embed adda</button></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- post title start -->
						<div class="post-content">
							<p class="post-desc pb-0"><?=$feed->post;?></p>
							<div class="post-meta">
								<button class="post-meta-like">
									<i class="bi bi-heart-beat"></i> <span>You and 250 people like
										this</span> <strong>250</strong>
								</button>
								<ul class="comment-share-meta">
									<li>
										<button class="post-comment">
											<i class="bi bi-chat-bubble"></i> <span>80</span>
										</button>
									</li>
									<li>
										<button class="post-share">
											<i class="bi bi-share"></i> <span>10</span>
										</button>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php }?>
					<!-- post status end -->

					<!-- post status start -->


					<!-- post status start -->


				</div>

				<div class="col-lg-3 order-3">
					<aside class="widget-area">
						<!-- widget single item start -->
						<div class="card widget-item">
							<h4 class="widget-title">Recent Notifications</h4>
							<div class="widget-body">
								<ul class="like-page-list-wrapper">
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-9.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">5 min ago</p>
										</div>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-35.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">10 min ago</p>
										</div>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-15.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">18 min ago</p>
										</div>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-6.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">25 min ago</p>
										</div>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-34.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Any one can join with us if you want</a>
											</h3>
											<p class="list-subtitle">39 min ago</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- widget single item end -->

						<!-- widget single item start -->
						<div class="card widget-item">
							<h4 class="widget-title">Advertizement</h4>
							<div class="widget-body">
								<div class="add-thumb">
									<a href="#"> <img
										src="<?= $this->theme->getUrl('/toddlerassets/images/banner/advertise.jpg')?>"
										alt="advertisement">
									</a>
								</div>
							</div>
						</div>
						<!-- widget single item end -->

						<!-- widget single item start -->
						<div class="card widget-item">
							<h4 class="widget-title">Friends Zone</h4>
							<div class="widget-body">
								<ul class="like-page-list-wrapper">
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-33.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Ammeya Jakson</a>
											</h3>
											<p class="list-subtitle">
												<a href="#">10 mutual</a>
											</p>
										</div>
										<button class="like-button">
											<img class="heart"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart.png')?>"
												alt=""> <img class="heart-color"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart-color.png')?>"
												alt="">
										</button>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-30.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Jashon Muri</a>
											</h3>
											<p class="list-subtitle">
												<a href="#">2 mutual</a>
											</p>
										</div>
										<button class="like-button active">
											<img class="heart"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart.png')?>"
												alt=""> <img class="heart-color"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart-color.png')?>"
												alt="">
										</button>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-5.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Rolin Theitar</a>
											</h3>
											<p class="list-subtitle">
												<a href="#">drama</a>
											</p>
										</div>
										<button class="like-button">
											<img class="heart"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart.png')?>"
												alt=""> <img class="heart-color"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart-color.png')?>"
												alt="">
										</button>
									</li>
									<li class="unorder-list">
										<!-- profile picture end -->
										<div class="profile-thumb">
											<a href="#">
												<figure class="profile-thumb-small">
													<img
														src="<?= $this->theme->getUrl('/toddlerassets/images/profile/profile-small-29.jpg')?>"
														alt="profile picture">
												</figure>
											</a>
										</div> <!-- profile picture end -->

										<div class="unorder-list-info">
											<h3 class="list-title">
												<a href="#">Active Mind</a>
											</h3>
											<p class="list-subtitle">
												<a href="#">fitness</a>
											</p>
										</div>
										<button class="like-button">
											<img class="heart"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart.png')?>"
												alt=""> <img class="heart-color"
												src="<?= $this->theme->getUrl('/toddlerassets/images/icons/heart-color.png')?>"
												alt="">
										</button>
									</li>
								</ul>
							</div>
						</div>
						<!-- widget single item end -->
					</aside>
				</div>
			</div>
		</div>
	</div>

	</main>

	<!-- Scroll to top start -->
	<div class="scroll-top not-visible">
		<i class="bi bi-finger-index"></i>
	</div>
	
	</body>
	</html>
	