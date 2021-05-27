<?php

function capture_order($config)
{
    if (isset($_GET['token'])) {
        $token = $_GET['token'];

        $url = PAYPAL_API_URL . '/v2/checkout/orders/' . $token . '/capture';
        $headers = ["Content-Type: application/json", "Authorization: Bearer " . $_SESSION['paypal']['token']];
        $opts = [
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            //CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_RETURNTRANSFER => true,
        ];
        $c = curl_init();
        curl_setopt_array($c, $opts);
        $result = json_decode(curl_exec($c));
        //var_dump($result);
        curl_close($c);

        if ($result->status == "COMPLETED") {
            echo "<div class='donate-thankyou'>Thank you for your Donation</div>";
        }
    }
}

?>
