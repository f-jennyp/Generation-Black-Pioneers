<footer>
	<div id="footer">
		<div class="row">
			<div class="footer-con">
				<div class="logo-holder">
					<a href="home"><img loading="lazy" src="public/images/content/ft-logo.png" alt="Logo"></a>
				</div>

				<div class="comp-info">
					<div class="flex">
						<div class="email card">
							<img loading="lazy" src="public/images/content/ft-email.png" alt="">
							<div class="text-left">
								<div class="label">Email</div>
								<a href="mailto:<?php $this->info("email"); ?>">
									<?php $this->info("email"); ?>
								</a>
							</div>
						</div>

						<div class="phone card">
							<img loading="lazy" src="public/images/content/ft-phone.png" alt="">
							<div class="text-left">
								<div class="label">Phone</div>
								<a href="tel:<?php $this->info("phone"); ?>">
									<?php $this->info("phone"); ?>
								</a>
							</div>
						</div>

						<div class="location card">
							<img loading="lazy" src="public/images/content/ft-address.png" alt="">
							<div class="text-left">
								<div class="label">Location</div>
								<a>
									<?php $this->info("address"); ?>
								</a>
							</div>
						</div>
					</div>

					<div class="socials">
						<a href="<?php $this->info('fb_link') ?>" target="_blank"><img src="fb.png" alt=""></a>
						<a href="<?php $this->info('tt_link') ?>" target="_blank"><img src="tt.png" alt=""></a>
						<a href="<?php $this->info('ig_link') ?>" target="_blank"><img src="ig.png" alt=""></a>
						<a href="<?php $this->info('yp_link') ?>" target="_blank"><img src="yp.png" alt=""></a>
						<a href="<?php $this->info('li_link') ?>" target="_blank"><img src="li.png" alt=""></a>
					</div>
				</div>
			</div>

			<div class="nav-holder">
				<div class="flex">
					<nav>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
							<li <?php $this->helpers->isActiveMenu("mission"); ?>><a
									href="<?php echo URL ?>mission#content">MISSION OF GBP</a></li>
							<li <?php $this->helpers->isActiveMenu("events"); ?>><a
									href="<?php echo URL ?>events#content">EVENTS AND TICKETS</a></li>
							<li <?php $this->helpers->isActiveMenu("learn"); ?>><a
									href="<?php echo URL ?>learn#content">LEARN AND ENGAGE</a></li>
							<li <?php $this->helpers->isActiveMenu("store"); ?>><a
									href="<?php echo URL ?>store#content">STORE</a></li>
							<li <?php $this->helpers->isActiveMenu("join"); ?>><a
									href="<?php echo URL ?>join#content">JOIN AND GIVE</a></li>
							<li <?php $this->helpers->isActiveMenu("news"); ?>><a
									href="<?php echo URL ?>news#content">IN THE NEWS</a></li>
							<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
									href="<?php echo URL ?>contact#content">CONTACT US</a></li>
						</ul>
					</nav>
				</div>
			</div>


			<div class="copyrights">
				<p class="copy">
					©
					<?php echo date("Y"); ?>.
					<?php $this->info("company_name"); ?>. ALL RIGHTS RESERVED.
					<?php if ($this->siteInfo['policy_link']): ?>
						<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
					<?php endif ?>
				</p>
				<p class="techno">
					<a href="http://technodreamoutsourcing.com/">Web Design</a> Done by <img loading="lazy"
						src="public/images/hd-logo.png" alt="">
				</p>
			</div>
		</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script>
	// EFFECTS / ANIMATION
	function reveal() {
		var reveals = document.querySelectorAll(".reveal");

		for (var i = 0; i < reveals.length; i++) {
			var windowHeight = window.innerHeight;
			var elementTop = reveals[i].getBoundingClientRect().top;
			var elementVisible = 150;

			if (elementTop < windowHeight - elementVisible) {
				reveals[i].classList.add("active");
			} else {
				reveals[i].classList.remove("active");
			}
		}
	}

	window.addEventListener("scroll", reveal);

	// HEADER FIXED
	document.addEventListener("DOMContentLoaded", function () {
		var header = document.getElementById("header");
		var logoImg = document.querySelector("#header .logo-holder img");

		function updateHeader() {
			if (window.scrollY > 0) {
				header.classList.add("fixed");
			} else {
				header.classList.remove("fixed");
			}

			// Resize logo image based on scroll position
			var maxImgWidth = 250;
			var scrolledPercentage = Math.min(1, window.scrollY / 100); // You can adjust the factor based on your design
			var newImgWidth = maxImgWidth + (1 - scrolledPercentage) * (logoImg.width - maxImgWidth);
			logoImg.style.maxWidth = newImgWidth + "px";
		}

		// Initial call to set header and image size
		updateHeader();

		window.addEventListener("scroll", function () {
			updateHeader();

			// Check if scroll position is at the top
			if (window.scrollY === 0) {
				// Reset the image size when back at the top
				logoImg.style.maxWidth = "489px"; // Adjust the original max-width value
			}
		});
	});

</script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				var recaptcha = grecaptcha.render(el, { 'sitekey': '<?php $this->info("site_key"); ?>' });
				$('.destroy-on-load').remove();
			})
		};


		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script type="text/javascript" src="public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="public/scripts/jquery.pajinate.js"></script>
	<script>
		$(document).ready(function () {
			$('#gall1').pajinate({
				num_page_links_to_display: 3,
				items_per_page: 10
			});
			$('.fancy').fancybox({
				helpers: {
					title: {
						type: 'over'
					}
				}
			});
		})
	</script>
<?php endif; ?>


<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
		style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>