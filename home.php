
<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to SkyTech Drones</h2>
        <p class="text-muted mb-0">
            Remote Control Quadcopter Drone Management System
        </p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h4 class="mb-3">
            <i class="bi bi-airplane-engines text-primary me-2"></i>
            About SkyTech Drones
        </h4>

        <hr>

        <p>
            Welcome to SkyTech Drones, your one-stop platform
            for managing remote control quadcopter drones.
        </p>

        <p>
            Our system allows you to manage drone products,
            customer information, staff members and customer
            orders efficiently.
        </p>

        <a href="products.php" class="btn btn-primary">
            <i class="bi bi-box-seam me-1"></i>
            Explore Products
        </a>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">

        <h5 class="mb-3">
            <i class="bi bi-grid text-primary me-2"></i>
            Management Menu
        </h5>

        <hr>

        <div class="row g-3">

            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-box-seam fs-1 text-primary"></i>
                        <h5 class="mt-3">Products</h5>
                        <p class="text-muted">
                            Manage drone inventory.
                        </p>
                        <a href="products.php" class="btn btn-primary">
                            View Products
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-people-fill fs-1 text-success"></i>
                        <h5 class="mt-3">Customers</h5>
                        <p class="text-muted">
                            Manage customer details.
                        </p>
                        <a href="customers.php" class="btn btn-success">
                            View Customers
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-person-badge fs-1 text-warning"></i>
                        <h5 class="mt-3">Staffs</h5>
                        <p class="text-muted">
                            Manage staff information.
                        </p>
                        <a href="staffs.php" class="btn btn-warning">
                            View Staffs
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-cart-fill fs-1 text-info"></i>
                        <h5 class="mt-3">Orders</h5>
                        <p class="text-muted">
                            Manage customer orders.
                        </p>
                        <a href="orders.php" class="btn btn-info">
                            View Orders
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">

        <h5 class="mb-3">
            <i class="bi bi-stars text-primary me-2"></i>
            Featured Drone Products
        </h5>

        <hr>

        <div class="row g-3">

            <div class="col-md-6">
                <div class="card h-100">
                    <img src="images/meteor75.jpg"
                         class="card-img-top"
                         alt="BetaFPV Meteor75">

                    <div class="card-body">
                        <h5>BetaFPV Meteor75</h5>
                        <p class="text-muted">
                            Compact FPV racing quadcopter drone.
                        </p>
                        <a href="products.php" class="btn btn-primary">
                            View Product
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100">
                    <img src="images/skydioX10.jpg"
                         class="card-img-top"
                         alt="Skydio X10">

                    <div class="card-body">
                        <h5>Skydio X10</h5>
                        <p class="text-muted">
                            Professional quadcopter drone.
                        </p>
                        <a href="products.php" class="btn btn-primary">
                            View Product
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
