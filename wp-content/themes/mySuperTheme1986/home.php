<?php
/*
Template Name: home
*/
?>
<?php get_header() ?>

<!-- Best  -->
<div id="jewellery" class="Best">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titlepage">
					<h2>Best jewellery</h2>
					<p> a reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="best_main">
					<div class="row d_flex">
						<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
							<div class="best_text">
								<p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
								<a href="#">See More</a>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
							<div class="best_img">
								<h4>Best Design Of Ring</h4>
								<figure><img src="<?php bloginfo('template_url') ?>/assets/images/beimg.png"></figure>
							</div>
						</div>
					</div>
				</div>
				<div class="best_main">
					<div class="row d_flex">
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
							<div class="best_img croos_rt">
								<h4>Best Design Of Ring</h4>
								<figure><img src="<?php bloginfo('template_url') ?>/assets/images/beimg2.png"></figure>
							</div>
						</div>
						<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
							<div class="best_text flot_left">
								<p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
								<a href="#">See More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="best_main pa_bot">
					<div class="row d_flex">
						<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
							<div class="best_text">
								<p>A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
								<a href="#">See More</a>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
							<div class="best_img d_none">
								<h4>Best Design Of Ring</h4>
								<figure><img src="<?php bloginfo('template_url') ?>/assets/images/beimg3.png"></figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end Best -->
<!-- contact -->
<div id="contact" class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titlepage">
					<h2>Request a  call back</h2>
					<p> A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a long established fact that a reader will be distracted by the readable content </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
				<div class="contact">
                    <?php echo do_shortcode('[contact-form-7 id="27" title="Контактная форма 1"]') ?>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
				<div class="rable-box">
					<figure>
						<img src="<?php bloginfo('template_url') ?>/assets/images/cac.png" alt="#" />
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end contact -->
<!-- clients -->
<div id="clients" class="clients ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="titlepage">
					<h2>Our Clients</h2>
					<p> A reader will be distracted by the readable content of a page when looking at its layout. The point of using LoremIt is a </p>
				</div>
			</div>
		</div>
		<div class="row d_flex">
			<div class="col-md-10 offset-col-md-1">
				<?php
				global $post;
				$myposts = get_posts([
					'numberposts' => -1,
					//'offset'      => 1,
					//'category'    => 1
				]);

				if( $myposts ): ?>
				    <div id="myCarousel" class="carousel slide clients_slider" data-ride="carousel">
					<ol class="carousel-indicators">
                        <?php foreach( $myposts as $i => $post ): ?>
						    <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="<?php echo ($i == 0) ? 'active' : '' ?>"></li>
						<?php endforeach; ?>
					</ol>
					<div class="carousel-inner">
                            <?php
							foreach( $myposts as $i => $post ):
								setup_postdata( $post );
								?>
                                <div class="carousel-item <?php echo ($i == 0) ? 'active' : '' ?>">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <div class="row d_flex">
                                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 pa_rile">
                                                    <div class="img_box">
                                                        <i><img src="<?php bloginfo('template_url') ?>/assets/images/icon_1.png" alt="#"/></i>
                                                        <figure><?php the_post_thumbnail('full', ['class' => 'some class1']) ?></figure>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 pa_rile">
                                                    <div class="joe">
                                                        <h3><?php the_title() ?></h3>
                                                        <p><?php the_content() ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

							<?php endforeach; ?>
					</div>
					<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<?php endif; ?>
                <?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<!-- end clients -->
<?php get_footer() ?>
