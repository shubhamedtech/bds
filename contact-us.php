<?php include('./panels/header-top.php'); ?>
<title>Contact Us | BDS Educational Group</title>
<meta name="description" content="Contact Us | BDS Educational Group">
<?php include('./panels/header-bottom.php'); ?>
<?php include('./panels/menu.php'); ?>

<!-- Hero Start -->
<section class="bg-half-170 bg-light d-table w-100" style="background: url('assets/images/contact-detail.jpg') center center;">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title mb-0">Contact Us</h4>
                </div>
            </div>
        </div>

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="shape overflow-hidden text-color-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->


<!-- Start Contact -->
<section class="section">

    <div class="container mb-5 mt-60">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 text-center features feature-primary feature-clean">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-phone rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="fw-bold">Phone</h5>
                        <a href="#" class="read-more">7888552363, 7888944088 <br> 7888953015</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 text-center features feature-primary feature-clean">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-envelope rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="fw-bold">Email</h5>
                        <a href="mailto:info@bdseg.org" class="read-more"> info@bdseg.org </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 text-center features feature-primary feature-clean">
                    <div class="icons text-center mx-auto">
                        <i class="uil uil-map-marker rounded h3 mb-0"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="fw-bold">Location</h5>
                        <p class="text-primary"> Opposite Sri Guru Harikishan Public School, <br> Anjala, Dist. Amritsar, Punjab-143102 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 mt-4 pt-2">
                <div class="card shadow rounded border-0">
                    <div class="card-body py-5">
                        <h4 class="card-title">Get In Touch !</h4>
                        <div class="custom-form mt-3">
                            <!-- <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()"> -->
                            <form id="contact-form" class="contact-form" action="" method="post">

                                <p id="error-msg" class="mb-0"></p>
                                <div id="simple-msg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="name" type="text" onkeypress="return isNotNumberKey(event);" class="form-control ps-5" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="book" class="fea icon-sm icons"></i>
                                                <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Phone no. :<span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input name="phone" id="number" type="tel" maxlength="10" minlength="10" onkeypress="return isNumberKey(event);" class="form-control ps-5" placeholder="Your phone no. :">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                <textarea name="message" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button name="submit" type="submit" value="Submit" class="btn btn-primary">Send Message</button>
                                        </div>
                                    </div>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-6 ps-md-3 pe-md-3 mt-4 pt-2">
                <div class="card map map-height-two rounded map-gray border-0">
                    <div class="card-body p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4030.8906154794213!2d74.75831662092678!3d31.83693338297256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391943006990d69b%3A0x3eb0a59740979930!2sBDS%20Educational%20Group!5e0!3m2!1sen!2sin!4v1725522330466!5m2!1sen!2sin" style="border:0" class="rounded" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact -->


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