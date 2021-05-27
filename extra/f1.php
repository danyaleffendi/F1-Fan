<?php


$url = 'http://ergast.com/api/f1/2021/drivers.json';

//$context = stream_context_create($opts);
$result = json_decode(file_get_contents($url, true));

?>

<!doctype html>
<html lang="en">
<head>

<!--ADD jQUERY FIRST!-->
<script type="text/javascript" src="jquery-3.5.1.min.js"></script>   
    
<script type="text/javascript" src="f1.js"></script>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">
    <table class="table table-bordered tbl">
        <thead>
<tr>
    <th>Driver Name</th>
    <th>Nationality</th>
    <th>Number</th>
</tr>
</thead>
<tbody>
    <?php foreach ($result as $r) { ?>
        <tr>
            
            <td><?=$r->Drivers->givenName; ?></a></td> 
            <td><?= $r->MRData->DriverTable->Drivers->familyName;?></td> 
            <?php } ?>

</tbody>
</table>
<div class="output"></div>
</div>
</body>
</html>
