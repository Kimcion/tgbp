<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order-Penilla Tea-ny cafe </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
</head>
<body>

    <?php
        const PAGE = 'order';
        require_once 'partials/navbar.php';
    ?>

    <div class="container mt-3">
        <div class="mb-4">
            <h2>Order</h2>
            <p>para sa mga taong problimado mina kamo bakal na kamo mag laklak na sana.</p>
        </div>

        <form method="POST" action="invoice.php">
            <!-- Full Name -->
            <div class="mb-3">
                <label class="text-secondary fw-bold" for="full-name">Full Name:</label>
                <input type="text" class="form-control" id="full-name" name="full-name" required>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label class="text-secondary fw-bold" for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <!-- Mode -->
            <div class="mb-3">
                <label class="text-secondary fw-bold">Mode:</label>
                <br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="pickup" name="mode" value="Pickup" checked>
                    <label for="pickup" class="form-check-label">Pickup</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="delivery" name="mode" value="Delivery">
                    <label for="delivery" class="form-check-label">Delivery</label>
                </div>
            </div>

            <!-- Item and Weight -->
            <div class="mb-3">
                <div class="row">
                    <!-- Item -->
                    <div class="col-sm-6">
                        <label class="text-secondary fw-bold" for="civil-status">Item:</label>
                        <select class="form-control" id="item" name="item">
                            <option value="gsm blue">gsm blue</option>
                            <option value="san mig light">san mig light</option>
                            <option value="san mig apple</option>
                            
                        </select>
                    </div>

                    <!-- liters -->
                    <div class="col-sm-6 mt-3 mt-sm-0">
                        <label class="text-secondary fw-bold" for="full-name">liters:</label>
                        <input type="number" class="form-control" id="liters" name="liters" value="1" min="1" max="20">
                    </div>
                </div>

            </div>

            <!-- Preparation -->
            <div class="mb-3">
                <label class="text-secondary fw-bold mb-2">Preparation:</label>
                <br>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="mae" name="preparations[]" value="gsm blue">
                    <label for="ruffa" class="form-check-label">gsm blue</label>
                </div>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="ara" name="preparations[]" value="san mig light">
                    <label for="liza" class="form-check-label">san mig light</label>
                </div>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="daniel" name="preparations[]" value="san mig apple">
                    <label for="lara" class="form-check-label">san mig apple</label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mb-3 pt-2">
                <button type="submit" class="btn btn-secondary btn-lg" name="checkout">Checkout</button>
            </div>
        </form>
    </div>



    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>