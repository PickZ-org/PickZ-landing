<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="PickZ is an open-source warehouse management system designed to simplify warehouse operations with real-time inventory tracking, efficient order management, and invoicing.">
    <meta name="keywords"
          content="warehouse management, inventory tracking, logistics software, warehouse automation, PickZ">
    <meta name="author" content="PickZ">
    <meta property="og:title" content="PickZ - Warehouse Management System">
    <meta property="og:description"
          content="Optimize your warehouse operations with PickZ. Manage inventory, orders, and invoicing seamlessly.">
    <meta property="og:image" content="/img/logo_small.png">
    <meta property="og:url" content="https://www.pickz.org">
    <meta name="twitter:card" content="summary_large_image">
    <title>PickZ - Warehouse Management System</title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #131022;
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Nunito', sans-serif;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease-in-out forwards;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .footer {
            padding: 20px;
            text-align: center;
            margin-top: auto;
        }

        .feature-box {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding: 25px;
            border-radius: 10px;
            background-color: #1b1b2f;
            opacity: 0;
            animation: fadeInUp 1s ease-in-out forwards 0.5s;
        }
    </style>
</head>
<body>
<!-- Hero Section -->
<div class="container col-xxl-12 py-5">
    <div class="row flex-lg-row-reverse align-items-center py-5">
        <div class="col-10 col-sm-8 col-lg-6 fade-in">
            <img src="/img/pickz_dashboard.png" class="img-fluid rounded shadow mb-3" alt="PickZ dashboard">
        </div>
        <div class="col-lg-6 fade-in" style="animation-delay: 0.3s;">
            <img src="img/logo_small.png" class="img-fluid mb-3" alt="PickZ">
            <p class="lead mb-5">PickZ is an open-source warehouse management system designed to simplify warehouse
                operations. With features like real-time inventory tracking, efficient order management, and invoicing,
                PickZ helps you manage your warehouse with ease.</p>
            <div class="d-grid gap-2 row-gap-2 d-md-flex justify-content-md-start">
                <!--<button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>-->
                <a href="https://github.com/PickZ-org/PickZ" target="_blank" class="btn btn-primary btn-lg"><i
                            class="bi bi-github"></i> Github</a>
                <a href="https://docs.pickz.org" target="_blank" class="btn btn-outline-light btn-lg"><i
                            class="bi bi-journal-text"></i> Documentation</a>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="container text-center my-5">
    <h2 class="mb-4">Powerful features for smarter warehousing</h2>
    <p class="lead">PickZ provides an advanced, efficient, and streamlined approach to warehouse management.
        From real-time inventory tracking to automated invoicing, these features are built to optimize operations
        and reduce manual errors.</p>
</div>

<div class="container text-center my-5">
    <div class="row g-4">
        <div class="col-lg-3">
            <div class="feature-box">
                <div class="display-4 text-primary"><i class="bi bi-box-seam"></i></div>
                <h3>Live Inventory Tracking</h3>
                <p>Monitor stock in real-time to reduce discrepancies.</p>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="feature-box">
                <div class="display-4 text-primary"><i class="bi bi-arrows-move"></i></div>
                <h3>Smart Putaway</h3>
                <p>Guided storage locations to maximize warehouse space.</p>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="feature-box">
                <div class="display-4 text-primary"><i class="bi bi-upc-scan"></i></div>
                <h3>Handheld Scanner Support</h3>
                <p>Speed up tasks with barcode scanning integration.</p>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="feature-box">
                <div class="display-4 text-primary"><i class="bi bi-box-arrow-in-down"></i></div>
                <h3>FEFO Picking</h3>
                <p>Ensure older stock moves first with first-expired, first-out logic.</p>
            </div>
        </div>
    </div>
    <div class="row g-4 mt-2">
        <div class="col-lg-3">
            <div class="feature-box">
                <div class="display-4 text-primary"><i class="bi bi-diagram-3"></i></div>
                <h3>Dynamic Stock Grouping</h3>
                <p>Organize inventory the way that works best for you.</p>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="feature-box">
                <div class="display-4 text-primary"><i class="bi bi-geo-alt"></i></div>
                <h3>Task & Location Priorities</h3>
                <p>Optimize workflows by prioritizing locations and tasks.</p>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="feature-box">
                <div class="display-4 text-primary"><i class="bi bi-box-arrow-left"></i></div>
                <h3>Crossdocking</h3>
                <p>Boost efficiency by reducing storage time for incoming goods.</p>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="feature-box">
                <div class="display-4 text-primary"><i class="bi bi-receipt"></i></div>
                <h3>Automated Invoicing</h3>
                <p>Generate invoices based on quantities and storage duration.</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="container text-center my-5 fade-in" style="animation-delay: 0.6s;">
    <p class="lead">Have questions or need support? Reach out at:</p>
    <p><a href="mailto:hello@pickz.org" class="btn btn-outline-light btn-lg my-4 fs-3"><i class="bi bi-envelope"></i>
            hello@pickz.org</a></p>
</div>

<footer class="footer fade-in" style="animation-delay: 0.8s;">
    <p>&copy; <span id="year"></span> PickZ. All Rights Reserved.</p>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
