<?php include('./panels/header-top.php'); ?>
<title>Home | BDS Educational Group</title>
<meta name="description" content="Home | BDS Educational Group">
<?php include('./panels/header-bottom.php'); ?>
<?php include('./panels/menu.php'); ?>
<?php require('admin/includes/db-config.php'); ?>




<!-- Hero Start -->
<section class="bg-half-170">
    <div class="container">
        <div class="row mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="title-heading me-lg-4">
                            <div class="alert bg-primary alert-pills shadow" role="alert">
                                <span class="content"> Are you ready to learn ?</span>
                            </div>

                            <h1 class="heading mb-3">Welcome to <br> <span class="text-primary"> BDS</span> Educational Group</h1>
                            <p class="para-desc text-muted">
                                We provides always our best educational services for our all students and always try to achieve our students trust and satisfaction.
                            </p>
                            <!-- <div class="subcribe-form mt-4 pt-2">
                                <form class="m-0">
                                    <div class="">
                                        <input type="text" id="course" name="name" class="rounded shadow" placeholder="Search your course">
                                        <button type="submit" class="btn btn-primary">Search <i data-feather="search" class="fea icon-sm"></i></button>
                                    </div>
                                </form>
                            </div> -->
                            <div class="mt-4 pt-2">
                                <a href="contact-us.php" class="btn btn-primary">Contact Us <i class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="position-relative">
                            <img src="assets/images/course/online/hero.webp" width="451" height="538" class="rounded img-fluid mx-auto d-block" alt="hero image">
                            <!-- <div class="play-icon">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox border-0">
                                    <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                                </a>
                            </div> -->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end row-->
    </div><!--end container fluid-->
</section><!--end section-->
<!-- Hero End -->


<!-- Course list Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">Get a choice of your course</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">
                        Choose from a wide range of courses tailored to your interests. Find the perfect course to enhance your skills.
                    </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body py-5">
                        <div class="sec-img">
                            <!-- <i data-feather="pen-tool" class="fea"></i> -->
                            <img src="./assets/images/course/entrance-exam.png" width="80" height="80" loading="lazy" alt="course-image">
                        </div>
                        <div class="content mt-3">
                            <h5><a href="static_courses.php" class="title text-dark">Entrance Exam</a></h5>
                            <a href="static_courses.php" class="text-muted small">View Details<i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body py-5">
                        <div class="sec-img">
                            <!-- <i data-feather="feather" class="fea"></i> -->
                            <img src="./assets/images/course/skill.png" width="80" height="80" loading="lazy" alt="course-image">
                        </div>
                        <div class="content mt-3">
                            <h5><a href="static_courses.php" class="title text-dark">Skill</a></h5>
                            <a href="static_courses.php" class="text-muted small">View Details<i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body py-5">
                        <div class="sec-img">
                            <!-- <i data-feather="music" class="fea"></i> -->
                            <img src="./assets/images/course/online-education.png" width="80" height="80" loading="lazy" alt="course-image">
                        </div>
                        <div class="content mt-3">
                            <h5><a href="static_courses.php" class="title text-dark">Online Education</a></h5>
                            <a href="static_courses.php" class="text-muted small">View Details<i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body py-5">
                        <div class="sec-img">
                            <!-- <i data-feather="camera" class="fea"></i> -->
                            <img src="./assets/images/course/regular-education.png" width="80" height="80" loading="lazy" alt="course-image">
                        </div>
                        <div class="content mt-3">
                            <h5><a href="static_courses.php" class="title text-dark">Regular Program</a></h5>
                            <a href="static_courses.php" class="text-muted small">View Details<i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body py-5">
                        <div class="sec-img">
                            <!-- <i data-feather="shield" class="fea"></i> -->
                            <img src="./assets/images/course/school-education.png" width="80" height="80" loading="lazy" alt="course-image">
                        </div>
                        <div class="content mt-3">
                            <h5><a href="static_courses.php" class="title text-dark">School Education</a></h5>
                            <a href="static_courses.php" class="text-muted small">View Details<i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body py-5">
                        <div class="sec-img">
                            <!-- <i data-feather="monitor" class="fea"></i> -->
                            <img src="./assets/images/course/distance-education.png" width="80" height="80" loading="lazy" alt="course-image">
                        </div>
                        <div class="content mt-3">
                            <h5><a href="static_courses.php" class="title text-dark">Distance Education</a></h5>
                            <a href="static_courses.php" class="text-muted small">View Details<i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body py-5">
                        <div class="sec-img">
                            <!-- <i data-feather="bar-chart-2" class="fea"></i> -->
                            <img src="./assets/images/course/abroad-education.png" width="80" height="80" loading="lazy" alt="course-image">
                        </div>
                        <div class="content mt-3">
                            <h5><a href="static_courses.php" class="title text-dark">Abroad Education</a></h5>
                            <a href="static_courses.php" class="text-muted small">View Details<i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->


            <!-- <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                <div class="card features feature-primary explore-feature border-0 rounded text-center">
                    <div class="card-body py-5">
                        <div class="icons rounded-circle shadow-lg d-inline-block">
                            <i data-feather="activity" class="fea"></i>
                        </div>
                        <div class="content mt-3">
                            <h5><a href="#" class="title text-dark">Health & Feetness</a></h5>
                            <a href="#" class="text-muted small">Learn More</a>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-12">
                <div class="text-center mt-4 pt-2">
                    <a href="static_courses.php" class="btn btn-primary">See More Courses <i class="uil uil-arrow-right align-middle"></i></a>
                </div>
            </div>

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Course list End -->


