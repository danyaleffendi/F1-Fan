<!DOCTYPE html>
<html lang="en">
    <head>
        <title>F1Fan: Donate</title>
    </head>
    <body>
        <?php include_once "header.php"; ?>
        <main>
            <h2 class="title">Support Us</h2>
            <div class="container" id="donate-text">
                This is a non-commercial website to provide quick stats to F1 fans. <br />
                If you want to keep it going and wish to see more features and improvements, please support us. <br />
                Donate $5 via paypal by clicking the button below.

                <?php
                session_start();

                require_once '../functions/paypal-api.php';
                require_once '../functions/get-token.php';
                require_once '../functions/create-order.php';
                require_once '../functions/capture-order.php';
                
                get_token($PAYPAL);
                create_order($PAYPAL);
                capture_order($PAYPAL);
                ?>
            </div>
        </main>
        <?php include_once "footer.php"; ?>
    </body>
</html>
