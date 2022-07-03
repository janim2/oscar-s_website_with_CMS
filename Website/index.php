<?php

    include_once 'partials/home_header.php'; 
    require_once 'database/config.php';
    require_once 'helpers/functions.php'; 
    require_once 'helpers/constants.php'; 

?>
<!-- slider_area_start -->
<div class="testmonial_active owl-carousel" style="background-color: #265fa6;">
    <div class="slider_area_inner slider_bg_1 d-flex align-items-center" style="margin-left: 20px; margin-right: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="single_slider">
                        <div class="slider_text">
                            <h3>High Quality Motivation</h3>
                            <p style="text-align: justify; margin-right: 20px;" class="intro-text">Oscar is the guy that
                                stirs your comfort zone to take you through the muddy waters and then get you out to be
                                the refined gold of your vision.</p>
                            <style>
                                @media (max-width: 767px) {
                                    .intro-text {
                                        width: 250px;
                                    }
                                }
                            </style>
                            <a href="about.html" class="boxed-btn4 ">Learn More</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="slider_area_inner slider_bg_4 d-flex align-items-center" style="margin-left: 20px; margin-right: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="single_slider">
                        <div class="slider_text">
                            <h3>High Quality Motivation</h3>
                            <p style="text-align: justify; margin-right: 20px;" class="intro-text">My mandate is to work
                                on your mind such that you achieve every vision you put your mind to.</p>
                            <a href="#" class="boxed-btn4 ">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider_area_inner slider_bg_3 d-flex align-items-center" style="margin-left: 20px; margin-right: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_slider">
                            <div class="slider_text">
                                <h3>High Quality Motivation</h3>
                                <p style="text-align: justify; margin-right: 20px;" class="intro-text">Every person you
                                    employ walks through the door of your organisation with a particular mindset. My
                                    mission is to help you align their mindset with your vision.</p>
                                <a href="#" class="boxed-btn4 ">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- about_area _start  -->
<div class="about_area">
    <div class="opacity_icon d-none d-lg-block">
        <i class="flaticon-straight-quotes"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="single_about_info text-center">
                    <div class="about_thumb">
                        <img src="img/about/oscarls.jpg" style="object-fit: contain;" alt="">
                    </div>
                    <h3>Finest And Strongest Motivational<br>
                        Speaker In The World</h3>
                    <p>It's possible if only you believe.</p>
                    <div class="signature">
                        <img src="img/about/signature.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="single_about_info text-center">
                    <div class="about_thumb">
                        <div class="image_hover">
                            <div class="hover_inner">
                                <h2>Over 10,000</h2>
                                <span>People Motivated</span>
                            </div>
                        </div>
                    </div>
                    <h3>About Oscar Bimpong</h3>
                    <p style="text-align: justify;">Oscar is the go-to person when it comes to mindset transformation.
                        He has 14 years of experience in setting the minds of people and organisations on autopilot of a
                        winning mentality. He has over the years helped countless individuals, groups and the corporate
                        world, harness the power of the mind to their advantage.</p>
                    <a href="about.html" class="genric-btn info circle">Read More</a>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- about_area _end -->

