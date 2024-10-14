<?php include('./panels/header-top.php'); ?>
<title>Frequently Asked Questions | BDS Educational Group</title>
<meta name="description" content="Frequently Asked Questions | BDS Educational Group">
<?php include('./panels/header-bottom.php'); ?>
<?php include('./panels/menu.php'); ?>

<?php require('admin/includes/db-config.php'); ?>

<?php
// Fetch the blogs
$faqData = [];
$faqs = $conn->query("SELECT * FROM faqs WHERE Status = 1 ORDER BY ID DESC ");
while ($faq = $faqs->fetch_assoc()) {
    $faqData[] = $faq;
}
?>

<!-- Hero Start -->
<section class="bg-half-170 bg-light d-table w-100" style="background: url('assets/images/contact-detail.jpg') center center;">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title mb-0">Frequently Asked Questions</h4>
                </div>
            </div> <!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Frequently Asked Questions</li>
                </ul>
            </nav>
        </div>
    </div> <!--end container-->
</section><!--end section-->
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
    <div class="container">
        <div class="wrapper-faqs">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="img">
                        <img src="./assets/images/vectors/faqs.avif" alt="faqs image" class="img-fluid" loading="lazy">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="faqs">
                        <div class="accordion mt-4 pt-2" id="buyingquestion">
                            <div class="accordion-item rounded">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        faq #1
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda perferendis libero dolorem ipsa, voluptatibus laudantium aperiam autem nisi, facilis mollitia harum magnam ratione qui et ab nostrum maiores placeat quo a ea. Deserunt laboriosam autem fuga omnis nemo dolorum cum.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        faq #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat saepe reprehenderit libero provident rem fuga ut ipsam dolor ad sit officia asperiores expedita quasi quisquam, eos alias velit earum itaque cum ipsum id ratione labore minima. Pariatur cum eum distinctio?
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        faq #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted">
                                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus laudantium soluta maxime? Inventore error sint sapiente sed voluptate dolorum excepturi dolor at atque corrupti! Iure quam eligendi sit est numquam, maiores ad maxime commodi impedit, saepe voluptate architecto enim dolor.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        faq #4
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere ducimus optio quas ab atque! Autem fugiat recusandae dolorem vel eius dolores officia consectetur! Aut sed voluptate cum suscipit! Nam quod non quasi exercitationem incidunt dignissimos assumenda eaque ipsam natus maxime!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact -->



<?php include('./panels/footer-top.php'); ?>
<?php include('./panels/footer-bottom.php'); ?>