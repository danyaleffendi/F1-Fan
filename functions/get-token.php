<?php

function get_token($config)
{
    $url = PAYPAL_API_URL . '/v1/oauth2/token';
    $headers = ['Accept: application/json', 'Accept-Language: en_US'];
    //-H corresponds to HTTPHEADER
    //-u corresponds to USERPWD
    //-d corresponds to POSTFIELDS
    $opts = [
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_USERPWD => $config['client_id'] . ':' . $config['client_secret'],
        CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
        CURLOPT_RETURNTRANSFER => true,
    ];
    $c = curl_init();
    curl_setopt_array($c, $opts);
    $result = json_decode(curl_exec($c));
    //var_dump($result);
    $_SESSION['paypal']['token'] = $result->access_token;
    curl_close($c);
}

?>
