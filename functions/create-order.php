<?php

function create_order($config)
{
    $url = PAYPAL_API_URL . '/v2/checkout/orders';
    $headers = ["Content-Type: application/json", "Authorization: Bearer " . $_SESSION['paypal']['token']];
    $data = [
        'intent' => 'CAPTURE',
        'purchase_units' => [
            [
                'amount' => [
                    'currency_code' => 'CAD',
                    'value' => '5.00',
                ],
            ],
        ],
        'application_context' => [
            'brand_name' => 'FND',
            'user_action' => "PAY_NOW",
            'return_url' => $config['redirect_uri'],
        ],
    ];
    $opts = [
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_RETURNTRANSFER => true,
    ];
    $c = curl_init();
    curl_setopt_array($c, $opts);
    $result = json_decode(curl_exec($c));
    //var_dump($result);
    curl_close($c);
    print '<div ><a href="' . $result->links[1]->href . '"><img src="/api/images/donate.png" alt="donate button" class="donate-button" /></a></div>';
}

?>
