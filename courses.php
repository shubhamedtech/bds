<?php include('./panels/header-top.php'); ?>
<title>Courses | BDS Educational Group</title>
<meta name="description" content="Courses | BDS Educational Group">
<?php include('./panels/header-bottom.php'); ?>
<?php include('./panels/menu.php'); ?>

<?php require('admin/includes/db-config.php'); ?>
<?php
// // Fetch categories
// $categoriesQuery = "SELECT * FROM categories WHERE Status = 1 ORDER BY Position ASC";
// $categoriesResult = $conn->query($categoriesQuery);



// // Fetch sub-categories
// $subCategoriesQuery = "SELECT * FROM categories_card";
// $subCategoriesResult = $conn->query($subCategoriesQuery);

// // Organize sub-categories by category
// $subCategoriesByCategory = [];
// while ($subCategory = $subCategoriesResult->fetch_assoc()) {
//     $subCategoriesByCategory[$subCategory['Categories_ID']][] = $subCategory;
// }

?>

<?php
$categoryData = [];
$categoriesQuery = $conn->query("SELECT * FROM categories WHERE Status = 1 ORDER BY Position ASC");
while ($category = $categoriesQuery->fetch_assoc()) {
    $categoryData[] = $category;
}

$subcategoryData = [];
$subcategoriesQuery = $conn->query("SELECT * FROM categories_card WHERE Status = 1 ORDER BY ID DESC");
while ($subcategory = $subcategoriesQuery->fetch_assoc()) {
    $subcategoryData[] = $subcategory;
}

// Organize sub-categories by category
$subCategoriesByCategory = [];
foreach ($subcategoryData as $subCategory) {
    $subCategoriesByCategory[$subCategory['Categories_ID']][] = $subCategory;
}
?>


<!-- Hero Start -->
<section class="bg-half-170 bg-light d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title mb-0">Courses</h4>
                </div>
            </div> <!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
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

<!-- About Start -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="nav nav-pills mb-3 custom-hover" id="pills-tab" role="tablist">
                    <?php foreach ($categoryData as $index => $category): ?>
                        <li class="nav-item me-2 mb-2 border border-1 rounded-3 shadow" role="presentation">
                            <button class="nav-link <?php echo ($index == 0) ? 'active' : ''; ?>" id="pills-<?php echo $category['Slug']; ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $category['Slug']; ?>" type="button" role="tab" aria-controls="pills-<?php echo $category['Slug']; ?>" aria-selected="<?php echo ($index == 0) ? 'true' : 'false'; ?>">
                                <?php echo $category['Name']; ?>
                            </button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <hr>
        </div>

        <div class="wrapper">
            <div class="tab-content" id="pills-tabContent">
                <?php foreach ($categoryData as $index => $category): ?>
                    <div class="tab-pane fade <?php echo ($index == 0) ? 'show active' : ''; ?>" id="pills-<?php echo $category['Slug']; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $category['Slug']; ?>-tab" tabindex="0">
                        <div class="row my-3">
                            <?php if (isset($subCategoriesByCategory[$category['ID']])): ?>
                                <?php foreach ($subCategoriesByCategory[$category['ID']] as $subCategory): ?>
                                    <div class="col-6 col-md-3 col-lg-2">
                                        <!-- Conditional logic for URL based on the 'Type' column -->
                                        <?php if ($category['Type'] == 'EXAM'): ?>
                                            <a href="entrance-exam-details?url=<?= $subCategory['Slug'] ?>">
                                            <?php elseif ($category['Type'] == 'Countries'): ?>
                                                <a href="abroad-universities?url=<?= $subCategory['Slug'] ?>">
                                                <?php else: ?>
                                                    <a href="universities-courses?url=<?= $subCategory['Slug'] ?>">
                                                    <?php endif; ?>

                                                    <div class="wrapper_course-card mb-3 card-hover">
                                                        <div class="course-card border border-1 rounded-3 shadow-sm">
                                                            <img src="./admin/<?php echo $subCategory['Photo']; ?>" alt="course-image" loading="lazy" class="img-fluid mx-auto d-block custom-t-r">
                                                            <p class="text-center custom-b-r py-2 mb-0 font-13 fw-semibold"><?php echo $subCategory['Name']; ?></p>
                                                        </div>
                                                    </div>
                                                    </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- About End -->





<?php include('./panels/footer-top.php'); ?>
<?php include('./panels/footer-bottom.php'); ?>