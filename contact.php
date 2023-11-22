<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tags for Social Sharing -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="EdFocus Technologies - Your Entryway to Cutting-Edge E-Learning Technologies">
	<meta name="keywords" content="EdFocus, E-Learning, Education, Technology">
	<meta name="author" content="Your Name or Company Name">

	<!-- Open Graph (OG) Tags for Social Sharing -->
	<meta property="og:title" content="EdFocus Technologies">
	<meta property="og:description" content="Your entryway to a world of cutting-edge e-learning technologies.">
	<meta property="og:image" content="https://edfocustech.com/assets/images/logo/logo.webp">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:url" content="https://edfocustech.com">
	<meta property="og:type" content="website">

	<?php include('links.php'); ?>

</head>

<body class="custom-cursor">


	<div class="page-wrapper">

		<?php include('header.php'); ?>


		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container mt-30 mb-60 wow fadeInUp animated" data-wow-delay="300ms">
				<div class="inner">
					<div class="row">

						<div class="col-lg-6 ">
							<div class="contact-us-form">
								<h2>Contact With Us</h2>
								<p>If you have any questions please fell free to contact with us.</p>
								<!-- Form -->
								<form class="form" method="POST" action="">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" id="name" placeholder="Name" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" id="email" placeholder="Email"
													required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" id="phone" placeholder="Phone"
													required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" id="subject" placeholder="Subject"
													required="">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" id="message" placeholder="Your Message"
													required=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="contact-one__btn-box">
												<button type="submit" onclick="Send()"
													class="eduact-btn eduact-btn-second"><span
														class="eduact-btn__curve"></span>Send Message<i
														class="icon-arrow"></i></button>
											</div>
										</div>
									</div>
								</form>


								<script src="https://smtpjs.com/v3/smtp.js"></script>
								<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


								<script>

									function Send() {
										event.preventDefault();


										var name = document.getElementById("name").value;
										var email = document.getElementById("email").value;
										var phone = document.getElementById("phone").value;
										var subject = document.getElementById("subject").value;
										var message = document.getElementById("message").value;

										// Validation: Check if any of the required fields is empty
										if (!name || !email || !phone || !subject || !message) {
											swal("Error", "Please fill in all the required fields.", "error");
											return; // Stop execution if validation fails
										}

										var body = "name: " + name + "<br/> email:" + email + "<br/> contact:" + phone + "<br/> subject:" + subject + "<br/> Message:" + message;

										console.log(body);
										Email.send({
											Host: "smtp.elasticemail.com",
											Username: "hisham072001@gmail.com",
											Password: "7ED22F18105460EE0603D607841658FD2D09",
											To: 'hisham1off@gmail.com',
											From: "hisham072001@gmail.com",
											Subject: "Edfocus Contact Form Enquiry",
											Body: body
										}).then(
											message => {
												if (message == 'OK') {
													swal("Successful", "Your message has been send!", "success");

												}

											}
										);
									}
								</script>


								<!--/ End Form -->
							</div>
						</div>
						<div class="col-lg-6 d-lg-block">
							<div class="contact-us">
								<!--Start Google-map -->
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.8272256505784!2d76.31727347416262!3d9.948329073923457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0872b7e55c29ef%3A0x564c6f46425d9786!2sHemito%20Digital%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1700464448249!5m2!1sen!2sin"
									width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy"
									referrerpolicy="no-referrer-when-downgrade"></iframe> <!--/End Google-map -->
							</div>
						</div>
					</div>
				</div>
		</section>

		<!-- Contact End -->
		<!-- Info Start -->
		<section class="contact-info">
			<div class="container">
				<ul class="contact-info__wrapper">
					<li>
						<div class="contact-info__icon"><span class="icon-Call"></span></div>
						<p class="contact-info__title">Have any question?</p>
						<h4 class="contact-info__text">Free <a href="tel:+917025042570">+91 70250 42570</a></h4>
					</li>
					<li class="active">
						<div class="contact-info__icon"><span class="icon-Email"></span></div>
						<p class="contact-info__title">Send Email</p>
						<h4 class="contact-info__text"><a href="mailto:edfoucstech@gmail.com">edfoucstech@gmail.com</a>
						</h4>
					</li>
					<li>
						<div class="contact-info__icon"><span class="icon-Location"></span></div>
						<p class="contact-info__title">Visit Anytime</p>
						<h4 class="contact-info__text"><span>EdFocus Technologies Palarivattom, 682025</span></h4>
					</li>
				</ul>
			</div>
		</section>
		<!-- Info End -->


		<?php include('footer.php'); ?>

	</div><!-- /.page-wrapper -->

	<?php include('scripts.php'); ?>

</body>


</html>