<?php
//require_once 'traktapi.php';

$url = 'http://ergast.com/api/f1/drivers.json';

/* $headers = array(
  "Content-Type:application/json",
  "trakt-api-version:2",
  "trakt-api-key:$TRAKT[client_id]"
); */
$opts = array(
  'http' => array(
    //'header' => $headers,
    'method' => 'GET'
  )
);
$context = stream_context_create($opts);
$result = json_decode(file_get_contents($url, true));

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
            <th scope="col">Driver</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $r) { ?>
            <tr>
                
                <td><?=$r->MRData->Drivers; ?></a></td> 
                
                <?php } ?>
        </tbody>
    </table>

    </div>
</body>
</html>