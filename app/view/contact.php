<div id="content">
	<div id="contact">
		<div class="box row">
			<div class="contact-con">
				<div class="foreword">KEEP IN TOUCH</div>
				<h1>Contact Form</h1>
				<form action="sendContactForm" method="post" class="sends-email ctc-form">
					<div class="flex">
						<label><span class="ctc-hide">Name</span>
							<input type="text" name="name" placeholder="Name">
						</label>
						<label><span class="ctc-hide">Email</span>
							<input type="text" name="email" placeholder="Email">
						</label>
						<label><span class="ctc-hide">Phone</span>
							<input type="text" name="phone" placeholder="Phone">
						</label>
					</div>
					<label><span class="ctc-hide">Message</span>
						<textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
					</label>

					<label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>

					<div class="flex">
						<div class="text-left ctcCheckbox">
							<label>
								<input type="checkbox" name="consent" class="consentBox">I hereby consent to having this
								website
								store my submitted information so that they can respond to my inquiry.
							</label><br>

							<label>
								<input type="checkbox" name="termsConditions" class="termsBox" /> I hereby confirm that
								I
								have
								read
								and understood this website’s <a href="<?php $this->info("policy_link"); ?>"
									target="_blank">Privacy
									Policy.</a>
							</label>
						</div>
						<div class="flex">
							<div class="g-recaptcha"></div>

							<button type="submit" class="ctcBtn btn hvr-grow hvr-sweep-to-top" disabled>Submit
								Form</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>