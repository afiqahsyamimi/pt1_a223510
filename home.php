
<?php require_once 'header.php'; ?>

<?php require_once 'sidebar.php'; ?>

<div class="col bg-light">
    <!-- Mobile Header with Burger -->
    <div id="myBurger" class="p-3 d-lg-none text-white bg-dark">
        <div class="row">
            <a href="#" class="text-white text-decoration-none"
               data-bs-toggle="offcanvas"
               data-bs-target="#mySidebar">
                <i class="bi bi-list"></i>
                <h5 class="ms-3 d-inline">RichPop Co</h5>
            </a>
        </div>
    </div>

    <!-- Home Content -->
    <div class="p-4">
        <div class="container text-center py-5">

            <h1 class="fw-bold">Welcome to RichPop Co!</h1>

            <p class="text-muted fs-5">
                Discover the joy of gourmet popcorn.
            </p>

            <div class="card shadow-sm border-0 rounded-4 p-4 mt-4">
                <h3 class="fw-bold">Make Every Pop Special!</h3>

                <p class="text-muted">
                    Explore our delicious popcorn kits, made for
                    movie nights, parties and special moments.
                </p>

                <div>
                    <a href="products.php" class="btn btn-dark mt-2">
                        <i class="bi bi-bag-fill me-2"></i>
                        Explore Our Products
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