<!-- Partners start -->
<!-- <section class="py-4 border-bottom border-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="assets/images/client/amazon.svg" class="avatar avatar-ex-sm" alt="partners logo" loading="lazy">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="assets/images/client/google.svg" class="avatar avatar-ex-sm" alt="partners logo" loading="lazy">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="assets/images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="partners logo" loading="lazy">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="assets/images/client/paypal.svg" class="avatar avatar-ex-sm" alt="partners logo" loading="lazy">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="assets/images/client/shopify.svg" class="avatar avatar-ex-sm" alt="partners logo" loading="lazy">
            </div>

            <div class="col-lg-2 col-md-2 col-6 text-center py-4">
                <img src="assets/images/client/spotify.svg" class="avatar avatar-ex-sm" alt="partners logo" loading="lazy">
            </div>
        </div>
    </div>
</section> -->
<!-- Partners End -->


<!-- Start -->
<section class="section">
    <!-- About Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-lg">
                            <div class="card-body p-0">
                                <img src="assets/images/course/online/ab01.webp" width="261" height="392" class="img-fluid" alt="work-image" loading="lazy">
                                <!-- <div class="overlay-work"></div>
                                <div class="content">
                                    <a href="#" class="title text-white d-block fw-bold">Web Development</a>
                                    <small class="text-white-50">IT & Software</small>
                                </div> -->
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                <div class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-lg">
                                    <div class="card-body p-0">
                                        <img src="assets/images/course/online/ab02.webp" width="261" height="326" class="img-fluid" alt="work-image" loading="lazy">
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                <div class="card work-container work-primary work-modern overflow-hidden rounded border-0 shadow-lg">
                                    <div class="card-body p-0">
                                        <img src="assets/images/course/online/ab03.webp" width="261" height="326" class="img-fluid" alt="work-image" loading="lazy">
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->

            <div class="col-lg-6 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                <div class="ms-lg-4">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">About <span class="text-primary">BDS Educational Group</span> </h4>
                        <h5>Welcome to Our BDS Educational Group Learning Center.</h5>
                        <p class="text-muted para-desc text-justify">
                            The main objective of the digital platform BDS Educational Group is to offer advice and information about online, remote, regular, and skill education in India. It assists learners and professionals in the workforce in locating appropriate courses provided by numerous colleges and educational establishments both domestically and overseas.
                        </p>
                        <p class="text-muted para-desc mb-0 text-justify">
                            What began as an idea is now an acknowledged institution for quality learning. This is an outcome of the various facets that give the BDS Educational Group its characteristic value the faculty, enterprising students, academic affiliations, facilities and industry partnerships.
                        </p>
                    </div>

                    <div class="mt-4 pt-2">
                        <a href="about-us.php" class="btn btn-primary m-1">Read More... <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->

    <!-- About End -->


    <!-- Popular Course Start -->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">Popular Courses</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">
                        Explore our top-rated courses, offering in-demand skills and expert-led instruction to advance your career.
                    </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/images/course/1.jpg" class="card-img-top" alt="course image" loading="lazy">
                    </div>
                    <div class="position-relative">
                        <div class="shape overflow-hidden text-color-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body content">
                        <!-- <h5 class="fs-6"><a href="#" class="text-primary">Design</a></h5> -->
                        <a href="#" class="title text-dark h5">Program for Missionaries</a>
                        <p class="text-muted mt-2">The most well-known dummy text is the have originated in the 16th century.</p>
                        <a href="#" class="text-primary">Continue Reading... <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div> <!--end card / course-blog-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/images/course/2.jpg" class="card-img-top" alt="course image" loading="lazy">
                    </div>
                    <div class="position-relative">
                        <div class="shape overflow-hidden text-color-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body content">
                        <!-- <h5 class="fs-6"><a href="#" class="text-primary">Development</a></h5> -->
                        <a href="#" class="title text-dark h5">Access to Higher Education</a>
                        <p class="text-muted mt-2">The most well-known dummy text is the have originated in the 16th century.</p>
                        <a href="#" class="text-primary">Continue Reading... <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div> <!--end card / course-blog-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/images/course/3.jpg" class="card-img-top" alt="course image" loading="lazy">
                    </div>
                    <div class="position-relative">
                        <div class="shape overflow-hidden text-color-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body content">
                        <!-- <h5 class="fs-6"><a href="#" class="text-primary">Software</a></h5> -->
                        <a href="#" class="title text-dark h5">Educational Communication</a>
                        <p class="text-muted mt-2">The most well-known dummy text is the have originated in the 16th century.</p>
                        <a href="#" class="text-primary">Continue Reading... <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div> <!--end card / course-blog-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/images/course/4.jpg" class="card-img-top" alt="course image" loading="lazy">
                    </div>
                    <div class="position-relative">
                        <div class="shape overflow-hidden text-color-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body content">
                        <!-- <h5 class="fs-6"><a href="#" class="text-primary">Music</a></h5> -->
                        <a href="#" class="title text-dark h5">Introduction to Epidemiology</a>
                        <p class="text-muted mt-2">The most well-known dummy text is the have originated in the 16th century.</p>
                        <a href="#" class="text-primary">Continue Reading... <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div> <!--end card / course-blog-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/images/course/5.jpg" class="card-img-top" alt="course image" loading="lazy">
                    </div>
                    <div class="position-relative">
                        <div class="shape overflow-hidden text-color-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body content">
                        <!-- <h5 class="fs-6"><a href="#" class="text-primary">Art & Fashion</a></h5> -->
                        <a href="#" class="title text-dark h5">Good Clinical Practice</a>
                        <p class="text-muted mt-2">The most well-known dummy text is the have originated in the 16th century.</p>
                        <a href="#" class="text-primary">Continue Reading... <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div> <!--end card / course-blog-->
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/images/course/6.jpg" class="card-img-top" alt="course image" loading="lazy">
                    </div>
                    <div class="position-relative">
                        <div class="shape overflow-hidden text-color-white">
                            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body content">
                        <!-- <h5 class="fs-6"><a href="#" class="text-primary">Programmer</a></h5> -->
                        <a href="#" class="title text-dark h5">Social Computing</a>
                        <p class="text-muted mt-2">The most well-known dummy text is the have originated in the 16th century.</p>
                        <a href="#" class="text-primary">Continue Reading... <i class="uil uil-angle-right-b align-middle"></i></a>
                    </div>
                </div> <!--end card / course-blog-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Popular Course End -->


    <!-- CTA Start -->
    <div class="container-fluid mt-100 mt-60">
        <div class="rounded py-md-5" style="background: url('assets/images/course/online/cta.webp') center center;">
            <div class="row py-5">
                <div class="container">
                    <div class="row align-items-center px-3 px-sm-0">
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="section-title">
                                <h4 class="display-5 h1 text-white title-dark mb-4">Register Now !</h4>
                                <p class="text-white-50 para-desc">
                                    Register now to access a world of learning opportunities. Enhance your skills with expert-led courses, interactive lessons, and valuable resources designed to help you succeed.
                                </p>
                                <div class="mt-4">
                                    <!-- <a href="contact-us.php" class="btn btn-primary">Admission Now</a> -->
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-5 col-md-6 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                            <div class="card shadow rounded border-0">
                                <div class="card-body">
                                    <h4 class="card-title">Register Now</h4>

                                    <!-- <form class="login-form"> -->
                                    <form id="contact-form" class="contact-form" action="" method="post">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Name :<span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input name="name" id="name" type="text" onkeypress="return isNotNumberKey(event);" class="form-control ps-5" placeholder="Full Name :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email :<span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Your email :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Phone no. :<span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="phone" class="fea icon-sm icons"></i>
                                                        <input name="phone" id="number" type="tel" maxlength="10" minlength="10" onkeypress="return isNumberKey(event);" class="form-control ps-5" placeholder="Your phone no. :">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">I Accept <a href="terms-conditions.php" class="text-primary">Terms And Conditions</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button name="submit" type="submit" value="Submit" class="btn btn-primary w-100">Register Now</button>

                                                <!-- <button class="btn btn-primary w-100">Register Now</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                </div><!--end container-->
            </div><!---end row-->
        </div><!--end div-->
    </div><!--end container fluid-->
    <!-- CTA End -->


    <?php
    // Fetch the testmonial
    $testmonialData = [];
    $testmonials = $conn->query("SELECT * FROM testimonials WHERE Status = 1 ORDER BY ID DESC ");
    while ($testmonial = $testmonials->fetch_assoc()) {
        $testmonialData[] = $testmonial;
    }
    ?>

    <!-- Testi Start -->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">What Students Say ?</h4>
                    <p class="text-muted para-desc mx-auto mb-0">
                        Hear from students as they share experiences and successes, highlighting the impact of our programs and their learning journeys.
                    </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-12 mt-4">
                <div class="tiny-three-item">
                    <?php foreach ($testmonialData as $testmonial) : ?>
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="/admin/<?php echo $testmonial['Image']; ?>" class="avatar avatar-small client-image rounded shadow" alt="testimonial image" loading="lazy">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <p class="text-muted"><?php echo $testmonial['Testimonial']; ?></p>
                                    <h5 class="text-primary fs-6">- <?php echo $testmonial['Name']; ?> <small class="text-muted"><?php echo $testmonial['Profile']; ?></small></h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Testi End -->



    <?php
    // Fetch the blogs
    $blogData = [];
    $blogs = $conn->query("SELECT * FROM blogs WHERE Status = 1 ORDER BY ID DESC LIMIT 3");
    while ($blog = $blogs->fetch_assoc()) {
        $blogData[] = $blog;
    }
    ?>

    <!-- Blog Start -->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Latest News & Blogs</h4>
                    <p class="text-muted para-desc mx-auto mb-0">
                        Stay updated with the latest news, insights, and expert blogs on trending topics, industry developments, and in-depth analysis.
                    </p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <?php foreach ($blogData as $blog) : ?>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="/admin/<?php echo $blog['Photo']; ?>" class="card-img-top rounded-top" alt="blog image" loading="lazy">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="blog-detail?url=<?= $blog['Slug'] ?>" class="card-title title text-dark"><?php echo $blog['Name']; ?></a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="blog-detail?url=<?= $blog['Slug'] ?>" class="text-muted readmore">Continue Reading...<i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="date"><i class="uil uil-calendar-alt"></i> <?php echo date('jS F Y', strtotime($blog['Created_At'])); ?></small>
                        </div>
                    </div>
                </div><!--end col-->
            <?php endforeach; ?>
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->


<?php include('./panels/footer-top.php'); ?>
<!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: './admin/app/leads/store',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    var response = JSON.parse(data);
                    if (response.status === 200) {
                        toastr.success(response.message);
                        $('#contact-form')[0].reset();
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('An error occurred while submitting the form.');
                }
            });
        });
    });

    function isNotNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        return (charCode > 31 && (charCode < 48 || charCode > 57));
    }

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        return !(charCode > 31 && (charCode < 48 || charCode > 57));
    }
</script>
<?php include('./panels/footer-bottom.php'); ?>