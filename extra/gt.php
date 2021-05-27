<?php
require_once 'getresponseapi.php';

$url = GetResponse_URL . '/contacts';

$headers = array(
  "X-Domain: localhost/api/gt.php"
);
$opts = array(
  'http' => array(
    'header' => $headers,
    'method' => 'GET'
  )
);
$context = stream_context_create($opts);
$result = json_decode(file_get_contents($url, false, $context));
?>

<html lang="en">
<head>
    <title>Lab 8 - Trakt API</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<p class="h1 text-center">Trakt API: 15 Trending Movies</p>
<div class="m-1">
<table class="table table-bordered tbl">
        <thead>
        <tr>
            <th scope="col">Movie Title</th>
            <th scope="col">Year</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $r) { ?>
            <tr>
                
                <td><?=$r->movie->title; ?></a></td> 
                <td><?= $r->movie->year; ?></td> 
                <?php } ?>
        </tbody>
    </table>

    </div>
</body>
</html>