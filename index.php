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
            'Cookie: __test=e0bd7a371c527dbb406d1d48153b236b',
            'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
            'Host: www.web-bro.ct.ws'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    function xmp($vars) {
        echo "<xmp style='background-color: #6BB6BB'>";
        print_r($vars);
        echo "</xmp>";
    }

?>