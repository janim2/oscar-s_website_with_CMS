<?php
    include_once 'partials/header.php'; 
    require_once 'database/config.php';
    require_once 'helpers/functions.php'; 
?>
<!-- bradcam_area_start  -->
<div class="bradcam_area">
    <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <iframe style="border:0; width: 100%; height: 370px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9022985563984!2d-0.17541218505544953!3d5.581458595953417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b8e7a8a097d%3A0x69afe141182b3e01!2sNew%20Albany%20Place!5e0!3m2!1sen!2sbg!4v1648840838775!5m2!1sen!2sbg"
                frameborder="0" allowfullscreen></iframe>

        </div>


        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                    placeholder=" Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                    placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                    placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn loading">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>First Circular Road Cantonments, Accra.</h3>
                        <p>C New Albany Place/p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+233 (0) 555803924 / +233 (0) 27 114 4454 /h3>
                            <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>info@train2inspire.com</h3>
                        <p>Feel free to reach out!!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
<?php
    include_once 'partials/footer.php'; 
?>
<script>
   $(document).on('submit', '#contactForm', function (event) {
      event.preventDefault();
      submitFormQuery(this, "database/Contact/add_contact.php", ".loading", "Submittion submitted. You will be contacted by Mr. Oscar soon", false);
    });
</script>