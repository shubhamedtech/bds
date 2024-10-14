<?php include('./panels/header-top.php'); ?>
<title>About Us | BDS Educational Group</title>
<meta name="description" content="About Us | BDS Educational Group">
<?php include('./panels/header-bottom.php'); ?>
<?php include('./panels/menu.php'); ?>

<!-- Hero Start -->
<section class="bg-half-170 bg-light d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title mb-0"> Results </h4>
                </div>
            </div> <!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Results </li>
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
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="wrapper_result-details mb-4">
                    <h2>Result</h2>
                    <h5>Enter your details carefully to check your results.</h5>
                    <p class="text-justify">
                        Students must enter their User ID and Password to check their exam results. In any case, if students are facing any issues in entering their details or downloading their results, they can contact the institution and inform about the same. The institution will take prompt action to solve issues faced by any student.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="wrapper_result-form border border-1 shadow-sm p-4 rounded-3">
                    <div class="mb-3">
                        <label for="userId" class="form-label ms-1"> User ID </label>
                        <input type="text" class="form-control" id="userId" placeholder="Enter Your User ID:">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label ms-1"> Password </label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Your Password:">
                    </div>
                    <button id="downloadBtn" class="btn btn-primary w-100">Submit </button>
                    <div id="message" class="mt-3 text-danger"></div>
                </div>
            </div>

            <div class="col-12 my-5 d-flex justify-content-center">
                <!-- iframe to display the PDF -->
                <iframe id="pdfViewer" src="" style="width:100%; height:1000px; display:none;"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- About End -->


<?php include('./panels/footer-top.php'); ?>

<script>
    // Predefined valid credentials
    const validUserId = 'BDSEG/19/CC100/135';
    const validPassword = 'BDSEG/19/CC100/135';

    // Path to the PDF file
    const pdfPath = './assets/images/bdseg-result.pdf';

    document.getElementById('downloadBtn').addEventListener('click', function(e) {
        e.preventDefault();

        // Get the user input
        const userId = document.getElementById('userId').value;
        const password = document.getElementById('password').value;
        const message = document.getElementById('message');
        const pdfViewer = document.getElementById('pdfViewer');

        // Reset message and iframe display
        message.innerText = '';
        pdfViewer.style.display = 'none';

        // Simple validation
        if (!userId || !password) {
            message.innerText = 'Please enter both User ID and Password.';
            return;
        }

        // Validate credentials
        if (userId === validUserId && password === validPassword) {
            // If valid, show the PDF in the iframe
            pdfViewer.src = pdfPath;
            pdfViewer.style.display = 'block';
        } else {
            // If invalid, show error message
            message.innerText = 'Invalid User ID or Password.';
        }
    });
</script>

<?php include('./panels/footer-bottom.php'); ?>