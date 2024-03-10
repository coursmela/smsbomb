<?php

for ($i = 0; $i <= 97; $i++) {
    $url = "https://api.teamxdraco.my.id/Sms/api{$i}.php?phone=";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    echo "URL{$i}: {$url}\n";
    echo "HTTP Status Code: {$http_status}\n";
    echo "Response: {$response}\n\n";
}

?>