<!-- practice_area_start -->
<div class="practice_area">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-60">
                    <h3>Services</h3>
                    <p></p>
                </div>
            </div>
        </div>
        <style>
            .service-image {
                height: 450px;
            }
        </style>
        <div class="row no-gutters">
            <div class="col-xl-3 col-md-6">
                <div class="single_practice">
                    <div class="practice_image">
                        <img class="service-image" src="img/practice/NABCO.jpeg" alt="">
                    </div>
                    <div class="practice_hover text-center">
                        <div class="hover_inner">
                            <i class="flaticon-case"></i>
                            <h3>Mindset Revolution Corporate Training</h3>
                            <p>This is a well-designed three-day training for staff and management of organisations.
                                What CEOs and corporate directors probably don’t know is that anyone they hire enters
                                their business door with a particular mindset.</p>
                            <p id="myDIV"></p>
                            <a onclick="myFunction()" class="lern_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <script>
                    function myFunction() {
                        var x = document.getElementById("myDIV");
                        if (x.innerHTML ===
                            "My mandate is to align their mindset to the vision of the organisation. This is the reason why we've developed the three-day thought-provoking training program dubbed "
                        ) {
                            x.innerHTML = "";
                        } else {
                            x.innerHTML =
                                "My mandate is to align their mindset to the vision of the organisation. This is the reason why we've developed the three-day thought-provoking training program dubbed ";
                        }
                    }
                </script>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="single_practice">
                    <div class="practice_image">
                        <img class="service-image" src="img/practice/LONDON.jpeg" alt="">
                    </div>
                    <div class="practice_hover text-center">
                        <div class="hover_inner">
                            <i class="flaticon-case"></i>
                            <h3>How to Develop the Right <br>Corporate Mindset</h3>
                            <p>This training program is designed to help staff and management to be aligned to the
                                vision of the company, develop the right mental attitude, maximise their potential,
                                exceed expectations and harness the power of the mind to achieve set targets.</p>
                            <p id="service"></p>
                            <a onclick="serviceFunction()" class="lern_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <script>
                    function serviceFunction() {
                        var x = document.getElementById("service");
                        if (x.innerHTML === "Book for a free consultation") {
                            x.innerHTML = "";
                        } else {
                            x.innerHTML = "Book for a free consultation";
                        }
                    }
                </script>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="single_practice">
                    <div class="practice_image">
                        <img class="service-image" src="img/practice/uni.jpeg" alt="">
                    </div>
                    <div class="practice_hover text-center">
                        <div class="hover_inner">
                            <i class="flaticon-case"></i>
                            <h3>Mindset Revolution Coaching Academy (MRCA)</h3>
                            <p>Are you an individual, career-oriented person, corporate executive or entrepreneur that
                                wants to break limits and get to the next stage of your life? Then what you need is the
                                Mindset Revolution Coaching Academy.
                            </p>
                            <p id="service1"></p>
                            <a onclick="service1Function()" class="lern_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <script>
                    function service1Function() {
                        var x = document.getElementById("service1");
                        if (x.innerHTML ===
                            "If your vision is full of clutter, then what you need is clarity of understanding and it all starts with a mindset transformation. Book a free 30 minutes consultation"
                        ) {
                            x.innerHTML = "";
                        } else {
                            x.innerHTML =
                                "If your vision is full of clutter, then what you need is clarity of understanding and it all starts with a mindset transformation. Book a free 30 minutes consultation";
                        }
                    }
                </script>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="single_practice">
                    <div class="practice_image">
                        <img class="service-image" src="img/practice/uni.jpeg" alt="">
                    </div>
                    <div class="practice_hover text-center">
                        <div class="hover_inner">
                            <i class="flaticon-case"></i>
                            <h3>Mindset Revolution Reading Club</h3>
                            <p>This is where we meet every month to read and discuss the Mindset Revolution for 12
                                months. By the end of the 12 months, the objective is to drive a mindset change in the
                                members for them to have a different perception and approach to life, career and
                                business.
                            </p>
                            <p id="service2"></p>
                            <a onclick="service2Function()" class="lern_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <script>
                    function service2Function() {
                        var x = document.getElementById("service2");
                        if (x.innerHTML ===
                            " This gives participants a sense of purpose to develop the mindset that there is nothing impossible if you put your mind to it."
                        ) {
                            x.innerHTML = "";
                        } else {
                            x.innerHTML =
                                " This gives participants a sense of purpose to develop the mindset that there is nothing impossible if you put your mind to it.";
                        }
                    }
                </script>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="single_practice">
                    <div class="practice_image">
                        <img class="service-image" src="img/practice/stepout.jpeg" alt="">
                    </div>
                    <div class="practice_hover text-center">
                        <div class="hover_inner">
                            <i class="flaticon-case"></i>
                            <h3>Stepout With Oscar Bimpong</h3>
                            <p>This is where we meet every month to read and discuss the Mindset Revolution for 12
                                months. By the end of the 12 months, the objective is to drive a mindset change in the
                                members for them to have a different perception and approach to life, career and
                                business.
                            </p>
                            <p id="service3"></p>
                            <a onclick="service3Function()" class="lern_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <script>
                    function service3Function() {
                        var x = document.getElementById("service3");
                        if (x.innerHTML ===
                            " This gives participants a sense of purpose to develop the mindset that there is nothing impossible if you put your mind to it."
                        ) {
                            x.innerHTML = "";
                        } else {
                            x.innerHTML =
                                " This gives participants a sense of purpose to develop the mindset that there is nothing impossible if you put your mind to it.";
                        }
                    }
                </script>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="single_practice">
                    <div class="practice_image">
                        <img class="service-image" src="img/practice/stepout.jpeg" alt="">
                    </div>
                    <div class="practice_hover text-center">
                        <div class="hover_inner">
                            <i class="flaticon-case"></i>
                            <h3>Stepout Masterclass</h3>
                            <p>This is a yearly masterclass organised in partnership with Zeepay Ghana Limited, our
                                title sponsor, to look for one young person with an innovative technological idea or a
                                start-up to support to become the next unicorn on the continent of Africa. The areas of
                                technology we look at are Fintech, Regtech, Agritech, Insuretech and Edutech.
                            </p>
                            <p id="service4"></p>
                            <a onclick="service4Function()" class="lern_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <script>
                    function service4Function() {
                        var x = document.getElementById("service4");
                        if (x.innerHTML ===
                            "The whole idea is to inspire the next generation to use technology as a tool to change the continent of Africa, especially Ghana."
                        ) {
                            x.innerHTML = "";
                        } else {
                            x.innerHTML =
                                "The whole idea is to inspire the next generation to use technology as a tool to change the continent of Africa, especially Ghana.";
                        }
                    }
                </script>
            </div>


        </div>
    </div>
