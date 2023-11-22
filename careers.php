<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags for Social Sharing -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EdFocus Technologies - Your Entryway to Cutting-Edge Technologies">
    <meta name="keywords" content="EdFocus, Development, Technology">
    <meta name="author" content="Your Name or Company Name">

    <!-- Open Graph (OG) Tags for Social Sharing -->
    <meta property="og:title" content="EdFocus Technologies">
    <meta property="og:description" content="Your entryway to a world of cutting-edge technologies.">
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


        <!-- team-details-start -->
        <section class="become-team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 wow fadeInUp animated" data-wow-delay="300ms">
                        <div class="become-team__content">
                            <h3 class="become-team__title">Job Roles</h3>
                            <ul class="become-team__list">
                                <li>Content creators, Subject: Physics (8-12), Eligibility: PG in relevant subject,
                                    computer skills, English language proficiency. Location: Kochi, Nature: full time
                                    offline. If interested send your resume to edfocustech@gamil.com</li>
                            </ul>
                            <h3 class="become-team__title">Areas of Expertise</h3>
                            <p class="become-team__text">
                                Our vision is to become a trail blazing force in the realm of educational technology,
                                motivated by an unwavering dedication to the significant advantages of value-driven
                                education. Our goal is to equip learners with the means/tools to harness and improve
                                their acquired knowledge that act as a catalyst for a future where knowledge and
                                sustainability are attainable by all. At the heart of our vision lies a commitment to
                                nurture responsible global citizens who can achieve harmony, enlightenment and shared
                                success in any venture.
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp animated" data-wow-delay="400ms">
                        <div class="become-team__form-box">
                            <h3 class="become-team__form-box__title">Apply for Registration</h3>
                            <form method="POST" class="form">
                                <div class="become-team__input-box">
                                    <input type="text" placeholder="Your Name" name="name" id="name">
                                </div>
                                <div class="become-team__input-box">
                                    <input type="email" placeholder="Email Address" name="email" id="email">
                                </div>
                                <div class="become-team__input-box">
                                    <input type="text" placeholder="Phone Number" name="phone" id="phone">
                                </div>
                                <div class="become-team__input-box text-message-box">
                                    <textarea name="message" placeholder="Comment" id="message"></textarea>
                                </div>
                                <div class="become-team__btn-box">
                                    <button type="submit" onclick="Send()" class="eduact-btn eduact-btn-second"><span
                                            class="eduact-btn__curve"></span>Apply Now<i
                                            class="icon-arrow"></i></button>
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
                                    var message = document.getElementById("message").value;

                                    // Validation: Check if any of the required fields is empty
                                    if (!name || !email || !phone || !message) {
                                        swal("Error", "Please fill in all the required fields.", "error");
                                        return; // Stop execution if validation fails
                                    }

                                    var body = "name: " + name + "<br/> email:" + email + "<br/> contact:" + phone + "<br/> Message:" + message;

                                    console.log(body);
                                    Email.send({
                                        Host: "smtp.elasticemail.com",
                                        Username: "hisham072001@gmail.com",
                                        Password: "7ED22F18105460EE0603D607841658FD2D09",
                                        To: 'hisham1off@gmail.com',
                                        From: "hisham072001@gmail.com",
                                        Subject: "Edfocus Job Enquiry",
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


                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>

    </div><!-- /.page-wrapper -->

    <?php include('scripts.php'); ?>

</body>


</html>