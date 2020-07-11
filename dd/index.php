<?php
include "header_one.php";
?>

<!-- Top Banner -->
<div class="banner-area">
	<div class="banner banner-slide-active slider-arrow--style1 slide-animate-text">

		<!-- Single Banner -->
		<div class="banner__single bg-image--1 fullscreen d-flex align-items-center" data-black-overlay="6">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner__content text-center">
							<!-- <img src="images/others-png/bismilla-word.png" alt="bismillah word"> -->
							<h3>Lokamatha Sarvaloka Jaganmatha Akilandakodi Brahmanda Nayagi <br>SHREE BHUVANESWARI SAKTHI PEETAM</h3>
							<!-- <h1>SHREE BHUVANESWARI SAKTHI PEETAM</h1> -->
							<div class="banner__content__button">
								<a href="#ambalsection" class="cr-btn cr-btn--transparent cr-btn--light cr-btn--sm"><span>Learn More</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //Single Banner -->

		<!-- Single Banner -->
		<div class="banner__single bg-image--2 fullscreen d-flex align-items-center" data-black-overlay="6">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner__content text-center">
							<!-- <img src="images/others-png/bismilla-word.png" alt="bismillah word"> -->
							<h3>SHREE BHUVANESWARI SAKTHI PEETAM <br>is the place of Lokamatha Sri Sri Bhuvaneswari, the mother of all celestial GODS</h3>
							<!-- <h1>That Only you can save us</h1> -->
							<div class="banner__content__button">
								<a href="#ambalsection" class="cr-btn cr-btn--transparent cr-btn--light cr-btn--sm"><span>Learn More</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- //Single Banner -->

	</div>
</div><!-- //Top Banner -->

<!-- Page Conent -->
<main class="page-content">

	<!-- Pillar Of Islam -->
	<section class="cr-section islams-pillar-area ptb--70 bg--pattern zig-zag--top zig-zag--bottom">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
				<div class="section-title text-center">
					<h2>Upcoming “Homam”</h2>
				</div>
				<p id="paragraph_justify" style="padding: 10px; margin-bottom: 70px" ;>Homam is a ritual where offerings are made into a sacred fire. The root word of the Homam is 'ha' which means 'offering' or 'sacrifice' in Sanskrit. In northern regions of India it is called havan and in southern India it is called homam, but the meaning and the procedure is same everywhere. To be precise, it can be defined as a “votive ritual” wherein an oblation and religious offerings are made into fire. There are many types of homams or yagnas, it is offered to specific deities on most auspicious dates, for different purposes. It is believed that by performing “Sankalpam” and participating in homam cleanses the participant’s “Self (material and spiritual)” and the environment and depending on “Nakshatras or star” of that particular day – special poojas are performed. </p>
			</div>
		</div>
		<div class="islams-pillars d-flex justify-content-between justify-content-lg-center align-items-center flex-wrap flex-xl-nowrap flex-xx-nowrap flex-sp-nowrap">
			<div class="islams-pillars__thumb text-lg-center wow fadeInLeft">
				<img src="images/bsp/homam_images/home_homams.png" alt="pillars thumb">
			</div>

			<div class="pillars d-flex  flex-md-wrap justify-content-md-center justify-content-sm-center justify-content-center">

				<div class="pillar__single wow fadeInRight" data-wow-delay="0.3s">
					<div class="pillar__single__inner" style="visibility: hidden">
						<a href="homam_details.php"> <img class="pillar__single__icon" src="images/bsp/abhishekam_icon_512.png" alt="pillar 4" style="width:100px">
							<h3> </h3>
						</a>
					</div>
				</div>
				<?php {
					$current_date = date('m/d/y');
					$sqlupcoming_homam = mysqli_query($con, "SELECT * from homam_description where Homam_Status = 1 and Date >= '$current_date' limit 4 ");
					while ($sqlupcoming_homams = mysqli_fetch_assoc($sqlupcoming_homam)) {
				?>
						<div class="pillar__single wow fadeInRight" data-wow-delay="0.1s">
							<div class="pillar__single__inner">
								<a href="homam_details.php?id=<?= $sqlupcoming_homams['Homam_Id']  ?>"> <img class="pillar__single__icon" src="<?= $sqlupcoming_homams['Homam_Image']  ?>" alt="pillar 2" style="width:100%x"  >
									<h3><?= $sqlupcoming_homams['Homam_Name']  ?></h3>
								</a>
							</div>
						</div>
				<?php
						//                        echo $sqlupcoming_homams['Homam_Name'];
					}
					//                    $jsonData = json_encode($sqlupcomeing_homams, JSON_PRETTY_PRINT);
					//                    echo $jsonData;
				}
				?>


				<!--
				<div class="pillar__single wow fadeInRight" data-wow-delay="0.2s">
					<div class="pillar__single__inner">
						<a href="homam_details.php?id=6"><img class="pillar__single__icon" src="images/bsp/homam_images/dhanvanthri.png" alt="pillar 3" style="width:75px">
							<h3>Dhanvanthri Homam</h3>
						</a>
					</div>
				</div>
				<div class="pillar__single wow fadeInRight" data-wow-delay="0.3s">
					<div class="pillar__single__inner">
						<a href="homam_details.php?id=7"> <img class="pillar__single__icon" src="images/bsp/homam_images/sudarshana.png" alt="pillar 4" style="width:75px">
							<h3>Sudarshana Homam</h3>
						</a>
					</div>
				</div>
