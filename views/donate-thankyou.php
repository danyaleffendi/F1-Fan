<!DOCTYPE html>
<html lang="en">
    <head>
        <title>F1Fan: Thankyou</title>
    </head>
    <body>
        <?php include_once "header.php"; ?>
        <main>
            <h2 class="title">Support Us</h2>

            <div class="container" id="donate-text">
                <?php
                session_start();

                require_once '../functions/paypal-api.php';
                require_once '../functions/get-token.php';
                require_once '../functions/create-order.php';
                require_once '../functions/capture-order.php';

                capture_order($PAYPAL);
                ?>
            </div>
        </main>
        <?php include_once "footer.php"; ?>
    </body>
</html>
