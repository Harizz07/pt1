
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<div id="mySidebar"
     class="col-auto bg-dark text-white offcanvas-lg offcanvas-start">

    <div class="p-4">

        <!-- Company Brand -->
        <a href="home.php" class="navbar-brand text-white text-decoration-none">
            <div class="row">
                <h5 class="fw-bold">
                    <i class="bi bi-airplane-engines me-2"></i>
                    SkyTech Drones
                </h5>
            </div>
        </a>

        <hr>

        <!-- Navigation -->
        <ul class="mynav nav nav-pills flex-column">

            <li class="nav-item mb-3 mt-2">
                <a href="home.php"
                   class="nav-link text-white <?= $currentPage == 'home.php' ? 'active bg-primary' : '' ?>">
                    <i class="bi bi-house-fill me-2"></i>
                    Home
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="products.php"
                   class="nav-link text-white <?= $currentPage == 'products.php' ? 'active bg-primary' : '' ?>">
                    <i class="bi bi-box-seam me-2"></i>
                    Products
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="customers.php"
                   class="nav-link text-white <?= $currentPage == 'customers.php' ? 'active bg-primary' : '' ?>">
                    <i class="bi bi-people-fill me-2"></i>
                    Customers
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="staffs.php"
                   class="nav-link text-white <?= $currentPage == 'staffs.php' ? 'active bg-primary' : '' ?>">
                    <i class="bi bi-person-badge-fill me-2"></i>
                    Staffs
                </a>
            </li>

            <li class="nav-item mb-3">
                <a href="orders.php"
                   class="nav-link text-white <?= in_array($currentPage, ['orders.php', 'orderdetails.php', 'invoice.php']) ? 'active bg-primary' : '' ?>">
                    <i class="bi bi-cart-fill me-2"></i>
                    Orders
                </a>
            </li>

        </ul>

        <hr>

        <!-- User Profile -->
        <div class="dropdown">

            <a href="#"
               class="text-decoration-none text-white dropdown-toggle d-inline-block align-middle"
               data-bs-toggle="dropdown">

                <div class="rounded-circle bg-secondary text-center d-inline-block align-middle"
                     style="width: 50px; height: 50px; line-height: 50px;">

                    <i class="bi bi-person-fill text-white fs-4"></i>
                </div>

                <div class="d-inline-block align-middle ms-2 text-start">
                    <h6 class="mb-0 text-nowrap">Adam Hariz</h6>
                    <small class="text-white-50 text-nowrap d-block">
                        a223660@siswa.ukm.edu.my
                    </small>
                </div>

            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Logout
                    </a>
                </li>
            </ul>

        </div>

    </div>
</div>
