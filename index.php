<?php
    $url = 'https://api.cosmos.bluesoft.com.br/gtins/7891910000197.json';
    $headers = array(
    "Content-Type: application/json",
    "X-Cosmos-Token: wyJ4nIG_pFcxc0GWfXNOLQ"
    );

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FAILONERROR, true);

    $data = curl_exec($curl);
    if ($data === false || $data == NULL) {
    var_dump(curl_error($curl));
    } else {
    $object = json_decode($data);

    var_dump($object);
    }

    curl_close($curl);

?>