</div>
<!-- practice_area_end -->

<!-- books-start  -->
<?php include_once 'includes/_books_section.php'; ?>
<!-- books-end  -->

<!-- testmonial_area_start  -->
<?php include_once 'includes/_testimony_section.php'; ?>
<!-- testmonial_area_end  -->

<div class="appointment_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-md-6 col-lg-6">
                <div class="appiontment_thumb d-none d-lg-block">
                    <img style="width: 600px;" src="img/appointment/lad.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1 col-md-6 col-md-12 col-lg-6">
                <div class="appointment_info">
                    <div class="opacity_icon d-none d-lg-block">
                        <i class="flaticon-balance"></i>
                    </div>
                    <h3>Make an Appointment</h3>
                    <p>Many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                        in some.</p>
                    <form method="POST" id="book_apointment_form">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <input type="text" placeholder="Your Name" id="name" name="name" required>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <input type="email" placeholder="Your Email" id="email" name="email" required>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <input type="text" placeholder="Phone no." id="phone_number" name="phone_number" required>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <input type="date" id="date" placeholder="Appointment date" name="date" required>
                            </div>
                            <div class="col-xl-12">
                                <textarea placeholder="Message" id="message" name="message" required></textarea>
                            </div>
                            <div class="col-xl-12">
                                <div class="appoinment_button">
                                    <button class="boxed-btn5 loading" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!---END APPOINTMENT-->
<!---Customers-->
<div style="height: 500px;" class="testmonial_area testmonial_bg_3 overlay2">
    <div class="section_title text-center mb-60">
        <h3 style="color: white;">OUR CUSTOMERS</h3>
    </div>
    <style>
        .customer-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-height: 200px;
            max-width: 30%;
            object-fit: contain;
        }
    </style>


    <div class="testmonial_active owl-carousel">



        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/ACACIA.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/BIS.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/Bricklane.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/ChristianAid.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/Hilcrest.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/kotoko.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/LSC.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/NABCO.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/VCS.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/YEA.jpeg">
        </div>
        <div class="single_testmonial text-center">

            <img class="customer-image" src="img/customers/zeepay.jpeg">
        </div>
    </div>
</div>
</div>
<!---CUSTOMERS END-->

<?php include_once 'partials/footer.php'; ?>

<script>
   $(document).on('submit', '#book_apointment_form', function (event) {
      event.preventDefault();
      submitFormQuery(this, "database/Apointment/add_apointment.php", ".loading", "Apointment Booked Successfully", false);
    });
</script>