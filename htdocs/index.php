<?php
require '../vendor/autoload.php';

function getGandiStatus() {
    $client = new GuzzleHttp\Client();
    $res = $client->get('https://status.gandi.net/api/v2/status.json');
    $gandi_status = json_decode($res->getBody(), true);
    return $gandi_status["status"]["description"];
};

?>
<html>
  <head>
    <title>Gandi Status Check</title>
  </head>
  <body>
    <h1><?php echo getGandiStatus(); ?></h1>
    <p><a href="https://status.gandi.net/">More info</a></p>
  </body>
</html>
