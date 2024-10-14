<?php include('./panels/header-top.php'); ?>
<title>Frequently Asked Questions | BDS Educational Group</title>
<meta name="description" content="Frequently Asked Questions | BDS Educational Group">
<?php include('./panels/header-bottom.php'); ?>
<?php include('./panels/menu.php'); ?>

<?php require('admin/includes/db-config.php'); ?>

<?php
// Fetch the FAQs from the database
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

<!-- Start FAQs -->
<section class="section">
    <div class="container">
        <div class="wrapper-faqs">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="img">
                        <img src="./assets/images/vectors/faqs.avif" alt="FAQs image" class="img-fluid mb-3" loading="lazy">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="faqs">
                        <div class="accordion mt-4 pt-2" id="buyingquestion">
                            <?php foreach ($faqData as $index => $faq): ?>
                            <div class="accordion-item rounded mt-2">
                                <h2 class="accordion-header" id="heading<?= $index; ?>">
                                    <button class="accordion-button border-0 bg-light <?= $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index; ?>"
                                        aria-expanded="<?= $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?= $index; ?>">
                                        <?= $faq['Question']; ?>
                                    </button>
                                </h2>
                                <div id="collapse<?= $index; ?>" class="accordion-collapse border-0 collapse <?= $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?= $index; ?>" data-bs-parent="#buyingquestion">
                                    <div class="accordion-body text-muted">
                                        <?= $faq['Answer']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQs -->

<?php include('./panels/footer-top.php'); ?>
<?php include('./panels/footer-bottom.php'); ?>
