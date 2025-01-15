<?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://www.web-bro.ct.ws/php/index.php?type=getStocksNews',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: __test=34e0a0997d7ee3a4c2768d203b4147f5',
            'upgrade-insecure-requests: 1',
            'Host: www.web-bro.ct.ws'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

?>