<?php include('./panels/header-top.php'); ?>

<?php
require 'admin/includes/db-config.php';

$url = $conn->real_escape_string($_GET['url']);

$query = "
    SELECT blogs.*, blogsfaq.questions, blogsfaq.answers
    FROM blogs
    LEFT JOIN blogsfaq ON blogs.ID = blogsfaq.blog_id
    WHERE blogs.Slug = '$url'
";
$blogs = $conn->query($query);

// Check for query errors

// if (!$blogs) {
//     die("Error: " . $conn->error);
// }

$blog_details = $blogs->fetch_assoc();

$hasFAQs = false;
if (!empty($blog_details['questions']) && !empty($blog_details['answers'])) {
    $hasFAQs = true;
}
?>

<?php
// Fetch the recent blogs
$recentBlogs = [];
$recentBlogsQuery = $conn->query("SELECT * FROM blogs WHERE Status = 1 ORDER BY ID DESC  LIMIT 5");
while ($recentBlog = $recentBlogsQuery->fetch_assoc()) {
    $recentBlogs[] = $recentBlog;
}
?>

<?php
// Fetch the recent blogs
$relatedBlogs = [];
$relatedBlogsQuery = $conn->query("SELECT * FROM blogs WHERE Status = 1 ORDER BY ID DESC  LIMIT 2");
while ($relatedBlog = $relatedBlogsQuery->fetch_assoc()) {
    $relatedBlogs[] = $relatedBlog;
}
?>

<title><?php echo $blog_details['Name']; ?> | BDS Educational Group</title>
<meta name="description" content="<?php echo $blog_details['Meta_Description']; ?>">
<?php include('./panels/header-bottom.php'); ?>
<?php include('./panels/menu.php'); ?>

<!-- Hero Start -->
<section class="bg-half-170 bg-light d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h2><?php echo $blog_details['Name']; ?></h2>
                    <ul class="list-unstyled mt-4 mb-0">
                        <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i> <?php echo date('jS F Y', strtotime($blog_details['Created_At'])); ?></li>
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="blogs.php">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $blog_details['Name']; ?></li>
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

<!-- Blog Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- Blog Start -->
            <div class="col-lg-8 col-md-6">
                <div class="card blog blog-detail border-0 shadow rounded">
                    <img src="/admin/<?php echo $blog_details['Photo']; ?>" class="img-fluid rounded-top" alt="<?php echo $blog_details['Name']; ?>">
                    <div class="card-body content">
                        <p class="text-muted mt-3 text-justify"><?php echo $blog_details['Content']; ?></p>
                    </div>
                </div>

                <!-- <?php if ($hasFAQs): ?>
                <div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Frequently Asked Questions</h5>
                        <div class="accordion mt-3" id="faqAccordion">
                            <?php foreach ($faq_questions as $index => $question): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="true" aria-controls="collapse<?php echo $index; ?>">
                                        <?php echo $question; ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <?php echo nl2br($faq_answers[$index]); ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?> -->

                <!-- Related Posts -->
                <div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Related Posts:</h5>
                        <div class="row">
                            <?php foreach ($relatedBlogs as $relatedBlog): ?>
                                <div class="col-lg-6 mt-4 pt-2">
                                    <div class="card blog blog-primary rounded border-0 shadow">
                                        <div class="position-relative">
                                            <img src="/admin/<?php echo $relatedBlog['Photo']; ?>" class="card-img-top rounded-top" alt="<?php echo $relatedBlog['Name']; ?>">
                                            <div class="overlay rounded-top"></div>
                                        </div>
                                        <div class="card-body content">
                                            <h5><a href="blog-detail?url=<?= $relatedBlog['Slug'] ?>" class="card-title title text-dark"><?php echo $relatedBlog['Name']; ?></a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-3">
                                                <a href="blog-detail?url=<?= $relatedBlog['Slug'] ?>" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <small class="date"><i class="uil uil-calendar-alt"></i> <?php echo date('jS F Y', strtotime($relatedBlog['Created_At'])); ?></small>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            <?php endforeach; ?>
                        </div><!--end row-->
                    </div>
                </div>
            </div>
            <!-- Blog End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="card border-0 sidebar sticky-bar ms-lg-4">
                    <div class="card-body p-0">
                        <!-- Recent Posts Widget -->
                        <div class="widget mt-4">
                            <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">Recent Posts</span>
                            <div class="mt-4">
                                <?php foreach ($recentBlogs as $recentBlog): ?>
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="/admin/<?php echo $recentBlog['Photo']; ?>" class="avatar avatar-small rounded" style="width: auto;" alt="<?php echo $recentBlog['Name']; ?>">
                                        <div class="flex-1 ms-3">
                                            <a href="blog-detail?url=<?= $recentBlog['Slug'] ?>" class="d-block title text-dark"><?php echo $recentBlog['Name']; ?></a>
                                            <span class="text-muted"><?php echo date('jS F Y', strtotime($recentBlog['Created_At'])); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- Social Media Widget -->
                        <div class="widget mt-4">
                            <span class="bg-light d-block py-2 rounded shadow text-center h6 mb-0">Social Media</span>
                            <ul class="list-unstyled social-icon social text-center mb-0 mt-4">
                                <li class="list-inline-item"><a href="#" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end widget-->
                    </div>
                </div>
            </div><!--end sidebar-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Blog End -->



<?php include('./panels/footer-top.php'); ?>
<?php include('./panels/footer-bottom.php'); ?>