<?php
include "header_two.php";
?>
<!-- Breadcrumb area -->
<section class="cr-section breadcrumb-area" data-black-overlay="7">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="cr-breadcrumb text-center">
					<h2 class="cr-breadcrumb__title">Register</h2>
					<div class="cr-breadcrumb__tree text-left text-md-left text-center">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Register</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- //Breadcrumb area -->

<!-- Page Conent -->
<main class="page-content">

	<!-- Donnation Form -->
	<div class="pg-donation-area ptb--70 bg--white">
		<div class="container">

			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<form method="post" id="pg-donation" class="pg-donation">
						<aside class="pg-donation__personalinfo">
							<h4 class="pg-dontation__title">Registration Form</h4>
							<div class="single-input">
								<?php if (!isset($_GET['homamid'])) { ?>
									<input type="hidden" value="0" id="homam_id" />
									<!-- for new user registraion via participate button -->
								<?php } else { ?>
									<input type="hidden" value="<?= $_GET['homamid']; ?> " id="homam_id" />
									<!-- for new user registraion via participate button -->
								<?php } ?>
							</div>
							<div class="single-input">
								<label for="pg_name">Name *</label>
								<input type="text" id="pg_name" value="" />
								<span id="name_error" style="color:red"></span>
							</div>
							<div class="single-input">
								<label for="pg_mobile">Mobile Number *</label>
								<input type="text" id="pg_mobile">
								<span id="mobile_error" style="color:red"></span>
							</div>
							<div class="single-input">
								<label for="pg_email">Email *</label>
								<input type="text" id="pg_email">
								<span id="email_error" style="color:red"></span>
							</div>
							<div class="single-input">
								<label for="pg_password">Password *</label>
								<input type="password" id="pg_password">
								<span id="password_error" style="color:red"></span>
							</div>
							<div class="single-input">
								<label for="pg_star">Star *</label>
								<input type="text" id="pg_star">
								<span id="star_error" style="color:red"></span>
							</div>
							<div class="single-input">
								<label for="pg_rasi">Rasi *</label>
								<input type="text" id="pg_rasi">
								<span id="rasi_error" style="color:red"></span>
							</div>
							<div class="single-input">
								<label for="pg_address">Address *</label><br>
								<textarea id="pg_address" style="background: transparent;border: 1px solid #ebebeb;width:100%"></textarea>
								<span id="address_error" style="color:red"></span>
							</div>
							<div class="single-input">
								<label for="pg_sharma_name">Sharma Name </label>
								<input type="text" id="pg_sharma_name">
							</div>
							<div class="single-input">
								<label for="pg_gotram">Gotram </label>
								<input type="text" id="pg_gotram">
							</div>
							<div class="single-input">
								<!-- <button type="submit" id="submit_details" > Register Now </button> -->
								<input type="submit" id="submit_details" value="Register Now" />
							</div>
							<br>
							<h6>Already Have Account ? <a href="signin.php">SignIn Here</a> </h6>

						</aside>
					</form>
				</div>
				<div class="col-lg-3"></div>
			</div>

		</div>
	</div><!-- //Donnation Form -->

</main><!-- //Page Conent -->
<?php
include "footer.php";
?>