-->

				<div class="about-content__bottom__right" style="text-align: center;visibility:hidden">
					<a href="homam_details.php" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--dark"><span>view all</span></a>
				</div>
				<div class="about-content__bottom__right" style="text-align: center">
					<a href="homam_list.php" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--dark"><span>view all</span></a>
				</div>
				<div class="about-content__bottom__right" style="text-align: center;visibility:hidden">
					<a href="homam_details.php" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--dark"><span>view all</span></a>
				</div>
			</div>
		</div>
	</section><!-- //Pillar Of Islam -->


	<!-- About Area -->
	<section class="about-area ptb--70 bg--white flower--left-top flower--right-bottom" id="ambalsection" style="background-image: url(images/bsp/Background/ambal_bg.png)">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
					<div class="section-title text-center">
						<h2>Ambal</h2>
						<!-- “ -->
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="about-content">
						<h3><strong>Lokamatha Sri Sri Bhuvaneswari</strong></h3>
						<p id="paragraph_justify"><strong>Lokamatha Sri Sri Bhuvaneswari </strong> is the Universal Mother of all Celestial Gods and all Loka’s. Ambal is called by many names; some are Adi Parasakthi, Adi Sakthi, Durga, Parvati, Pattarika and many more… Ambal is the queen of Thrubhuvana, or three regions – Bhuh (Earth), Bhuvah (Atmosphere) and Svah (Heavens). </p>

						<p id="paragraph_justify">During the beginning of time the Tridevas – Brahma, Vishnu and Rudra did not know who they were and what was their purpose. At this time a flying chariot appeared before them, and a heavenly voice directed them to board the chariot. As the Tridevas boarded the chariot and it started flowing with mind's speed and took them to a mysterious place, which was an island of gems surrounded by ocean of nectar and pristine sylvan forests. As they stepped out of the chariot, the Tridevas were transformed into women, much to their astonishment. As they explored the island they came across an Imperial city protected by nine enclosures and guarded by fierce Bhairavas, Matrikas, Kshetrapalas and Dikpalas. As they entered the city they were amazed by its prosperity and soaring infrastructure and finally reached the Imperial Palace known as Chintamanigruha, guarded by Yoginis. For this was Śrīpūra (alias Devipattana), the capital of Devi Bhuvaneswari, the Empress of Manidvipa, the abode of Adi Parashakti. When they entered the palace they witnessed Devi Bhuvaneswari, the queen of all worlds.</p>

						<p id="paragraph_justify">The Tridevas witnessed millions of universes each with their own Tridevas, in the sheen of Bhuvaneswari's toe-nail. Some were getting created by Brahma, some getting sustained by Vishnu while others getting annihilated by Rudra.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-images clearfix">
						<img class="wow fadeInUp" src="images/bsp/ourguru/about_ambal_1.png" alt="about image">
						<img class="wow fadeInUp" src="images/bsp/ourguru/about_ambal_2.png" alt="smalal image">
						<img class="wow fadeInUp" data-wow-delay="0.1s" src="images/bsp/ourguru/about_ambal_3.png" alt="smalal image">
					</div>
				</div>
			</div>
		</div>
	</section><!-- //About Area -->

	<!-- About Area -->
	<section class="about-area ptb--70 bg--white flower--left-top flower--right-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
					<div class="section-title text-center">
						<h2>Our “Guru”</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="about-content">
						<p id="paragraph_justify">Sadhguru Paadhame Sree Charanam! With the divine blessings of our Guru His Holiness Sri Sri Mahaperiyava and His Holiness Sri Sri Santhanandha Avathoodha Swamigal, Sakthi Peetam for Lokamatha Sri Sri Bhuvaneswari matha was established. Our Management and teams are proud servants of Ambal and are Aathmartha Sishya’s of our Guru’s, having received many blessings and upadesams from them directly. The intention and the sanctity of this group is to unite all Aathma Bandhu's (divine souls) of this world and together help / support the deserving and needy souls. This is a purely a heart to heart Aathmartha initiative , wherein our mission is to create a team of blessed devotees who may be in a position to help and support Ambal’s children who may be going through challenging situations in life.</p>

						<div class="about-content__bottom d-flex align-items-center flex-wrap flex-sm-nowrap">
							<!-- <div class="about-content__bottom__left">
											<p id="paragraph_justify">Have you any quary?</p>
											<h3 class="body--font"><a href="callto://+00812356369">+00812 356 369</a></h3>
										</div>
										<span>or</span> -->
							<div class="about-content__bottom__right">
								<a href="our_guru.php" class="cr-btn cr-btn--sm cr-btn--transparent cr-btn--dark"><span>Read More</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-images clearfix">
						<img class="wow fadeInUp" src="images/bsp/ourguru/our_guru_1.png" alt="about image">
						<img class="wow fadeInUp" src="images/bsp/ourguru/our_guru_2.png" alt="smalal image">
						<img class="wow fadeInUp" data-wow-delay="0.1s" src="images/bsp/ourguru/our_guru_3.png" alt="smalal image">
					</div>
				</div>
			</div>
		</div>
	</section><!-- //About Area -->

	<!-- Activities area -->
	<section class="cr-section activities-area half--bg bg-image--1 ptb--70">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 offset-0">
					<div class="section-title section-title--white text-center">
						<h4>The “Purpose”</h4>
						<p id="paragraph_justify">There is always a great purpose behind any great initiative. Sri Bhuvaneswari Sakthi Peetam also has some great causes and purpose behind its establishment and many charity initiatives have always been taking place here, for the past 7 years.</p>
					</div>
				</div>
			</div>
			<div class="activity-slider-active slider-arrow--style2">

				<!-- Single Activity -->
				<div class="activity-wrap">
					<figure class="activity">
						<div class="activity__thumb">
							<a href="the_purpose.php">
								<img src="images/bsp/thepurpose/the_purpose_lokakshemam_peace.png" alt="activity image">
							</a>
						</div>
						<figcaption class="activity__content text-center">
							<h3><a href="the_purpose.php">LOKAKSHEMAM & PEACE</a></h3>
						</figcaption>
					</figure>
				</div><!-- //Single Activity -->

				<!-- Single Activity -->
				<div class="activity-wrap">
					<figure class="activity">
						<div class="activity__thumb">
							<a href="the_purpose.php">
								<img src="images/bsp/thepurpose/the_purpose_support_girl_children.png" alt="activity image">
							</a>
						</div>
						<figcaption class="activity__content text-center">
							<h3><a href="the_purpose.php">SUPPORT GIRL CHILDREN</a></h3>
						</figcaption>
					</figure>
				</div><!-- //Single Activity -->

				<!-- Single Activity -->
				<div class="activity-wrap">
					<figure class="activity">
						<div class="activity__thumb">
							<a href="the_purpose.php">
								<img src="images/bsp/temple_image1.jpg" alt="activity image">
							</a>
						</div>
						<figcaption class="activity__content text-center">
							<h3><a href="the_purpose.php">HEALTH AND HOLISTIC WELLNESS - VARMASAKSHI</a></h3>
						</figcaption>
					</figure>
				</div><!-- //Single Activity -->

				<!-- Single Activity -->
				<div class="activity-wrap">
					<figure class="activity">
						<div class="activity__thumb">
							<a href="the_purpose.php">
								<img src="images/bsp/temple_image1.jpg" alt="activity image">
							</a>
						</div>
						<figcaption class="activity__content text-center">
							<h3><a href="the_purpose.php">RENOVATION OF OLD TEMPLES AND SUPPORT PLACES OF WORSHIP</a></h3>
						</figcaption>
					</figure>
				</div><!-- //Single Activity -->

				<!-- Single Activity -->
				<div class="activity-wrap">
					<figure class="activity">
						<div class="activity__thumb">
							<a href="the_purpose.php">
								<img src="images/bsp/temple_image1.jpg" alt="activity image">
							</a>
						</div>
						<figcaption class="activity__content text-center">
							<h3><a href="the_purpose.php">FOOD FOR HUNGRY PEOPLE</a></h3>
						</figcaption>
					</figure>
				</div><!-- //Single Activity -->

				<!-- Single Activity -->
				<div class="activity-wrap">
					<figure class="activity">
						<div class="activity__thumb">
							<a href="the_purpose.php">
								<img src="images/bsp/temple_image1.jpg" alt="activity image">
							</a>
						</div>
						<figcaption class="activity__content text-center">
							<h3><a href="the_purpose.php">PROPOGATE SANATANA DHARMA</a></h3>
						</figcaption>
					</figure>
				</div><!-- //Single Activity -->


				<!-- Single Activity -->
				<div class="activity-wrap">
					<figure class="activity">
						<div class="activity__thumb">
							<a href="the_purpose.php">
								<img src="images/bsp/temple_image1.jpg" alt="activity image">
							</a>
						</div>
						<figcaption class="activity__content text-center">
							<h3><a href="the_purpose.php">SUPPORTING ANIMALS, BIRDS AND TREES</a></h3>
						</figcaption>
					</figure>
				</div><!-- //Single Activity -->

			</div>
		</div>
	</section><!-- //Activities area -->



	<!-- Offer area -->
	<section class="cr-section offer-area ptb--70 bg--pattern zig-zag--top zig-zag--bottom">
		<aside class="contact-page-details">
			<div class="container">
				<div class="row">
					<!-- Contact Sidebar -->
					<div class="col-lg-4">
						<div class="contact-sidebar">
							<div class="small-title">
								<h4>Get in touch </h4>
							</div>
							<ul class="contact-sidebar__body">
								<li class="ct__address">
									<p>T-225, New No:16, Gandhi Street, Paari Nagar, Jafferkhanpet,Chennai - 600083</p>
								</li>
								<li class="ct__phone">
									<p><a href="callto://+91 99628 66363">+91 99628 66363</a></p>
								</li>
								<li class="ct__mail">
									<p><a href="mailto://info@srisribhuvaneswari.org">info@srisribhuvaneswari.org</a></p>
									<p><a href="http://www.srisribhuvaneswari.org/">http://www.srisribhuvaneswari.org/</a></p>
								</li>
							</ul>
							<div class="contact-sidebar__social">
								<div class="blink_me">
									<a href="contact.php">
										<h5>click here to contact us...</h5>
									</a> </div>
								<div class="social-icons social-icons--rounded social-icons--medium">
									<ul>
										<li class="facebook"><a href="https://www.facebook.com/Shree-Bhuvaneswari-Sakthi-Peetam-109854610545507/?eid=ARDZsebDWQIUfKnbfP9wa-AKh4kGc-vr8BFweK0xaqykvTf_Ky0STf8POg3OyFyI4PSVU9K9UkaJfXgn&fref=tag"><i class="fa fa-facebook"></i></a></li>
										<!-- <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
										<li class="instagram"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
										<li class="google-plus"><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div><!-- //Contact Sidebar -->
					<!-- Contact Map -->
					<div class="col-lg-8">
						<div class="ct__map">
							<div id="google-map" class="contact-map"></div>
						</div>
					</div><!-- //Contact Map -->
				</div>
			</div>
		</aside>
	</section><!-- //Offer area -->


</main><!-- //Page Conent -->

<?php
include "footer.php";
?>
